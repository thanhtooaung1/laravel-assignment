<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('student', StudentController::class)->middleware('auth');

Route::middleware('auth')->prefix('course')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('course.index');
    Route::get('/create', [CourseController::class, 'create'])->name('course.create');
    Route::post('/', [CourseController::class, 'store'])->name('course.store');
    Route::get('/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
    Route::put('/{course}', [CourseController::class, 'update'])->name('course.update');
    Route::get('/{course}', [CourseController::class, 'show'])->name('course.show');
    Route::delete('/{course}', [CourseController::class, 'destroy'])->name('course.destroy');
});
