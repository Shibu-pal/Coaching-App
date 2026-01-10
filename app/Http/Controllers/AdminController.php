<?php

namespace App\Http\Controllers;

use App\Mail\SendAdmitCard;
use App\Models\Notice;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function admin_student() {
        $users = User::with('cources')->get();
        return view('Admin.admin-student', compact('users'));
    }

    public function admin_teacher() {
        $teachers = Teacher::with('departments')->get();
        return view('Admin.admin-teacher', compact('teachers'));
    }

    public function updateRollNo(Request $request)
    {
        // 1. Validate
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'roll_no' => 'required|unique:users,roll_no' // Ensure roll no is unique
        ]);

        // 2. Find Student
        $student = User::with('cources')->find($request->user_id);

        // 3. Update
        $student->roll_no = $request->roll_no;
        $student->save();

        Mail::to($student->email)->send(new SendAdmitCard($student));

        // 4. Redirect
        return redirect()->back()->with('success', 'Roll Number Assigned Successfully!');
    }

    public function viewStudent($id)
    {
        $student = User::with('cources')->find($id);
        return view('Admin.view-student', compact('student'));
    }

    public function toggleTeacherStatus($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->is_active = !$teacher->is_active;
        $teacher->save();

        return redirect()->back()->with('success', 'Teacher status updated successfully.');
    }

    // Notice Management Functions

    public function admin_notice()
    {
        $notices = Notice::orderBy('notice_date', 'desc')->get();
        return view('Admin.admin-notice', compact('notices'));
    }

    public function create_notice()
    {
        return view('Admin.admin-notice-create');
    }

    public function store_notice(Request $request)
    {
        $request->validate([
            'notice_name' => 'required|string|max:255',
            'notice_pdf' => 'nullable|file|mimes:pdf|max:10240', // 10MB max
        ]);

        $noticeData = [
            'notice_name' => $request->notice_name,
            'notice_date' => now(),
        ];

        if ($request->hasFile('notice_pdf')) {
            $file = $request->file('notice_pdf');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('notices', $filename, 'public');
            $noticeData['notice_pdf'] = $path;
        }

        Notice::create($noticeData);

        return redirect()->route('admin.notice')->with('success', 'Notice created successfully.');
    }

    public function edit_notice($id)
    {
        $notice = Notice::findOrFail($id);
        return view('Admin.admin-notice-edit', compact('notice'));
    }

    public function update_notice(Request $request, $id)
    {
        $notice = Notice::findOrFail($id);

        $request->validate([
            'notice_name' => 'required|string|max:255',
            'notice_pdf' => 'nullable|file|mimes:pdf|max:10240', // 10MB max
        ]);

        $noticeData = [
            'notice_name' => $request->notice_name,
        ];

        if ($request->hasFile('notice_pdf')) {
            // Delete old file if exists
            if ($notice->notice_pdf && Storage::disk('public')->exists($notice->notice_pdf)) {
                Storage::disk('public')->delete($notice->notice_pdf);
            }

            $file = $request->file('notice_pdf');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('notices', $filename, 'public');
            $noticeData['notice_pdf'] = $path;
        }

        $notice->update($noticeData);

        return redirect()->route('admin.notice')->with('success', 'Notice updated successfully.');
    }

    public function delete_notice($id)
    {
        $notice = Notice::findOrFail($id);

        // Delete associated file if exists
        if ($notice->notice_pdf && Storage::disk('public')->exists($notice->notice_pdf)) {
            Storage::disk('public')->delete($notice->notice_pdf);
        }

        $notice->delete();

        return redirect()->route('admin.notice')->with('success', 'Notice deleted successfully.');
    }
}
