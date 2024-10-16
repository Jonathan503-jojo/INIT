<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des News</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="admin-container">
        <h1>Gestion des News</h1>

        <!-- Liste des news -->
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Sous-titre</th>
                    <th>Date de création</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($newsList as $news)
                <tr>
                    <td>{{ $news->title }}</td>
                    <td>{{ $news->subtitle }}</td>
                    <td>{{ $news->created_at->format('d/m/Y') }}</td>
                    <td>
                        <!-- Bouton modifier -->
                        <a href="{{ route('news.edit', $news->id) }}" class="btn">Modifier</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Bouton créer une news -->
        <div class="create-news">
            <a href="{{ route('news.create') }}" class="btn btn-primary">Créer une News</a>
        </div>
    </div>
</body>
</html>
