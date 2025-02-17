<?php

use App\Http\Controllers\AuthLogin\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/abc', function () {
    echo Auth::user()->isAdmin();
})->middleware(['admin']);

Route::get('/check', function () {
    return view('404');
});

Route::get('/role', [RoleController::class, 'index']);


Route::get('/manager', function () {
    echo "this is manager page";
})->middleware('manager');



Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('welcome');
})->middleware(['auth', 'verified', 'admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('user',[UserController::class,'index']);
Route::get('user/create',[UserController::class,'create']);
Route::post('user/store',[UserController::class,'store']);


  Route::get("/ourlogin", [AuthController::class, "login"])->name('login');
//  Route::post("/login", [AuthController::class, "login_store"])->name('login.store');
//  Route::get("/register", [AuthController::class, "register"])->name('register');



require __DIR__.'/frontend.php';

require __DIR__.'/auth.php';
