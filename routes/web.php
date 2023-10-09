<?php

use App\Http\Controllers\Doctor_Controller;
use App\Http\Controllers\Patien_Controller;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {
    //Route::get('/dashboard', [Doctor_Controller::class, 'doctorDB'])->name('doctorDB');
});

Route::prefix('doctor')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('/dashboard', [Doctor_Controller::class, 'doctorDB'])->name('doctorDB');
    Route::get('/home', [Doctor_Controller::class, 'Dhome'])->name('Dhome');
});


Route::prefix('patient')->middleware('auth')->group(function () {
    Route::get('/dashboard', [Patien_Controller::class, 'patientDB'])->name('patientDB');
    Route::get('/makeappoiment', [Patien_Controller::class, 'makeappoiment'])->name('makeappoiment');
    Route::post('/profile', [Patien_Controller::class, 'patientprofile'])->name('patientprofile');
});

Route::get('/error', function () {
    return view('404');
});



Route::get('/test', function () {
    return view('test');
});

Route::get('/packages', function () {
    return view('packages');
});