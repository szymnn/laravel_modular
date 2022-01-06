<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Artisan;

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

//main
Route::get('/', function () {
    return view('welcome');
})->name('index.page');

//Logowanie
Route::get('/login', [AuthController::class, "loginIndex"])->name("login.page");
Route::post('login', [AuthController::class, "authUser"])->name("login");

//Rejestracja
Route::get('/register', function () {
    return view('layouts.auth.register');
})->name('register.page');
Route::post('register', [AuthController::class, "store"])->name("register");

//Wyloguj się
Route::get('logout', [AuthController::class, "logout"])->name("logout");


Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware('auth')->name('dashboard.page');


