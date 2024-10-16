<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AttendanceController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/showImage', [ImageController::class, 'showImage']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/students', [StudentController::class, 'create'])->name('students.create');
    Route::post('/students', [StudentController::class, 'store'])->name('students.store');
    Route::get('/students/all', [StudentController::class, 'index'])->name('students.index');
    Route::get('/students/filter', [StudentController::class, 'filter'])->name('students.filter');

    Route::get('/activities/create', [ActivityController::class, 'create'])->name('activities.create');
    Route::post('/activities/store', [ActivityController::class, 'store'])->name('activities.store');
    Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');

    Route::get('/attendance/create', [AttendanceController::class, 'create'])->name('attendance.create');
    Route::post('/attendance/store', [AttendanceController::class, 'store'])->name('attendance.store');
    Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');


});

require __DIR__.'/auth.php';
