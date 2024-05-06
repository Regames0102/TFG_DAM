<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});
Route::get('Inicio', function () {
    return view('inicio');
});
Route::get('Adopcion', function () {
    return view('adopcion');
});
Route::get('Contacto', function () {
    return view('contacto');
});
Route::get('Tienda', function () {
    return view('welcome');
});
Route::get('Tienda', function () {
    return view('welcome');
});

