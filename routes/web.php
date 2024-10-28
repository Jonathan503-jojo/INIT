<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;

 
 
Route::get('/', function () {
    return view('accueil');
});

Route::get('/homenews', function () {
    return view('home-news');
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
//Route::get('/adminpage/news/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('/adminpage/news/', [NewsController::class, 'index'])->name('news.show');

Route::get('/', [HomeController::class, 'showActualites'])->name('Accueil');

Route::post('/news/publish/{id}', [NewsController::class, 'publish'])->name('news.publish');
Route::post('/news/unpublish/{id}', [NewsController::class, 'unpublish'])->name('news.unpublish');


// Route pour afficher le formulaire d'édition d'une news
Route::get('/admin/news/edit/{id}', [NewsController::class, 'edit'])->name('adminpage.edit-news');

// Route pour traiter la mise à jour d'une news
Route::put('/admin/news/update/{id}', [NewsController::class, 'update'])->name('adminpage.update-news');

Route::get('/news/{id}', [NewsController::class, 'voirPlusNews'])->name('voir-plus-news');






 

