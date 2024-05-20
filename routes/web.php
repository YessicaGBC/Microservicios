<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/index', function () {
    return view('welcome');
});


Route::get('/holamundo', function () {
    return view('holamundo');
});



//Route::get('/producto/create',[ProductoController::class,'create'])->name('productoc.create');

Route::resource('producto',ProductoController::class);
Route::resource('categoria',CategoriaController::class);
