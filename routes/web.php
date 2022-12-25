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

Route::get('product', 'ProductController@index');

Route::get('product/{id}', 'ProductController@show');
/*
public function show($id)
{
    return view('product', ['product' => Product::findOrFail($id)]);
}
*/

Route::resource('product', 'ProductController');
