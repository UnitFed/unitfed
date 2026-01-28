<?php

use Illuminate\Support\Facades\Route;

// Web Routes UNITS

Route::group(['prefix' => 'units'], function () {

    // Web Routes UNITS

    Route::get('/unites/all', function () {
        return view('units.unites.all');
    });

    Route::get('/unites/add', function () {
        return view('units.unites.add');
    });

    Route::get('/unites/update', function () {
        return view('units.unites.update');
    });

    // Web Routes UNITS

    // Web Routes WALLETS

    Route::get('/wallets/all', function () {
        return view('units.wallets.all');
    });

    Route::get('/wallets/add', function () {
        return view('units.wallets.add');
    });

    Route::get('/wallets/update', function () {
        return view('units.wallets.update');
    });

    // Web Routes WALLETS

    // Web Routes TRANSACTIONS

    Route::get('/transactions/all', function () {
        return view('units.transactions.all');
    });

    Route::get('/transactions/add', function () {
        return view('units.transactions.add');
    });

    Route::get('/transactions/update', function () {
        return view('units.transactions.update');
    });

    // Web Routes TRANSACTIONS

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
