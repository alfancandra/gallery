<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Autentikasi\LoginController;
use App\Http\Controllers\Autentikasi\RegisterController;
use App\Http\Controllers\Autentikasi\ForgotPasswordController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PhotoController;

use App\Http\Controllers\PhotoCollectionController;

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
Route::group(['middleware' => 'prevent-back'],function(){
	Auth::routes();
	Route::get('/',[HomeController::class,'index'])->name('home');
});


Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::get('/forgotpassword',[ForgotPasswordController::class,'index'])->name('forgotpassword');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::post('register',[RegisterController::class,'store'])->name('storeregister');
Route::post('login',[LoginController::class,'login'])->name('storelogin');
Route::post('forgotpassword',[ForgotPasswordController::class,'sendemail'])->name('sendemail');

// Check verifikasi email
Route::get('resetpassword/{userToken}/timestamp/{timestamp}',[ForgotPasswordController::class,'CheckLink'])->name('CheckLink');
Route::post('resetpassword/{userToken}/timestamp/{timestamp}',[ForgotPasswordController::class,'newpassword'])->name('newpassword');


Route::get('/photo/{id}/{title}',[PhotoCollectionController::class,'photodescription'])->name('photodescription');
Route::get('/photos',[PhotoCollectionController::class,'showall'])->name('showallphoto');
Route::get('/category/{category_id}',[PhotoCollectionController::class,'showbycategory'])->name('showbycategory');

Route::post('comment/{id_photo}/{id_user}',[CommentController::class,'store'])->name('newcomment');