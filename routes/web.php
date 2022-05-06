<?php

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

Route::get('/', function () {return view('welcome');});
Route::get('/tienda', function () {return view('layouts.tienda.app');})->name('tienda');
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('productos', \App\Http\Livewire\Productos\ListaProductos::class)->name('productos');
    Route::get('producto/{producto}/detalle', \App\Http\Livewire\Tienda\DetalleProducto::class)->name('producto.detalle');
});
