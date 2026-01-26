<?php

use Illuminate\Support\Facades\Route;

// Web Routes UNITS

Route::group(['prefix' => 'units'], function () {

    Route::get('/unites/all', function () {
        return view('units.unites.all');
    });

    Route::get('/unites/add', function () {
        return view('units.unites.add');
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
