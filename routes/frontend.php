<?php



//frontend route 

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;




Route::get('ecom', [ProductController::class,'index']);
Route::get('p3', [ProductController::class,'product3']);


