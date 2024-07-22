<?php

use App\Http\Controllers\CalculationAreaController;
use App\Http\Controllers\CalculationController;
use App\Http\Controllers\MultiController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Example//
Route::controller(CalculationController::class)->group(function(){
    Route::get('example-01','showForm')->name('example-01-form');
    Route::post('example-01','showResult')->name('example-01-result');
});
//Area//
Route::controller(CalculationAreaController::class)->group(function(){
    Route::get('area','showForm')->name('area-form');
    Route::post('area','showResult')->name('area-result');
});


//Multiplication//
Route::controller(MultiController::class)->group(function(){
    Route::get('mul','showForm')->name('mul-form');
    Route::post('mul','showResult')->name('mul-result');
});

//Payment//
Route::controller(PaymentController::class)->group(function(){
    Route::get('payment','showForm')->name('payment-form');
    Route::post('payment','showResult')->name('payment-result');
});


