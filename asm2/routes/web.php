<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\draftControler;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\homeController;

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

Route::get('/',function(){
    return view('pages.home');
})->name('home');

Route::get('/shop',[homeController::class,'index'])->name('shop');
Route::get('/about',[App\Http\Controllers\homeController::class,'about'])->name('about');
Route::get('/checkout',[App\Http\Controllers\homeController::class,'checkout'])->name('checkout');
Route::get('/gallery',[App\Http\Controllers\homeController::class,'gallery'])->name('gallery');
Route::get('/payment',[App\Http\Controllers\homeController::class,'payment'])->name('payment');

// Route::get('/signin',[App\Http\Controllers\homeController::class,'signin'])->name('signin');
// Route::get('/signup',[App\Http\Controllers\homeController::class,'signup'])->name('signup');
Route::get('/single',[App\Http\Controllers\homeController::class,'single'])->name('single');
Route::get('contact',[App\Http\Controllers\homeController::class,'contact'])->name('contact');
Route::get('/draft', [draftControler::class,'show']);
Route::group(['middleware' => 'auth.check'], function () {
    // Route need to check login
});
// Sign in

Route::get('/login', [AuthController::class,'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class,'signin'])->name('signinpost');

//---------------------------------------------------------------------------------------------------------//
// Sign up
Route::get('/register', [AuthController::class,'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class,'signup'])->name('signuppost');

//---------------------------------------------------------------------------------------------------------//
// Sign out
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
// route::get('/',[App\Admin\Controllers\AuthController::class])