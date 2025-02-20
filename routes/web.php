<?php

use App\Http\Controllers\AuthLogin\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\restaurant\RestaurantController;
use App\Http\Controllers\UserController;
use App\Models\Product;
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
Route::get('front',function(){
    $products=Product::get();
    return view('pages.frontend.product.index', compact('products'));
});
Route::get('user/create',[UserController::class,'create']);
Route::post('user/store',[UserController::class,'store']);


//  Route::get("/", [AuthController::class, "login"])->name('login');


 Route::post("/login", [AuthController::class, "login_store"])->name('login.store');
 Route::get("/register", [AuthController::class, "register"])->name('register');

    Route::prefix()->group(function(){

    });
    Route::resource('products', ProductController::class);
    Route::resource('customers', CustomerController::class);
    Route::post('find_customer', [OrderController::class, 'find_customer']);
    Route::post('find_product', [OrderController::class, 'find_product']);
    Route::resource('orders', OrderController::class);

Route::prefix('res')->group(function(){

    Route::view('/', 'restaurant.index');
    Route::view('cart', 'restaurant.cart');
    Route::get('shop', [RestaurantController::class,'index']);


});



require __DIR__.'/frontend.php';