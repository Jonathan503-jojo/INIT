 
<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des News</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
</head>
<body>
    <div class="admin-container">
        <h1>Ajout des News</h1>
        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div>
                <label for="subtitle">Subtitle:</label>
                <input type="text" id="subtitle" name="subtitle">
            </div>

            <!-- Nouveau champ pour la date de publication -->
            <div class="date-input-container">
                <label for="date">Date:</label>
                <div class="date-picker-wrapper">
                    <input type="date" id="date" name="date" required>
                </div>
            </div>
                        

            <div>
                <label for="body">Body:</label>
                <textarea id="body" name="body" required></textarea>
            </div>
            <div>
                <label for="images">Images:</label>
                <input type="file" id="images" name="images[]" multiple>
            </div>
            
            <button type="submit">Add News</button>
        </form>
        
        <a href="{{ route('adminpage') }}" class="back-button">Retour au Dashboard</a>
    </div>
</body>
</html>
