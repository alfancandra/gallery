<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController;

use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::get('/forgotpassword',[ForgotPasswordController::class,'index'])->name('forgotpassword');

Route::post('register',[RegisterController::class,'store'])->name('storeregister');
Route::post('login',[LoginController::class,'login'])->name('storelogin');
Route::post('forgotpassword',[ForgotPasswordController::class,'sendemail'])->name('sendemail');

// Check verifikasi email
Route::get('resetpassword/{userToken}/timestamp/{timestamp}',[ForgotPasswordController::class,'CheckLink'])->name('CheckLink');
Route::post('resetpassword/{userToken}/timestamp/{timestamp}',[ForgotPasswordController::class,'newpassword'])->name('newpassword');


Route::get('/admin',[DashboardController::class,'index'])->name('dashboardadmin');
