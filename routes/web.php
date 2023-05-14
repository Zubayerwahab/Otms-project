<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CourseCategoryController;
use App\Http\Controllers\Admin\CourseSubCategoryController;

//Route::as('front.')->group(function (){
    Route::get('/',[FrontController::class,'home'])->name('front.home');
    Route::get('/aboutus',[FrontController::class,'aboutUs'])->name('front.about');
    Route::get('/contactus',[FrontController::class,'contactUs'])->name('front.contact');

//});
//Route::controller(HomeController::class)->group(function (){
//    Route::get('/', 'index')->name('home');
//    Route::get('/aboutus','about')->name('about');
//    Route::get('/contactus','contact')->name('contact');
//});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::resource('course-categories',CourseCategoryController::class);
    Route::resource('course-sub-categories',CourseSubCategoryController::class);
});
