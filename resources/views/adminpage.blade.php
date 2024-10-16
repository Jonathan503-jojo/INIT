<!-- resources/views/admin/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="admin-container">
        <h1>Bienvenue sur le tableau de bord Admin</h1>
        <div class="menu">
            <a href="{{ route('adminpage.user') }}" class="menu-item">Gestion des Utilisateurs</a>
            <a href="{{ route('news.show') }}" class="menu-item">Gestion des News</a>
        </div>
    </div>
    <center><a href="{{ route('dashboard') }}" class="menu-item">Dashboard</a></center>
</body>
</html>
