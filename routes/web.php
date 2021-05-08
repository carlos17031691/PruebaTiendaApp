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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    
    //Rutas para administración de Marcas
    Route::get('brands', [App\Http\Controllers\BrandController::class, 'index'])->name('brands.index');
    Route::get('brands/create', [App\Http\Controllers\BrandController::class, 'create'])->name('brands.create');

    //Rutas para administración de Productos
    Route::get('products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
});


require __DIR__.'/auth.php';

Auth::routes();

