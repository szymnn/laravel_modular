<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\UserLog;
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
    $posts=Posts::simplepaginate(4);
    return view('welcome', ['posts'=>$posts]);
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



Route::prefix('dashboard')->middleware('auth')->group(function () {

    Route::get('/', function () {
        $logs=UserLog::simplepaginate(10);
        return view('dashboard.dashboard', ['logs'=>$logs ]);
    })->name('dashboard.page');

    //Route::get('/logs', [AuthController::class, "index"])->name("logs");
//    Route::get('logs', function () {
//        $logs=UserLog::simplepaginate(4);
//        return view('dashboard.components.tables.user_logs', ['logs'=>$logs]);
//    })->name('logs');

    Route::get('/posts/api', [PostsController::class, "api"])->name("api");

    Route::resource('/posts', PostsController::class);

    Route::resource('/categories', CategoriesController::class);


});



