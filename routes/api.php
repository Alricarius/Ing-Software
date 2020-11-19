<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//api de producto
Route::get('/producto/{id}', [ProductoController::class, 'getItemProd']);

Route::get('/productos', [ProductoController::class, 'getProductsView']);

Route::post('/producto', [ProductoController::class, 'insertProduct']);

Route::get('/verificar/{nombre}', [ProductoController::class, 'verifyProductExists']);

//api de usuario
Route::post('/Registro', [UserController::class, 'insertUser']);
