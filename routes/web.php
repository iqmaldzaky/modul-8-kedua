<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware ('auth');

Route::get('home', [HomeController::class, 'index'])->name('home') ->middleware('auth');

Route::get('employees', [HomeController::class, 'index'])->name('employees.index')->middleware('auth');

Route::get('profile', ProfileController::class)->name('profile')->middleware('auth');

Route::resource('employees', EmployeeController::class)->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::post('/login', [LoginController::class, 'authenticate']);

