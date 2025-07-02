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

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::post('/pilihjadwal', function () {
    return redirect('/datang');
});

Route::get('/datang', function () {
    return view('datang');
});

Route::post('/presensidatang', function () {
    return redirect('/');
});

Route::get('/pulang', function () {
    return view('pulang');
});

Route::post('/presensipulang', function () {
    return redirect('/');
});
