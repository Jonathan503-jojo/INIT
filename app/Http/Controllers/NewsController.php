<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create() {
        return view('news.create');
    }
    

    //
    
    //
    public function store(Request $request) {
        // Validation des données
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'body' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);
    
        // Si une image est uploadée, on la stocke avec son nom original
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            
            // Récupérer le nom original de l'image
            $imageName = $image->getClientOriginalName();
            
            // Sauvegarder l'image dans 'public/news_images' avec le nom d'origine
            $imagePath = $image->storeAs('img/news', $imageName, 'public');
            
            // Stocker le chemin dans les données
            $data['image'] = $imagePath;
        }
    
        // Création de la news avec les données validées
        $news = News::create($data);
    
        // Redirection vers l'affichage de la news créée
        return redirect()->route('news.show', $news);
    }
    

    
    
    
    public function show(News $news) {
        return view('home-news', compact('news'));
    }

    public function index()
{
    // Récupère toutes les actualités
    $news = News::all();

    // Passe les actualités à la vue
    return view('home-news', compact('news'));
}



    
    
}
