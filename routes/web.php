<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
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

//Laravel 8
Route::get('/products',[ProductsController::class,'index'])->name('products');
Route::get('/products/about', [ProductsController::class, 'about']);

Route::get('/products/{name}',[ProductsController::class,'show']);

//Named routes

Route::get('/',[PagesController::class,'index']);


//Laravel 8
//Route::get('/products', 'App\Http\Controllers\ProductsController@index');

//Previous versions
//Route::get('/products', 'ProductsController@index');





