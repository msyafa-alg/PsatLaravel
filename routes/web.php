<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // file: home.blade.php
});

Route::get('/paket', function () {
    return view('paket'); // file: paket.blade.php
});

Route::get('/tentang', function () {
    return view('tentang');
});
