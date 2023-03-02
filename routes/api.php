<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\CompanyController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});

Route::post('/signUp',[userController::class,'signup']);
Route::post('/login',[userController::class,'login']);
Route::group(['middleware'=> ['auth:sanctum']], function(){

    Route::resources([
        'products' => ProductController::class,
        'suppliers' => supplierController::class,
        'clients' => ClientController::class,
        'companies' => CompanyController::class,
        // 'users' => CompanyController::class,
    ]);



});
