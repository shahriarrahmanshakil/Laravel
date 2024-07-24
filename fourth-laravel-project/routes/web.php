<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{id}', function (string $id) {
    return "<h1>Home ID : $id</h1>";
});
