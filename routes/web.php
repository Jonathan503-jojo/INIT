<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;

 
 
Route::get('/', function () {
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

Route::get('/adminpage/news', [HomeController::class, 'homenews'])->name('adminpage.news')->middleware('admin');

Route::get('/adminpage/news/create', [HomeController::class, 'addnews'])->name('adminpage.add-news')->middleware('admin');


require __DIR__.'/auth.php';

Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');


 

