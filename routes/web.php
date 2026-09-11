<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\ResponseFactory;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');

