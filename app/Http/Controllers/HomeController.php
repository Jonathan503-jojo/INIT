<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\News;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('adminpage');
    }
  
    public function user()
    {
        // Récupère tous les utilisateurs
        $users = User::all();
        
        // Passe les utilisateurs à la vue
        return view('user', ['users' => $users]);
    }

    public function homenews(){

        return view('home-news');
    }

    public function addnews(){

        return view('add-news');
    }

    public function showActualites()
{
    // On récupère uniquement les news qui sont publiées
    $news = News::where('published', true)->get();

    return view('Accueil', compact('news'));
}
}
 
