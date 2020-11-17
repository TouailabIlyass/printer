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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




//-------------------categories Routes---------------
Route::get('/categories', 'CategorieController@index');
Route::get('/categories/create', 'CategorieController@create');
Route::post('/categories', 'CategorieController@store');
Route::get('/categories/{categorie}', 'CategorieController@show');
Route::get('/categories/{categorie}/edit', 'CategorieController@edit');
Route::patch('/categories/{categorie}', 'CategorieController@update');
Route::delete('/categories/{categorie}', 'CategorieController@destroy');
	//----------------Rest for categories Table-----------------------
Route::get('/api/categories/limit/{limit?}', 'CategorieController@restIndex');
Route::get('/api/categories/{categorie}', 'CategorieController@restShow');
Route::post('/api/categories', 'CategorieController@restStore');
Route::patch('/api/categories/{categorie}', 'CategorieController@restUpdate');
Route::delete('/api/categories/{categorie}', 'CategorieController@restDestroy');
//-------------------End categories Routes------------


//-------------------checkouts Routes---------------
Route::get('/checkouts', 'CheckoutController@index');
Route::get('/checkouts/create', 'CheckoutController@create');
Route::post('/checkouts', 'CheckoutController@store');
Route::get('/checkouts/{checkout}', 'CheckoutController@show');
Route::get('/checkouts/{checkout}/edit', 'CheckoutController@edit');
Route::patch('/checkouts/{checkout}', 'CheckoutController@update');
Route::delete('/checkouts/{checkout}', 'CheckoutController@destroy');
	//----------------Rest for checkouts Table-----------------------
Route::get('/api/checkouts/limit/{limit?}', 'CheckoutController@restIndex');
Route::get('/api/checkouts/{checkout}', 'CheckoutController@restShow');
Route::post('/api/checkouts', 'CheckoutController@restStore');
Route::patch('/api/checkouts/{checkout}', 'CheckoutController@restUpdate');
Route::delete('/api/checkouts/{checkout}', 'CheckoutController@restDestroy');
//-------------------End checkouts Routes------------


//-------------------commands Routes---------------
Route::get('/commands', 'CommandController@index');
Route::get('/commands/create', 'CommandController@create');
Route::post('/commands', 'CommandController@store');
Route::get('/commands/{command}', 'CommandController@show');
Route::get('/commands/{command}/edit', 'CommandController@edit');
Route::patch('/commands/{command}', 'CommandController@update');
Route::delete('/commands/{command}', 'CommandController@destroy');
	//----------------Rest for commands Table-----------------------
Route::get('/api/commands/limit/{limit?}', 'CommandController@restIndex');
Route::get('/api/commands/{command}', 'CommandController@restShow');
Route::post('/api/commands', 'CommandController@restStore');
Route::patch('/api/commands/{command}', 'CommandController@restUpdate');
Route::delete('/api/commands/{command}', 'CommandController@restDestroy');
//-------------------End commands Routes------------


//-------------------products Routes---------------
Route::get('/products', 'ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::post('/products', 'ProductController@store');
Route::get('/products/{product}', 'ProductController@show');
Route::get('/products/{product}/edit', 'ProductController@edit');
Route::patch('/products/{product}', 'ProductController@update');
Route::delete('/products/{product}', 'ProductController@destroy');
	//----------------Rest for products Table-----------------------
Route::get('/api/products/limit/{limit?}', 'ProductController@restIndex');
Route::get('/api/products/{product}', 'ProductController@restShow');
Route::post('/api/products', 'ProductController@restStore');
Route::patch('/api/products/{product}', 'ProductController@restUpdate');
Route::delete('/api/products/{product}', 'ProductController@restDestroy');
//-------------------End products Routes------------


