<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('inicio');

Route::get('/cuerpos-academicos', function () {
    return view('faculty');
})->name('cuerpos-academicos');