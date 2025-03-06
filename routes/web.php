<?php

use App\Http\Controllers\AuthLogin\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\PurchaseReportController;
use App\Http\Controllers\UserController;
use App\Mail\Test;
use App\Mail\wdpfMail;
use App\Models\Product;
use App\Models\User;
use App\Notifications\EmailNotification;
use App\Notifications\OrderShipped;
use App\Notifications\WdpfNotify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
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
    
    //  $user= Auth::user();
    //  if ($user) {
    //     $user->notify(new WdpfNotify());

    //     // Notification::send($user, new EmailNotification());
    //     // echo "user found ";
    // }
    return view('welcome');
});

Route::get('/notifications/{id}/read', function ($id) {
    $notification = auth()->user()->notifications()->find($id);
    if ($notification) {
        $notification->markAsRead();
    }
    return back();
})->name('notifications.markAsRead');


Route::get('/notifications/{id}/delete', function ($id) {
    $notification = auth()->user()->notifications()->find($id);
    if ($notification) {
        $notification->delete();
    }
    return back();
});

Route::get('/notifications/delete', function () {
    auth()->user()->notifications()->delete();
    return back();
})->name('notifications.deleteAll');



Route::get('/mailsend', function(){
    Mail::to('abc@gmail.com')->send(new wdpfMail());
});

Route::get("testMail", function(){
     Mail::to('hasan@email.com')->send(new Test());
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
    Route::resource('purchase', PurchaseController::class);

    Route::get('/purchase-report', [PurchaseReportController::class, 'index']);
    Route::post('/purchase-report', [PurchaseReportController::class, 'show']);



require __DIR__.'/frontend.php';
require __DIR__.'/account.php';


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


