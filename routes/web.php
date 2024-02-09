<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;







Route::get('/', [HomeController::class, 'home']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('about', [HomeController::class, 'about']);
Route::post('/get-comment', [HomeController::class, 'getComment'])->name('get-comment');



Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
 



Route::get('wedding', [ServiceController::class, 'wedding']);
Route::get('festival', [ServiceController::class, 'festival']);
Route::get('anniversry', [ServiceController::class, 'anniversry']);
Route::get('kittiparty', [ServiceController::class, 'kitti']);
Route::get('officeparty', [ServiceController::class, 'office']);
Route::get('birthdayparty', [ServiceController::class, 'birthday']);
Route::get('innugration', [ServiceController::class, 'innuga']);
Route::get('Specialocaasion', [ServiceController::class, 'special']);
Route::get('kidsparty', [ServiceController::class, 'kids']);
Route::get('photo', [ServiceController::class, 'photo']);
Route::get('video', [ServiceController::class, 'video']);



Route::post('/submit-form', [ModelController::class, 'submitForm'])->name('submit.form');