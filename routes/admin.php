<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;

Route::group(['middleware' => ["UserAdmin", 'prevent-back'], 'as' => 'adm.'], function() {

    Route::get('/admin',[DashboardController::class,'index'])->name('dashboardadmin');

    // User
    Route::get('/admin/user',[UserController::class,'user'])->name('user');
    Route::get('/admin/user/destroy/{id}',[UserController::class,'destroyuser'])->name('destroyuser');

    Route::get('/admin/useradmin',[UserController::class,'admin'])->name('useradmin');
    Route::get('/admin/useradmin/destroy/{id}',[UserController::class,'destroyadmin'])->name('destroyadmin');
    Route::get('/admin/useradmin/add',[UserController::class,'addAdmin'])->name('addadmin');
    Route::post('admin/useradmin/add',[UserController::class,'storeadmin'])->name('storeadmin');

    // Photo
    Route::get('/admin/photo',[PhotoController::class,'index'])->name('photoadmin');
    Route::get('/admin/photo/destroy/{id}',[PhotoController::class,'destroy'])->name('destroyphotoadmin');
    Route::get('/admin/photo/add',[PhotoController::class,'addphoto'])->name('addphotoadmin');
    Route::post('admin/photo/add',[PhotoController::class,'store'])->name('storephoto');
    Route::get('/admin/photo/{id}',[PhotoController::class,'show'])->name('showphoto');
    Route::get('/admin/photo/edit/{id}',[PhotoController::class,'edit'])->name('editphoto');
    Route::post('admin/photo/edit/{id}',[PhotoController::class,'update'])->name('updatephoto');
    Route::get('/admin/photo/active/{id}',[PhotoController::class,'active'])->name('activephoto');
    Route::get('/admin/photo/deactive/{id}',[PhotoController::class,'deactive'])->name('deactivephoto');

    // Category
    Route::get('/admin/category',[CategoryController::class,'index'])->name('categoryadmin');
    Route::get('/admin/category/add',[CategoryController::class,'addcategory'])->name('addcategoryadmin');
    Route::post('admin/category/add',[CategoryController::class,'store'])->name('storecategory');
    Route::get('/admin/category/deactive/{id}',[CategoryController::class,'deactive'])->name('deactivecategory');
    Route::get('/admin/category/active/{id}',[CategoryController::class,'active'])->name('activecategory');
    Route::get('/admin/category/delete/{id}',[CategoryController::class,'destroy'])->name('deletecategory');
    Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit'])->name('editcategory');
    Route::post('admin/category/update/{id}',[CategoryController::class,'update'])->name('updatecategory');
});