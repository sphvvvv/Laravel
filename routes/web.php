<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ProductMiddleware;
use App\Http\Middleware\ProductMiddleware2;

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

Route::resource('product', 'ProductController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('product', 'ProductController@index')
//    ->middleware(ProductMiddleware::class)
//    ->middleware(ProductMiddleware2::class)
    ->middleware("product")
    ;

Route::get('product/{id?}', 'ProductController@show')
    ->middleware("product");

/*
public function show($id)
{
    return view('product', ['product' => Product::findOrFail($id)]);
}
*/

