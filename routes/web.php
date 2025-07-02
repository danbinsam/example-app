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

Route::get('/kebersihan', function () {
    return view('kebersihan');
});

Route::post('/isikebersihan', function () {
    return redirect('/');
});

Route::get('/housekeeping-tempat', function () {
    return view('housekeeping-tempat');
});

Route::post('/isihousekeeping-tempat', function () {
    return redirect('/housekeeping-sop');
});

Route::get('/housekeeping-sop', function () {
    return view('housekeeping-sop');
});

Route::post('/isihousekeeping-sop', function () {
    return redirect('/');
});
