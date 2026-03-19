<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeePortalController;
use App\Http\Controllers\AttendanceController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::post('/enquiry', [\App\Http\Controllers\EnquiryController::class, 'store'])->name('enquiry.store');

// Enrollment Routes
Route::get('/enroll', [\App\Http\Controllers\EnrollmentController::class, 'create'])->name('enroll.create');
Route::post('/enroll', [\App\Http\Controllers\EnrollmentController::class, 'store'])->name('enroll.store');

// Employee Login & Portal (Removed)

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin/enquiries', [\App\Http\Controllers\EnquiryController::class, 'index'])->name('admin.enquiries');

    // Enrollment Management
    Route::get('/admin/enrollments', [\App\Http\Controllers\EnrollmentController::class, 'index'])->name('admin.enrollments.index');
    Route::patch('/admin/enrollments/{enrollment}/status', [\App\Http\Controllers\EnrollmentController::class, 'updateStatus'])->name('admin.enrollments.status');
    
    // Notifications
    Route::get('/admin/notifications', [\App\Http\Controllers\NotificationController::class, 'index'])->name('admin.notifications.index');
    Route::post('/admin/notifications/send', [\App\Http\Controllers\NotificationController::class, 'send'])->name('admin.notifications.send');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';