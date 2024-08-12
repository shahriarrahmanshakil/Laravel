<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/{id}', function (string $id) {
    // return view('post');
    if($id){
        return "<h1>Post ID : $id</h1>";
    }else{
        return "<h1>No ID Found</h1>";               
    }
})->whereIn('id',['Bangladesh','India','Nepal']);                                                                               

Route::get('/sub', function () {
    return view('delete');
});

Route::view('update', '/update');
