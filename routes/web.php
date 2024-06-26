<?php

use App\Http\Controllers\Admin\DocumentsController;
use App\Http\Controllers\User\DocumentController as UserDocumentsController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\MembersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\RegistrationController;
use App\Http\Controllers\User\ContributionsController;

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

Route::group([
        'prefix'=>'admin',
        'middleware'=>'is_admin',
        'as'=>'admin.',
],function(){
        Route::get('home',[AdminHomeController::class,'index'])->name('home');
        Route::get('members',[MembersController::class,'members'])->name('members');
        Route::get('add_members',[MembersController::class,'add_member'])->name('add_members');
        Route::post('add_members',[MembersController::class,'create'])->name('create.member');
        Route::get('edit_{id}',[MembersController::class,'edit_member'])->name('edit.member');
        Route::put('update/{id}',[MembersController::class,'update'])->name('update.member');
        Route::get('delete/{id}',[MembersController::class,'delete_member'])->name('delete.member');
        Route::get('monthly_contributions',[MembersController::class,'monthly_contr'])->name('monthly.contributions');
        Route::get('register_member',[MembersController::class,'register'])->name('register.member');
        Route::post('register_member',[MembersController::class,'store_member'])->name('store.member');
        Route::get('membership_fees',[MembersController::class,'registration_fees'])->name('registration.fee');
        Route::get('monthly_contribution',[MembersController::class,'add_monthly'])->name('add.monthly');
        Route::post('monthly_contribution',[MembersController::class,'monthly_store'])->name('monthly.money.store');
        Route::get('documents',[DocumentsController::class,'index'])->name('documents.list');
        Route::post('documents',[DocumentsController::class,'store'])->name('documents.upload');
        Route::get('delete/document/{doc}',[DocumentsController::class,'destroy'])->name('documents.delete');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
Route::post('/profile', [ProfileController::class, 'store'])->name('user.profile.store');
Route::get('/password', [ProfileController::class, 'password_update'])->name('password');
Route::put('/password', [ProfileController::class, 'password_store'])->name('password.store');
Route::post('/registration', [RegistrationController::class, 'store'])->name('registration.fee.store');
Route::post('/monthly_contribution', [ContributionsController::class, 'store_monthly_contr'])->name('monthly.fee.store');
Route::get('/documents',[UserDocumentsController::class,'index'])->name('documents.list');

Route::group([
        'middleware'=>'registered_member'
],function(){
        Route::get('/members_registered', [RegistrationController::class, 'members'])->name('registered.members');
        Route::get('/monthly_contribution', [ContributionsController::class, 'monthly_contr'])->name('contribution.monthly');
});

Route::group([
        'middleware'=>'already_registered'
],function(){
        Route::get('/members_registration', [RegistrationController::class, 'registrations'])->name('registrations');
});