<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/login', function () {
    return redirect('/');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/logout', function () {
    return redirect('/login');
});
