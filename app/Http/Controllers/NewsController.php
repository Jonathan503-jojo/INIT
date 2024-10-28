<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class NewsController extends Controller
{
    public function create() {
        return view('news.create');
    }
    

    //
    
    public function store(Request $request) {
        // Validation des données incluant la date
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'body' => 'required',
            'images.*' => 'nullable|image|max:2048', // Validation pour les images
            'date' => 'required|date', // Validation de la date de publication
        ]);
    
        // Ajouter la date de publication au tableau des données
        $data['publication_date'] = $request->input('date');
    
        // Création de la news avec les données validées
        $news = News::create($data);
    
        // Si des images sont uploadées
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Récupérer le nom original de l'image
                $imageName = $image->getClientOriginalName();
                // Sauvegarder l'image dans 'public/news_images' avec le nom d'origine
                $imagePath = $image->storeAs('img/news', $imageName, 'public');
    
                // Enregistrer le chemin de l'image dans la table images
                $news->images()->create(['path' => $imagePath]);
            }
        }
    
        // Redirection vers l'affichage de la news créée
        return redirect()->route('news.show', $news);
    }
    
     
    public function voirPlusNews($id) {
        // Récupérer l'actualité avec ses images associées
        $news = News::with('images')->findOrFail($id);
        
        // Passer les données à la vue
        return view( 'voir-plus-news', compact('news'));
    }
    

    public function index()
{
    // Récupère toutes les actualités
    $news = News::all();

    // Passe les actualités à la vue
    return view('home-news', compact('news'));
}

public function publish($id)
{
    $news = News::findOrFail($id);
    
    // Publier la news
    $news->published = true;
    $news->save();

    return redirect()->back()->with('success', 'La news a été publiée.');
}

public function unpublish($id)
{
    $news = News::findOrFail($id);
    
    // Masquer la news
    $news->published = false;
    $news->save();

    return redirect()->back()->with('success', 'La news a été masquée.');
}


 // Afficher le formulaire d'édition d'une news
 public function edit($id)
 {
     $article = News::findOrFail($id);
     return view('edit-news', compact('article'));
 }

 public function update(Request $request, $id)
{
    // Valider les données
    $request->validate([
        'title' => 'required|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        'body' => 'required',
        'images.*' => 'nullable|image|max:2048',
        'date' => 'required|date',
    ]);

    // Récupérer l'article
    $article = News::findOrFail($id);

    // Mettre à jour les champs texte
    $article->update($request->only(['title', 'subtitle', 'body', 'date']));

    // Si de nouvelles images sont téléchargées
    if ($request->hasFile('images')) {
        // Supprimer les anciennes images associées
        foreach ($article->images as $existingImage) {
            Storage::disk('public')->delete($existingImage->path); // Supprimer le fichier
            $existingImage->delete(); // Supprimer l'entrée de la base de données
        }

        // Enregistrer les nouvelles images
        foreach ($request->file('images') as $image) {
            $imageName = $image->getClientOriginalName();
            $imagePath = $image->storeAs('img/news', $imageName, 'public');

            // Créer une nouvelle entrée dans la table images liée à cet article
            $article->images()->create(['path' => $imagePath]);
        }
    }

    return redirect()->route('adminpage')->with('success', 'News mise à jour avec succès');
}

}
