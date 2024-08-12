<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/{id?}/comment/{cmt_id?}', function (string $id = null, string $cmt_id = null) {
    // return view('post');
    if($id){
        return "<h1>Post ID : $id</h1>
                <h2>Comment ID : $cmt_id</h2>";
    }else{
        return "<h1>No ID Found</h1>";
    }
});

Route::get('/sub', function () {
    return view('delete');
});

Route::view('update', '/update');