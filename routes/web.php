<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    //route for creating new student controller
    Route::get('students', [\App\Http\Controllers\StudentController::class, 'index'])->name('students.index');
    Route::get('students/create', [\App\Http\Controllers\StudentController::class, 'create'])->name('students.create');
    Route::get('students/edit', [App\Http\Controllers\StudentController::class, 'edit'])->name('students.edit');

    Route::get('students/employee', [\App\Http\Controllers\StudentController::class, 'employee'])->name('students.employee');
    Route::get('employee', [\App\Http\Controllers\StudentController::class, 'store'])->name('students.store');



    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
