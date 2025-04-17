<?php

use App\Http\Controllers\api\OrderController;
use App\Http\Controllers\api\SupplierController;
use App\Http\Controllers\api\vue\AuthController;
use App\Http\Controllers\api\vue\RoleController;
use App\Http\Controllers\api\vue\SalesController as VueSalesController;
use App\Http\Controllers\api\vue\UserController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::options('/{any}', [Controller::class, 'handlePreflight'])->where('any', '.*');
Route::resource('orders', OrderController::class);
// Route::resource('roles', RoleController::class);
Route::get('rolesdelete', [RoleController::class, 'delete']);
Route::post('purchase', [OrderController::class, 'Purchase_store']);
Route::get('suppliers',[SupplierController::class, 'index']);
Route::get('warehouses',[SupplierController::class, 'warehouse']);
Route::get('products',[SupplierController::class, 'products']);

Route::post('saveReactpurchase',[SupplierController::class, 'saveReactpurchase']);


Route::get("roles/order", [RoleController::class, "order"]);

Route::apiResource("roles", RoleController::class);
Route::apiResource('users', UserController::class);


Route::post('register',[AuthController::class,'register']);
Route::post('login', [AuthController::class,'login'])->middleware('throttle:2,1');
Route::post('refresh', [AuthController::class,'refresh']);
Route::post('logout', [AuthController::class,'logout']);

// sales

Route::get('sales/data', [VueSalesController::class, "index"]);
Route::post('/sales/processOrder', [VueSalesController::class, "process"]);



// https://stackoverflow.com/questions/54721576/laravel-route-apiresource-difference-between-apiresource-and-resource-in-route
// https://jurin.medium.com/securing-laravel-10-api-using-jwt-a5b6dca58fd7


// 01977-450991  Shoriful Islam sir  Job placement