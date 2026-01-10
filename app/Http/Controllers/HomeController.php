<?php

namespace App\Http\Controllers;

use App\Mail\RegisterCompleted;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Admin;
use App\Models\Cource;
use App\Models\Notice;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function getRegister($register)
    {
        return view('register', ['register' => $register]);
    }

    public function home(){
        $notices = Notice::orderBy('id', 'desc')->limit(10)->get();
        return view('welcome',compact('notices'));
    }

    public function postRegister(Request $request, $register)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'contact' => 'required|numeric|digits:10',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'father_occupation' => 'required|string|max:255',
            'mother_occupation' => 'required|string|max:255',
            'aadhar' => 'required|numeric|digits:12|unique:users,aadhar',
            'DOB' => 'required|date',
            'guardian_name' => 'required|string|max:255',
            'relation' => 'required|string|max:255',
            'vill' => 'required|string|max:255',
            'post' => 'required|string|max:255',
            'ps' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'pin' => 'required|numeric|digits:6',
            'state' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'religion' => 'required|string|max:255',
            'cast' => 'required|string|max:255',
            'gender' => 'required|string|max:50',
            'Institute' => 'required|string|max:255',
            'exam' => 'required|string|max:255',
            'grade' => 'required|string|max:10',
            'signature' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'student_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $cource = Cource::where('cource_name', $register)->first();
        if (!$cource) {
            return redirect()->back()->withErrors(['register' => 'Invalid course selected.'])->withInput();
        }

        // Handle file uploads
        $signaturePath = $request->file('signature')->store('signatures', 'public');
        $studentImagePath = $request->file('student_image')->store('student_images', 'public');

        $plainPassword = Carbon::parse($request->DOB)->format('dmY');

        // Create the student record
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'contact' => $validatedData['contact'],
            'father_name' => $validatedData['father_name'],
            'mother_name' => $validatedData['mother_name'],
            'father_occupation' => $validatedData['father_occupation'],
            'mother_occupation' => $validatedData['mother_occupation'],
            'aadhar' => $validatedData['aadhar'],
            'DOB' => $validatedData['DOB'],
            'password' => Hash::make($plainPassword),
            'guardian_name' => $validatedData['guardian_name'],
            'relation' => $validatedData['relation'],
            'vill' => $validatedData['vill'],
            'post' => $validatedData['post'],
            'ps' => $validatedData['ps'],
            'district' => $validatedData['district'],
            'pin' => $validatedData['pin'],
            'state' => $validatedData['state'],
            'nationality' => $validatedData['nationality'],
            'religion' => $validatedData['religion'],
            'cast' => $validatedData['cast'],
            'gender' => $validatedData['gender'],
            'Institute' => $validatedData['Institute'],
            'exam' => $validatedData['exam'],
            'grade' => $validatedData['grade'],
            'cource_id' => $cource->id,
            'signature' => $signaturePath,
            'student_image' => $studentImagePath,
        ]);

        $data = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $plainPassword,
            'register' => $register,
        ];
        Mail::to($validatedData['email'])->send(new RegisterCompleted($data));

        // Redirect back with success message
        return redirect()->route('home')->with('status', 'Registration successful!');
    }

    public function admin(){
        if(Auth::guard('admin')){
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login');
        }
    }

    public function adminLogin(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard')->with('status', 'Admin logged in successfully!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function adminLogout(Request $request) {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login')->with('status', 'Admin logged out successfully!');
    }

    public function teacher_login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $teacher = Teacher::where('email', $credentials['email'])->first();
        // dd($teacher->is_active);
        if (!$teacher || !$teacher->is_active) {
            return back()->withErrors([
                'email' => 'Your account is not active. Please contact the administrator.',
            ])->onlyInput('email');
        }

        if (Auth::guard('teacher')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('teacher.dashboard')->with('status', 'Teacher logged in successfully!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function teacher_dashboard() {
        $teacher = Auth::guard('teacher')->id();
        $teacher = Teacher::with('departments')->find($teacher);
        return view('teacher_dashboard', compact('teacher'));
    }

    public function teacher_register(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:50',
            'email' => 'required|email|unique:teachers,email',
            'mobile' => 'required|numeric|digits:10|unique:teachers,mobile',
            'password' => 'required|string|min:8|confirmed',
            'department_id' => 'required|exists:departments,id',
        ]);
        // Create the teacher record
        Teacher::create([
            'name' => $validatedData['name'],
            'gender' => $validatedData['gender'],
            'email' => $validatedData['email'],
            'mobile' => $validatedData['mobile'],
            'password' => Hash::make($validatedData['password']),
            'department_id' => $validatedData['department_id'],
        ]);
        return redirect()->route('teacher.login')->with('status', 'Teacher registered successfully! Please wait for admin approval before logging in.');
    }

    public function teacher_logout(Request $request) {
        Auth::guard('teacher')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('teacher.login')->with('status', 'Teacher logged out successfully!');
    }

    public function student_login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $credentials['email'])->first();
        if($user->roll_no == null){
            return back()->withErrors([
                'email' => 'Your account is not activated yet. Please contact the administrator.',
            ])->onlyInput('email');
        }

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('student.admit_card')->with('status', 'Student logged in successfully!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function admit_card() {
        $user = Auth::guard('web')->user();
        return view('student_admit_card', compact('user'));
    }
    
    public function admit_card_download()
    {
        // Get logged in user data (Mocking data for this example)
        // In real app: $user = Auth::user();
        $user = Auth::guard('web')->user();
        $cource = Cource::find($user->cource_id);
        $data = [
            'name' => $user->name, // Replace with $user->name
            'father_name' => $user->father_name,
            'roll_no' => $user->roll_no,
            'session' => '2026-27',
            'course' => $cource->cource_name, // Example selection
            'photo' => $user->student_image ? storage_path('app/public/' . $user->student_image) : null,
            'phone' => '9242269090'
        ];
        // return $data;
        // Load the PDF view with data
        $pdf = Pdf::loadView('pdf_template', $data);

        // Set paper size (Landscape matches your image better)
        $pdf->setPaper('A4', 'landscape');

        // Download the file
        return $pdf->download('admit-card.pdf');
    }

    public function sitemap()
    {
        $categories = ['xi_science', 'neet_freser', 'neet_repeater', 'test_series'];
        
        return response()->view('sitemap', [
            'categories' => $categories
        ])->header('Content-Type', 'text/xml');
    }
}