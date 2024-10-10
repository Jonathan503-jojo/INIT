<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\mycontroller;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/Acceuil', function () {
    
    return view('Acceuil');
});

Route::get('/propos', function () {
    
    return view('propos');
});

Route::get('/services', function () {
    
    return view('services');
});
Route::get('/services-en-pistes', function () {
    
    return view('services-en-pistes');
});
Route::get('/services-bagages', function () {
    
    return view('services-bagages');
});
Route::get('/services-aux-passagers', function () {
    
    return view('services-aux-passagers');
});
Route::get('/services-cargo', function () {
    
    return view('services-cargo');
});
Route::get('/services-vip', function () {
    
    return view('services-vip');
});

Route::get('/login', function () {
    
    return view('login');
});

 



 

 


 
