<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

//Homepage Routes
Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/data', function(){
    return view('data');
})->name('data');


//Login Routes
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@postlogin')->name('postlogin');
Route::get('/logout', 'AuthController@logout')->name('logout');

//CRUD Routes
Route::group(['middleware' => 'auth'], function(){
Route::get('/produk','produkController@index')->name('viewData');

Route::get('/produk/tambah','produkController@tambah');

Route::post('/produk/store','produkController@store');

Route::get('/produk/{id}/edit', 'produkController@edit')->name('editData');

Route::post('/produk/{id}/update', 'produkController@update')->name('updateData');

Route::get('/produk/{id}/delete', 'produkController@destroy')->name('deleteData');
});
