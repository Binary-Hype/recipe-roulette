<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/impressum', function () {
    return view('imprint');
});

Route::get('/datenschutz', function () {
    return view('privacy');
});
