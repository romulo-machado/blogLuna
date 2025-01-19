<?php

use Illuminate\Support\Facades\Route;

Route::get('/teste', function () {
    return view('homepage');
});
Route::get('/', function () {
    return response()->file(public_path('index.html'));
});
