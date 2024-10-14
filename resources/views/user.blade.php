<!-- resources/views/user.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Utilisateurs</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="admin-container">
        <h1>Liste des Utilisateurs</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Date de Création</th>
                    <th>Date de Dernière Mise à Jour</th>
                    <th>Dernière Connexion</th> <!-- Colonne pour afficher la dernière connexion -->
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                    <td>{{ $user->updated_at->format('d/m/Y H:i') }}</td>
                    <td>{{ $user->last_login ? $user->last_login->format('d/m/Y H:i') : 'Jamais' }}</td> <!-- Affiche 'Jamais' si l'utilisateur ne s'est jamais connecté -->
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <a href="{{ route('adminpage') }}" class="back-button">Retour au Dashboard</a>
    </div>
</body>
</html>
