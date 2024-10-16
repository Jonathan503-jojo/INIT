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
    <div>
        <label for="body">Body:</label>
        <textarea id="body" name="body" required></textarea>
    </div>
    <div>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
    </div>
    <button type="submit">Add News</button>
</form>
