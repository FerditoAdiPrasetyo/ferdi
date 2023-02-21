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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'transaksi'], function () {
    route::get('/in', 'Transaksi\InController@index')->name('transaksi.in');
    route::get('/out', 'Transaksi\OutController@index')->name('transaksi.out');
});

Route::group(['prefix'=>'masterbarang'], function(){
    route::get('/','MasterBarangController@index')->name('masterbarang');
    route::get('/create','MasterBarangController@create')->name('masterbarang.create');
});
 
//kategori
Route::group(['prefix'=>'kategori'], function(){
    route::get('/','KategoriController@index')->name('kategori');
    route::get('/edit','KategoriController@edit')->name('kategori.edit');
    route::post('/','KategoriController@store')->name('kategori.store');
});

//brand
Route::group(['prefix'=>'brand'], function(){
    route::get('/','BrandController@index')->name('brand');
    route::get('/edit','BrandController@edit')->name('brand.edit');
});

//uom
Route::group(['prefix'=>'satuan'], function(){
    route::get('/','UomController@index')->name('uom');
    route::get('/edit','UomController@edit')->name('uom.edit');
});