const dropZone = document.getElementById('dropZone');
const imageInput = document.getElementById('imageInput');
const addImageBtn = document.getElementById('addImageBtn');
let droppedImage = null;

// Empêcher le comportement par défaut pour tous les événements de drag-and-drop
['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
  dropZone.addEventListener(eventName, (e) => {
    e.preventDefault();
    e.stopPropagation();
  });
});

// Style de survol lors du dragover
dropZone.addEventListener('dragover', () => {
  dropZone.classList.add('dragover');
});

dropZone.addEventListener('dragleave', () => {
  dropZone.classList.remove('dragover');
});

// Gérer l'événement drop pour afficher l'image
dropZone.addEventListener('drop', (e) => {
  dropZone.classList.remove('dragover');
  
  const file = e.dataTransfer.files[0]; // Récupère le fichier
  if (file && file.type.startsWith('image/')) { // Vérifie que c'est bien une image
    const reader = new FileReader(); // Lit l'image comme une URL Data
    reader.onload = function(e) {
      droppedImage = e.target.result; // Stocke l'image en tant qu'URL Data
      dropZone.innerHTML = `<img src="${droppedImage}" alt="Image" style="max-width: 100%; max-height: 100%;">`;
    }
    reader.readAsDataURL(file); // Lit le fichier et déclenche le chargement
  }
});

// Gérer l'ajout de l'image via un clic
addImageBtn.addEventListener('click', () => {
  if (droppedImage) {
    document.getElementById('currentImage').src = droppedImage;
  } else {
    alert("Veuillez d'abord glisser une image dans la zone.");
  }
});
