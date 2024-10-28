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
                    <th>Date</th>
                    <th>Contenu</th>
                    <th>Date de Création</th>
                    <th>Date de Dernière Mise à Jour</th>
                    <th>Modifier</th> <!-- Nouvelle colonne pour Modifier -->
                    <th>Publier / Cacher</th> <!-- Colonne pour Publier ou Cacher -->
                </tr>
            </thead>
            <tbody>
                @foreach($news as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->subtitle }}</td>
                    <td>{{ $article->publication_date }}</td>
                    <td>{{ $article->body }}</td>
                    <td>{{ $article->created_at->format('d/m/Y H:i') }}</td>
                    <td>{{ $article->updated_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <center>
                        <!-- Bouton Modifier -->
                        <a href="{{ route('adminpage.edit-news', $article->id) }}" class="btn-edit">MODIFIER</a>
                        </center>
                    </td>
                    <td>
                        <center>
                        <!-- Vérifier si la news est publiée ou non -->
                        @if(!$article->published)
                            <!-- Si non publié, afficher le bouton Publier -->
                            <form action="{{ route('news.publish', $article->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn-publish">PUBLIER</button>
                            </form>
                        @else
                            <!-- Si publié, afficher le bouton Publié et Cacher -->
                            <span class="btn-published">PUBLIÉ</span>
                            <form action="{{ route('news.unpublish', $article->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn-hide">CACHER</button>
                            </form>
                        @endif
                        </center>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <a href="{{ route('adminpage') }}" class="back-button">Retour au Dashboard</a>
    </div>
</body>
</html>