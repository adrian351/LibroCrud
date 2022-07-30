<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

    Route::group(['prefix' => 'book'], function() {
        Route::match(['GET', 'HEAD'],'', 'App\Http\Controllers\BookController@index')->name('book.index');
        Route::match(['GET', 'HEAD'],'create', 'App\Http\Controllers\BookController@create')->name('book.create');
        Route::post('store', 'App\Http\Controllers\BookController@store')->name('book.store');
        Route::match(['GET', 'HEAD'],'show/{id}', 'App\Http\Controllers\BookController@show')->name('book.show');
        Route::match(['GET', 'HEAD'],'edit/{id}', 'App\Http\Controllers\BookController@edit')->name('book.edit');
        Route::match(['PUT', 'PATCH'],'update/{id}', 'App\Http\Controllers\BookController@update')->name('book.update');
        Route::match(['DELETE'],'delete/{id}', 'App\Http\Controllers\BookController@destroy')->name('book.destroy');
    });
    
    Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
});




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
