<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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




//-------------------categories Routes---------------
Route::get('/categories', 'App\Http\Controllers\CategorieController@index');
Route::get('/categories/create', 'App\Http\Controllers\CategorieController@create');
Route::post('/categories', 'App\Http\Controllers\CategorieController@store');
Route::get('/categories/{categorie}', 'App\Http\Controllers\CategorieController@show');
Route::get('/categories/{categorie}/edit', 'App\Http\Controllers\CategorieController@edit');
Route::patch('/categories/{categorie}', 'App\Http\Controllers\CategorieController@update');
Route::delete('/categories/{categorie}', 'App\Http\Controllers\CategorieController@destroy');
//-------------------End categories Routes------------


//-------------------checkouts Routes---------------
Route::get('/checkouts', 'App\Http\Controllers\CheckoutController@index');
Route::get('/checkouts/create', 'App\Http\Controllers\CheckoutController@create');
Route::post('/checkouts', 'App\Http\Controllers\CheckoutController@store');
Route::get('/checkouts/{checkout}', 'App\Http\Controllers\CheckoutController@show');
Route::get('/checkouts/{checkout}/edit', 'App\Http\Controllers\CheckoutController@edit');
Route::patch('/checkouts/{checkout}', 'App\Http\Controllers\CheckoutController@update');
Route::delete('/checkouts/{checkout}', 'App\Http\Controllers\CheckoutController@destroy');
//-------------------End checkouts Routes------------


//-------------------commands Routes---------------
Route::get('/commands', 'App\Http\Controllers\CommandController@index');
Route::get('/commands/create', 'App\Http\Controllers\CommandController@create');
Route::post('/commands', 'App\Http\Controllers\CommandController@store');
Route::get('/commands/{command}', 'App\Http\Controllers\CommandController@show');
Route::get('/commands/{command}/edit', 'App\Http\Controllers\CommandController@edit');
Route::patch('/commands/{command}', 'App\Http\Controllers\CommandController@update');
Route::delete('/commands/{command}', 'App\Http\Controllers\CommandController@destroy');
//-------------------End commands Routes------------


//-------------------products Routes---------------
Route::get('/products', [App\Http\Controllers\ProductController::class,'index']);
Route::get('/products/create', 'App\Http\Controllers\ProductController@create');
Route::post('/products', 'App\Http\Controllers\ProductController@store');
Route::get('/products/{product}', 'App\Http\Controllers\ProductController@show');
Route::get('/products/{product}/edit', 'App\Http\Controllers\ProductController@edit');
Route::patch('/products/{product}', 'App\Http\Controllers\ProductController@update');
Route::delete('/products/{product}', 'App\Http\Controllers\ProductController@destroy');
//-------------------End products Routes------------


//-------------------products Routes---------------
Route::get('/admin', [App\Http\Controllers\AdminController::class,'index']);
Route::get('/products/create', 'App\Http\Controllers\ProductController@create');
Route::post('/products', 'App\Http\Controllers\ProductController@store');
Route::get('/products/{product}', 'App\Http\Controllers\ProductController@show');
Route::get('/products/{product}/edit', 'App\Http\Controllers\ProductController@edit');
Route::patch('/products/{product}', 'App\Http\Controllers\ProductController@update');
Route::delete('/products/{product}', 'App\Http\Controllers\ProductController@destroy');
//-------------------End products Routes------------