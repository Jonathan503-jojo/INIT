<!-- resources/views/edit-news.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier la News</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
</head>
<body>
    <div class="admin-container">
        <h1>Modifier la News</h1>

        <form action="{{ route('adminpage.update-news', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div>
                <label for="title">Titre</label>
                <input type="text" name="title" value="{{ $article->title }}" required>
            </div>
            <div>
                <label for="subtitle">Sous-titre</label>
                <input type="text" name="subtitle" value="{{ $article->subtitle }}" required>
            </div>
            <div class="date-input-container">
                <label for="date">Date:</label>
                <div class="date-picker-wrapper">
                    <input type="date" id="date" name="date" value="{{ $article->date ? $article->date->format('Y-m-d') : '' }}" required>

                </div>
            </div>
                       
            <div>
                <label for="body">Contenu</label>
                <textarea name="body" required>{{ $article->body }}</textarea>
            </div>

            <!-- Affichage des images actuelles -->
            <div>
                <label>Images actuelles:</label>
                <div class="current-images">
                    @foreach ($article->images as $image)
                        <img src="{{ asset($image->path) }}" alt="Image {{ $article->title }}" style="width:100px; height:auto; margin-right:10px;">
                    @endforeach
                </div>
            </div>

            <div>
                <label for="images">Nouvelle(s) image(s):</label>
                <input type="file" id="images" name="images[]" multiple>
            </div>

            <button type="submit" class="btn-update">Mettre à Jour</button>
        </form>

        <a href="{{ route('adminpage') }}" class="back-button">Retour au Dashboard</a>
    </div>
</body>
</html>
