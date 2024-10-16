<!-- resources/views/news.blade.php -->
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
        
        <!-- Bouton pour ajouter une nouvelle news -->
        <a href="{{ route('adminpage.add-news') }}" class="btn-create">Ajouter une News</a>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Sous-titre</th>
                    <th>contenu</th>
                    <th>Date de Création</th>
                    <th>Date de Dernière Mise à Jour</th>
                    <th>Actions</th> <!-- Colonne pour les actions -->
                </tr>
            </thead>
            <tbody>
                @foreach($news as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->subtitle }}</td>
                    <td>{{ $article->body }}</td>
                    <td>{{ $article->created_at->format('d/m/Y H:i') }}</td>
                    <td>{{ $article->updated_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <!-- Boutons pour modifier et supprimer -->
                        <a href=" " class="btn-edit">Modifier</a>
                        <form action=" " method="POST" class="btn-delete-form">
                            @csrf
                            <button type="submit" class="btn-delete">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <a href="{{ route('adminpage') }}" class="back-button">Retour au Dashboard</a>
    </div>
</body>
</html>
