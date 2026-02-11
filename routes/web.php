<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::view('/student/login','student-login')->name('student.login');
    Route::post('/student/login','student_login')->name('student.login.option');
    Route::get('/student/admit-card', 'admit_card')->name('student.admit_card')->middleware('auth');
    Route::get('/student/admit-card/download','admit_card_download')->name('admit.download')->middleware('auth');
    Route::get('/sitemap.xml','sitemap');
    Route::view('/teacher/login','teacher-login')->name('teacher.login');
    Route::post('/teacher/login','teacher_login')->name('teacher.login.option');
    Route::get('/teacher/dashboard','teacher_dashboard')->name('teacher.dashboard')->middleware('auth:teacher');
    Route::view('/teacher/register','teacher-register')->name('teacher.register');
    Route::post('/teacher/register','teacher_register')->name('teacher.register.option');
    Route::post('/teacher/logout','teacher_logout')->name('teacher.logout')->middleware('auth:teacher');
    Route::view('/admin/login','admin-login')->name('admin.login');
    Route::post('/admin/login', 'adminLogin')->name('admin.login');
    Route::post('/admin/logout', 'adminLogout')->name('admin.logout')->middleware('auth:admin');
    Route::get('/admin','admin');
    Route::get('/register/{register}', 'getRegister')->name('get_register');
    Route::post('/register/{register}', 'postRegister')->name('post_register');
    Route::view('/faculty','faculty')->name('faculty');
    Route::view('/gallery','gallery')->name('gallery');
});

Route::controller(AdminController::class)->group(function () {
    Route::middleware('auth:admin')->group(function () {
        Route::view('/admin/dashboard', 'Admin.admin-dashboard')->name('admin.dashboard');
        Route::get('/admin/student', 'admin_student')->name('admin.student');
        Route::get('/admin/teacher', 'admin_teacher')->name('admin.teacher');
        Route::post('admin/update-roll-no', 'updateRollNo')->name('admin.update_roll_no');
        Route::get('/admin/student/view/{id}', 'viewStudent')->name('admin.view_student');
        Route::get('/teacher/toggle-status/{id}', 'toggleTeacherStatus')->name('admin.toggle_teacher_status');

        // Notice Management Routes
        Route::get('/admin/notice', 'admin_notice')->name('admin.notice');
        Route::get('/admin/notice/create', 'create_notice')->name('admin.notice.create');
        Route::post('/admin/notice/store', 'store_notice')->name('admin.notice.store');
        Route::get('/admin/notice/edit/{id}', 'edit_notice')->name('admin.notice.edit');
        Route::put('/admin/notice/update/{id}', 'update_notice')->name('admin.notice.update');
        Route::delete('/admin/notice/delete/{id}', 'delete_notice')->name('admin.notice.delete');
    });
});

