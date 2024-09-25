<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/Acceuil', function () {
    
    return view('Acceuil');
});

Route::get('/propos', function () {
    
    return view('propos');
});
 


 
