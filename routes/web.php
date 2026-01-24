<?php

use Illuminate\Support\Facades\Route;

// Web Routes UNITS

Route::group(['prefix' => 'units'], function () {

    Route::get('/unites/all', function () {
        return view('units.unites.all');
    });
    
});

// Web Routes UNITS

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/', function () {
    return view('welcome');
});
