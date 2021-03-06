<?php

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

Route::get('/sweetalert', function () {
    return view('sweetalert');
})->name('sweetalert');

Route::get('tipo/{type}', 'SweetController@notification');

Route::get('uuid', function () {
    echo Uuid::generate()->string;
});

Route::get('/products', 'ProductController@index')->name('products');

Route::get('descargar-productos-pdf', 'ProductController@pdf')->name('products.pdf');

Route::get('descargar-productos-excel', 'ProductController@excel')->name('products.excel');



