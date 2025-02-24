<?php

use App\Http\Controllers\localservice\ServiceController;
use Illuminate\Support\Facades\Route;

Route::prefix('local')->group(function(){

  Route::get('service', [ServiceController::class,'frontServicePage']);
  Route::get('booking', [ServiceController::class,'bookingServicePage']);
});

