<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('producto/{id}',[ProductoController::class, 'getProductView'])->name('producto/{id}');

Route::get('Registro', [ProductoController::class, 'getProductRegistryView'])->name('Registro/producto');

Route::get('Novedades', function()
{
    return 'Pagina de Novedades aun no implementada';
})->name('Novedades');

Route::get('Asesoria', function()
{
    return 'Pagina de Asesoria aun no implementada';
})->name('Asesoria');

Route::get('Contactenos', function()
{
    return 'Pagina de Contacto aun no implementada';
})->name('Contactenos');