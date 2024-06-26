<?php

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

Route::middleware('auth')->group(function () {
    // Rute-rute yang hanya dapat diakses setelah login
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard'); 
    Route::get('/home', function () {
        return view('home');
    });
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


});


Route::get('/login', [App\Http\Controllers\AuthController::class, 
            'showLoginForm'])->name('login'); 
Route::post('/login', [App\Http\Controllers\AuthController::class, 
           'login']); 
Route::get('/register', [App\Http\Controllers\AuthController::class, 
           'showRegistrationForm'])->name('register'); 
Route::post('/register', [App\Http\Controllers\AuthController::class,
           'register']); 
Route::post('/logout', [App\Http\Controllers\AuthController::class, 
          'logout'])->name('logout');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 
          'index'])->name('dashboard'); 
