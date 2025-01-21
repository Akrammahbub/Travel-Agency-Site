<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\front\FrontEndController;
use App\Http\Controllers\User\UserController;


// Frontend
Route::get("/",[FrontEndController::class,'home'])->name('home');
Route::get('/about',[FrontEndController::class,'about'])->name('about');
Route::get('/destinations',[FrontEndController::class,'destinations'])->name('destinations');
Route::get('/destination',[FrontEndController::class,'destination'])->name('destination');
Route::get('/packages',[FrontEndController::class,'packages'])->name('packages');
Route::get('/package',[FrontEndController::class,'package'])->name('package');
Route::get('/team_member',[FrontEndController::class,'team_member'])->name('team-member');
Route::get('/team_members',[FrontEndController::class,'team_members'])->name('team-members');
Route::get('/faq',[FrontEndController::class,'faq'])->name('faq');
Route::get('/blog',[FrontEndController::class,'blog'])->name('blog');
Route::get('/contact',[FrontEndController::class,'contact'])->name('contact');  
Route::get('/registration',[FrontEndController::class,'registration'])->name('registration');
Route::post('/registration_submit',[FrontEndController::class,'registration_submit'])->name('registration_submit');
Route::get('/registration-verify/{email}/{token}',[FrontEndController::class,'registration_verify'])->name('registration_verify');
Route::get('/login',[FrontEndController::class,'login'])->name('login');
Route::post('/login',[FrontEndController::class,'login_submit'])->name('login_submit');
Route::get('/forget_password',[FrontEndController::class,'forget_password'])->name('forget_password');
Route::post('/forget_password',[FrontEndController::class,'forget_password_submit'])->name('forget_password_submit');
Route::get('/reset_password/{token}/{email}',[FrontEndController::class,'reset_password'])->name('reset_password');
Route::post('/reset_password/{token}/{email}',[FrontEndController::class,'reset_password_submit'])->name('reset_password_submit');

Route::get('/logout',[FrontEndController::class,'logout'])->name('logout');


// User
Route::middleware('auth')->prefix('user')->group(function () {    
    Route::get('/dashboard',[UserController::class,'dashboard'])->name('user_dashboard');
    Route::get('/profile',[UserController::class,'profile'])->name('user_profile');
    Route::post('/profile',[UserController::class,'profile_submit'])->name('user_profile_submit');
});

// Admin

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/dashboard',[AdminDashboardController::class,'dashboard'])->name('admin_dashboard');
    Route::get('/profile',[AdminAuthController::class,'profile'])->name('admin_profile');
    Route::post('/profile',[AdminAuthController::class,'profile_submit'])->name('admin_profile_submit');

});

Route::prefix('admin')->group(function () {
    Route::get('/login',[AdminAuthController::class,'login'])->name('admin_login');
    Route::post('/login',[AdminAuthController::class,'login_submit'])->name('admin_login_submit');
    Route::get('/logout',[AdminAuthController::class,'logout'])->name('admin_logout');
    Route::get('/forget-password',[AdminAuthController::class,'forget_password'])->name('admin_forget_password');
    Route::post('/forget-password',[AdminAuthController::class,'forget_password_submit'])->name('admin_forget_password_submit');
    Route::get('/reset-password/{token}/{email}',[AdminAuthController::class,'reset_password'])->name('admin_reset_password');
    Route::post('/reset-password/{token}/{email}', [AdminAuthController::class, 'reset_password_submit'])->name('admin_reset_password_submit');


});


