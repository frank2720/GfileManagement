<?php

use App\Http\Controllers\ContributionsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\MembersAccess;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationContoller;
use App\Http\Middleware\MemberRegisteredAccess;

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
Route::get('/members_registration', [RegistrationContoller::class, 'registrations'])
        ->middleware(MemberRegisteredAccess::class)
        ->name('registrations');
Route::get('/members_registered', [RegistrationContoller::class, 'members'])
        ->middleware(MembersAccess::class)
        ->name('registered.members');
Route::post('/registration', [RegistrationContoller::class, 'store'])->name('registration.fee.store');
Route::get('/monthly_contribution', [ContributionsController::class, 'monthly_contr'])
        ->middleware(MembersAccess::class)
        ->name('contribution.monthly');
Route::post('/monthly_contribution', [ContributionsController::class, 'store_monthly_contr'])->name('monthly.fee.store');