<?php

use Illuminate\Support\Facades\Route;

Route::get('/','CustomerController@index');
Route::get('/customer/{customerId}','CustomerController@show');
Route::get('/customer/{customerId}/update','CustomerController@update');
Route::get('/customer/{customerId}/delete','CustomerController@destroy');
