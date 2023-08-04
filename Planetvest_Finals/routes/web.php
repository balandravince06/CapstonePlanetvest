<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FarmerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// User
Route::get('/',[HomepageController::class, 'index'])->name('layout');
Route::get('/login',[HomepageController::class, 'login'])->name('login')->middleware('alreadyLoggedIn');
Route::get('/register',[HomepageController::class, 'register'])->name('register')->middleware('alreadyLoggedIn');
Route::post('/register-user',[HomepageController::class, 'registerUser'])->name('register-user');
Route::post('/login-user',[HomepageController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard',[HomepageController::class, 'dashboard'])->name('dashboard')->middleware('isLoggedIn')->middleware('user-access:user');
Route::get('/logout', [HomepageController::class, 'logout']);



// Admin
Route::middleware(['user-access:admin'])->group(function(){
Route::get('/admin',[HomepageController::class, 'admin'])->name('admin');
});


// Farmer
Route::middleware(['user-access:farmer'])->group(function(){
Route::get('/farmer',[HomepageController::class, 'farmer'])->name('farmer');
});