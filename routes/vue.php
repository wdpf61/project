<?php

use App\Http\Controllers\api\OrderController;
use App\Http\Controllers\api\SupplierController;
use App\Http\Controllers\api\vue\RoleController as VueRoleController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get("roles", [VueRoleController::class, 'index']);

