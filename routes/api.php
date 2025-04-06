<?php

use App\Http\Controllers\api\OrderController;
use App\Http\Controllers\api\SupplierController;
use App\Http\Controllers\api\vue\RoleController;
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
Route::resource('roles', RoleController::class);
Route::get('rolesdelete', [RoleController::class, 'delete']);
Route::post('purchase', [OrderController::class, 'Purchase_store']);
Route::get('suppliers',[SupplierController::class, 'index']);
Route::get('warehouses',[SupplierController::class, 'warehouse']);
Route::get('products',[SupplierController::class, 'products']);

Route::post('saveReactpurchase',[SupplierController::class, 'saveReactpurchase']);


Route::apiResource("roles", RoleController::class);
Route::apiResource('users', UserController::class);



// https://stackoverflow.com/questions/54721576/laravel-route-apiresource-difference-between-apiresource-and-resource-in-route

