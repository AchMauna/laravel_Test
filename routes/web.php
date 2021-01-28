<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/data', function(){
    return view('data');
});

Route::get('/produk','produkController@index')->name('viewData');

Route::get('/produk/tambah','produkController@tambah');

Route::post('/produk/store','produkController@store');

Route::get('/produk/{id}/edit', 'produkController@edit')->name('editData');

Route::post('/produk/{id}/update', 'produkController@update')->name('updateData');

Route::get('/produk/{id}/delete', 'produkController@destroy')->name('deleteData');