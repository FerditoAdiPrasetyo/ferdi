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
    // route::patch('/store/{transaksi}', 'Transaksi\InController@store')->name('transaksi.store');
    route::patch('/update/{transaksi}','Transaksi\InController@update')->name('transaksi.update');
    route::delete('{transaksi}', 'Transaksi\InController@destroy')->name('transaksi.destroy');
    route::get('/out', 'Transaksi\OutController@index')->name('transaksi.out');
});

Route::group(['prefix'=>'masterbarang'], function(){
    route::get('/','MasterBarangController@index')->name('masterbarang');
    route::get('/add', 'MasterbarangController@create')->name('masterbarang.add');
    route::get('/edit', 'MasterbarangController@edit')->name('masterbarang.edit');
    route::get('/request/{kategori}', 'RequestBarangController@edit')->name('masterbarang.request');
    route::get('/show/{kategori}', 'MasterBarangController@show')->name('masterbarang.show');
    route::post('/store/{kategori}', 'MasterBarangController@store')->name('masterbarang.store');
    route::post('store/permintaan/{barang}', 'RequestBarangController@store')->name('masterbarang.store.permintaan');
});
 
//kategori
Route::group(['prefix'=>'kategori'], function(){
    route::get('/','KategoriController@index')->name('kategori');
    route::get('/edit/{kategori}','KategoriController@edit')->name('kategori.edit');
    route::patch('/update/{kategori}','KategoriController@update')->name('kategori.update');
    route::post('/store','KategoriController@store')->name('kategori.store');
    route::delete('{kategori}', 'KategoriController@destroy')->name('kategori.destroy');
});

//brand
Route::group(['prefix'=>'brand'], function(){
    route::get('/','BrandController@index')->name('brand');
    route::get('/edit/{brand}','BrandController@edit')->name('brand.edit');
    route::patch('/update/{brand}','BrandController@update')->name('brand.update');
    route::post('/store','BrandController@store')->name('brand.store');
    route::delete('{brand}', 'BrandController@destroy')->name('brand.destroy');
});

//uom
Route::group(['prefix'=>'satuan'], function(){
    route::get('/','UomController@index')->name('uom');
    route::get('/edit{satuan}','UomController@edit')->name('uom.edit');
    route::patch('/update/{satuan}','UomController@update')->name('uom.update');
    route::post('/store','UomController@store')->name('uom.store');
    route::delete('{satuan}', 'UomController@destroy')->name('uom.destroy');
});

Route::group(['prefix' => 'rak'], function () {
    route::get('/barang/{kategori}', 'RakController@index')->name('rak.barang');
});