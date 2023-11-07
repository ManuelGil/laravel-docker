<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//RUTAS TIENDA
Route::get('Producto/index', [ProductoController::class, 'index'])->name('producto.index');
Route::get('Producto/propios', [ProductoController::class, 'propios'])->name('producto.propios');
Route::get('Producto/administrar', [ProductoController::class, 'administrar'])->name('producto.administrar');
Route::get('Producto/create', [ProductoController::class, 'create'])->name('producto.create');
Route::post('Producto/store', [ProductoController::class, 'store'])->name('producto.store');
Route::get('Producto/{producto}', [ProductoController::class, 'show'])->name('producto.show');
Route::get('Producto/{producto}/edit', [ProductoController::class, 'edit'])->name('producto.edit');
Route::put('Producto/{producto}', [ProductoController::class, 'update'])->name('producto.update');
