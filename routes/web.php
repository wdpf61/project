<?php

use App\Http\Controllers\AuthLogin\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('user',[UserController::class,'index']);
Route::get('user/create',[UserController::class,'create']);
Route::post('user/store',[UserController::class,'store']);


 Route::get("/", [AuthController::class, "login"])->name('login');
 Route::post("/login", [AuthController::class, "login_store"])->name('login.store');
 Route::get("/register", [AuthController::class, "register"])->name('register');



require __DIR__.'/frontend.php';