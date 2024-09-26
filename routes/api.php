<?php

use App\Http\Controllers\API\V1\AddressController;
use App\Http\Controllers\API\V1\ContactController;
use App\Http\Controllers\API\V1\EmailController;
use App\Http\Controllers\API\V1\PhoneController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function (){
    Route::apiResource('/contacts', ContactController::class);
    Route::apiResource('/phones', PhoneController::class);
    Route::apiResource('/emails', EmailController::class);
    Route::apiResource('/addresses', AddressController::class);
    Route::get('/contacts/contact-details/{id}', [ContactController::class, 'details']);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
