<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('dashboard');
});

Route::get('/home/{id}', function($id){
    $nama = 'febian';
    $menu = null;

    if($id=1 ){
        $menu = "bakso";
    }else if($id=2){
        $menu = "mie ayam";
    }else{
        $menu = "martabak";
    }
    return view('dashboard', compact('nama','menu'));
});