<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationContoller;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
Route::post('/profile', [ProfileController::class, 'store'])->name('user.profile.store');
Route::get('/registration', [RegistrationContoller::class, 'registrations'])->name('registrations');
Route::get('/registered_members', [RegistrationContoller::class, 'members'])->name('registered.members');
Route::post('/registration', [RegistrationContoller::class, 'store'])->name('registration.fee.store');