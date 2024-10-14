<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
 
Route::get('/accueil', function () {
    return view('accueil');
});
 
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/adminpage', [HomeController::class, 'index'])->name('adminpage')->middleware('admin');

Route::get('/adminpage/user', [HomeController::class, 'user'])->name('adminpage.user')->middleware('admin');

Route::get('/adminpage/news', [HomeController::class, 'news'])->name('adminpage.news')->middleware('admin');


require __DIR__.'/auth.php';

 

