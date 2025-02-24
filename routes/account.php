<?php

use App\Http\Controllers\AccountGroupController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('accounts')->group(function(){

   Route::resource('accountgroups' , AccountGroupController::class);


});