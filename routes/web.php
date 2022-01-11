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
use Spatie\Permission\Models\Role;
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

//Route::resource('shop_controller', \Modules\Shop\Http\Controllers\ShopController::class);

//Route::get('/', function () {
//    $posts=Posts::orderBy('created_at', 'desc')->simplepaginate(5);
//    return view('welcome', ['posts'=>$posts]);
//})->name('index.page');
//
////Logowanie
//Route::get('/login', [AuthController::class, "loginIndex"])->name("login.page");
//Route::post('login', [AuthController::class, "authUser"])->name("login");
//
////Rejestracja
//Route::get('/register', function () {
//    return view('layouts.auth.register');
//})->name('register.page');
//Route::post('register', [AuthController::class, "store"])->name("register");
//
////Wyloguj się
//Route::get('logout', [AuthController::class, "logout"])->name("logout");
//
//
//
//Route::prefix('dashboard')->middleware('auth')->group(function () {
//
//    Route::get('/', function () {
//        $logs=UserLog::orderBy('created_at', 'desc')->simplepaginate(5);
//        $users=User::simplepaginate(5);
//        return view('dashboard.dashboard', ['logs'=>$logs, 'users' => $users ]);
//    })->name('dashboard.page');
//
//    Route::resource('/posts', PostsController::class);
//
//    Route::resource('/categories', CategoriesController::class);
//    Route::resource('/users', AuthController::class);
//
//});

//Route::get('/test',function () {
//    return view('test');
//})->name('test.page');



