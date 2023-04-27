<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;

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
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\FrontController::class, 'socialStatus'])->name('social.status');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('students', App\Http\Controllers\StudentController::class);


Route::resource('faculties', App\Http\Controllers\FacultyController::class);

Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');


Route::resource('specialities', App\Http\Controllers\SpecialityController::class);


Route::resource('tutors', App\Http\Controllers\TutorController::class);


Route::resource('groups', App\Http\Controllers\GroupController::class);
