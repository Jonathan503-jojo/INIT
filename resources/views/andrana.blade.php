<link rel="stylesheet" href="{{ url('css/andrana.css')}}">
<script src="{{ url('js/andrana.js')}}"></script>
<div class="image-slider">
    <div class="image-slider-track-container">
      <ul class="image-slider-track">
        <li class="image-slide">
          <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="Image 5" id="currentImage">
          <div class="txt-actu">
            <h2>Actualités</h2>
            <h4>##</h4>
          </div>
        </li>
      </ul>
    </div>
    <button class="image-slider-button left-btn">◀</button>
    <button class="image-slider-button right-btn">▶</button>
  
    <!-- Zone de drag-and-drop -->
    <div class="drop-zone" id="dropZone">
      <p>Glissez et déposez votre image ici</p>
      <input type="file" id="imageInput" accept="image/*" style="display: none;">
    </div>
  
    <!-- Bouton pour ajouter l'image -->
    <button id="addImageBtn">Ajouter</button>
  </div>
  
  
  
