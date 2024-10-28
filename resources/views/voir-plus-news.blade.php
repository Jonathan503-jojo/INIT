<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
</head>
<body>
    <div class="news-detail-container">
        <h1>{{ $news->title }}</h1>
        <h2>{{ $news->subtitle }}</h2>

        <!-- Afficher toutes les images associées à la news -->
        <div class="news-images">
            @foreach($news->images as $image)
                <img src="{{ asset($image->path) }}" alt="Image {{ $news->title }}">
            @endforeach
        </div>

        <!-- Afficher le contenu complet de l'article -->
        <div class="news-content">
            <p>{{ $news->body }}</p>
        </div>

        <!-- Lien de retour -->
        <a href="{{ route('Accueil') }}">Retour aux actualités</a>
    </div>
</body>
</html>
