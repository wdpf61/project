<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AccountGroupController;
use App\Http\Controllers\ChartOfAccountController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TrialBalanceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;


Route::prefix('accounts')->group(function(){

   Route::resource('accountgroups' , AccountGroupController::class);
   Route::resource('accounts' , AccountController::class);

   Route::get("customer" , function(){

   //    $payload = new Request([
   //       'name' => "Rajib Sheikh",
   //       'description' => "Old Dhaka",
   //       'account_group_id' => config('accountCode.customer'),
   //   ]);
      $payload['name']= "Rajib Sheikh";
      $payload['description']= "Old Dhaka";
      $payload['account_group_id']= config('accountCode.customer');
      AccountController::createAccount($payload);
   });


   Route::get('chartofaccount', [ChartOfAccountController::class, 'index']);
   Route::get('/chartofaccount/pdf', [ChartOfAccountController::class, 'printPdf'])->name('chart.of.accounts.pdf');
  
   Route::get('trialbalance', [TrialBalanceController::class, 'index'])->name('trial.balance.index');
   Route::get('/trialbalance/pdf', [TrialBalanceController::class, 'printPdf'])->name('trial.balance.pdf');
  
  
   Route::resource('transactions',TransactionController::class);
   Route::post('ledger',[AccountController::class, 'ledger_report']);
   // Route::get('/transaction/{id}', [TransactionController::class, 'printPdf'])->name('chart.of.accounts.pdf');


});