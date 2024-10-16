<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier la News</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="admin-container">
        <h1>Modifier la News : {{ $news->title }}</h1>

        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="title">Titre</label>
            <input type="text" id="title" name="title" value="{{ $news->title }}" required>

            <label for="subtitle">Sous-titre</label>
            <input type="text" id="subtitle" name="subtitle" value="{{ $news->subtitle }}">

            <label for="body">Contenu</label>
            <textarea id="body" name="body" required>{{ $news->body }}</textarea>

            <label for="image">Image</label>
            <input type="file" id="image" name="image">

            <button type="submit" class="btn">Enregistrer les modifications</button>
        </form>
    </div>
</body>
</html>
