// Quand la page est complètement chargée
window.addEventListener('load', function() {
    // Ajouter la classe "loaded" au body pour cacher l'écran de chargement
    document.body.classList.add('loaded');
});


/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) =>{
   const toggle = document.getElementById(toggleId),
         nav = document.getElementById(navId)

   toggle.addEventListener('click', () =>{
       // montrer les menus
       nav.classList.toggle('show-menu')

       // montrer l'icon
       toggle.classList.toggle('show-icon')
   })
}

showMenu('nav-toggle','nav-menu')

let lastScrollTop = 0;
const navbar = document.getElementById('nav');

window.addEventListener('scroll', function() {
    let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
        // Scrolling vers le bas
        navbar.style.top = "-100px"; // Hauteur de la navbar pour la faire disparaître
    } else {
        // Scrolling vers le haut
        navbar.style.top = "0";
    }
    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Pour ne pas avoir un nombre négatif
});

const carousel = document.getElementById('carousel');
const slides = document.querySelectorAll('.carousel-slide');
const dots = document.querySelectorAll('.dot');
let currentIndex = 0;
let interval = setInterval(nextSlide, 4000);

function updateCarousel() {
    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentIndex);
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    updateCarousel();
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateCarousel();
}

function currentSlide(index) {
    currentIndex = index;
    updateCarousel();
    clearInterval(interval);
    interval = setInterval(nextSlide, 4000);
}

var customContainer = document.getElementById('custom-container');
var customSlider = document.getElementById('custom-slider');
var customSlides = document.getElementsByClassName('custom-slide').length;
var customButtons = document.getElementsByClassName('custom-btn');

var customCurrentPosition = 0;
var customCurrentMargin = 0;
var customSlidesPerPage = 0;
var customSlidesCount = customSlides - customSlidesPerPage;
var customContainerWidth = customContainer.offsetWidth;
var customPrevKeyActive = false;
var customNextKeyActive = true;

window.addEventListener("resize", customCheckWidth);

function customCheckWidth() {
	customContainerWidth = customContainer.offsetWidth;
	customSetParams(customContainerWidth);
}

function customSetParams(w) {
	if (w < 551) {
		customSlidesPerPage = 1;
	} else if (w < 901) {
		customSlidesPerPage = 2;
	} else if (w < 1101) {
		customSlidesPerPage = 3;
	} else {
		customSlidesPerPage = 4;
	}
	customSlidesCount = customSlides - customSlidesPerPage;
	if (customCurrentPosition > customSlidesCount) {
		customCurrentPosition -= customSlidesPerPage;
	}
	customCurrentMargin = -customCurrentPosition * (100 / customSlidesPerPage);
	customSlider.style.marginLeft = customCurrentMargin + '%';
	if (customCurrentPosition > 0) {
		customButtons[0].classList.remove('inactive');
	}
	if (customCurrentPosition < customSlidesCount) {
		customButtons[1].classList.remove('inactive');
	}
	if (customCurrentPosition >= customSlidesCount) {
		customButtons[1].classList.add('inactive');
	}
}

customSetParams();

function customSlideRight() {
	if (customCurrentPosition != 0) {
		customSlider.style.marginLeft = customCurrentMargin + (100 / customSlidesPerPage) + '%';
		customCurrentMargin += (100 / customSlidesPerPage);
		customCurrentPosition--;
	}
	if (customCurrentPosition === 0) {
		customButtons[0].classList.add('inactive');
	}
	if (customCurrentPosition < customSlidesCount) {
		customButtons[1].classList.remove('inactive');
	}
}

function customSlideLeft() {
	if (customCurrentPosition != customSlidesCount) {
		customSlider.style.marginLeft = customCurrentMargin - (100 / customSlidesPerPage) + '%';
		customCurrentMargin -= (100 / customSlidesPerPage);
		customCurrentPosition++;
	}
	if (customCurrentPosition == customSlidesCount) {
		customButtons[1].classList.add('inactive');
	}
	if (customCurrentPosition > 0) {
		customButtons[0].classList.remove('inactive');
	}
}
// Initialisation de la carte avec MapTiler
var map = L.map('map').setView([-18.8792, 47.5079], 6);  // Coordonnées pour Madagascar

L.tileLayer('https://api.maptiler.com/maps/streets-v2/{z}/{x}/{y}.png?key=IifbFZkgU69PI4dXuL4e', {
    attribution: '&copy; <a href="https://www.maptiler.com/">MapTiler</a>',
}).addTo(map);

// Liste des villes avec leurs coordonnées et contenu à afficher
var villes = [
    { name: "Diego", coords: [-12.2765, 49.2915], content: "<h2>Aéroport Diego</h2>Inona ny vaovao<br><a href='#'>En savoir plus</a>" },
    { name: "Nosy Be", coords: [-13.329, 48.247], content: "<h2>Aéroport Nosy Be</h2>Inona ny vaovao<br><a href='#'>En savoir plus</a>" },
    { name: "Fort Dauphin", coords: [-25.031, 46.999], content: "<h2>Aéroport Fort Dauphin</h2>Inona ny vaovao<br><a href='#'>En savoir plus</a>" },
    { name: "Antananarivo", coords: [-18.8792, 47.5079], content: "<h2>MGH à Antananarivo</h2>Inona ny vaovao<br><a href='#'>En savoir plus</a>" }
];

// Ajout des marqueurs et popup pour chaque ville
villes.forEach(function(ville) {
    var marker = L.marker(ville.coords).addTo(map);
    marker.bindPopup("<b>" + ville.name + "</b><br>" + ville.content);

    // Afficher la popup au clic
    marker.on('click', function() {
        this.openPopup();
    });
});

// Gérer la fermeture de la popup lorsqu'on clique ailleurs
map.on('click', function(e) {
    map.closePopup();  // Fermer les popups lorsqu'on clique sur la carte ailleurs
});

// GeoJSON pour la région d'Antananarivo (exemple, il vous faudra le GeoJSON réel)
var antananarivoRegion = {
    "type": "FeatureCollection",
    "features": [
        {
            "type": "Feature",
            "properties": {},
            "geometry": {
                "type": "Polygon",
                "coordinates": [
                    [
                        [47.3799, -18.875],
                        [47.6368, -18.875],
                        [47.6368, -18.5901],
                        [47.3799, -18.5901],
                        [47.3799, -18.875]
                    ]
                ]
            }
        }
    ]
};

// Ajouter le GeoJSON à la carte avec une couleur spécifique
L.geoJSON(antananarivoRegion, {
    style: function(feature) {
        return { color: "blue", fillColor: "lightblue", fillOpacity: 0.5 };
    }
}).addTo(map);

const row1 = document.querySelector('.row1');
const row2 = document.querySelector('.row2');

// Fonction pour cloner les images pour un effet infini
const cloneImages = (row) => {
  const rowWidth = row.scrollWidth; // Largeur de la ligne d'images
  const containerWidth = document.querySelector('.carou-container').offsetWidth; // Largeur du conteneur visible

  let totalWidth = rowWidth;

  // Tant que la largeur des images est inférieure à deux fois la largeur du conteneur, on clone
  while (totalWidth < containerWidth * 2) {
    const images = Array.from(row.children);
    images.forEach(image => {
      const clone = image.cloneNode(true);
      row.appendChild(clone);
    });
    totalWidth = row.scrollWidth; // Recalculer la largeur totale après chaque duplication
  }
};

cloneImages(row1);
cloneImages(row2);

// Pause/reprise au clic
const toggleAnimation = (row, isPaused) => {
  row.style.animationPlayState = isPaused ? 'paused' : 'running';
};

document.querySelectorAll('.row1 img').forEach(image => {
  image.addEventListener('click', () => {
    row1.style.animationPlayState = row1.style.animationPlayState === 'paused' ? 'running' : 'paused';
  });
});

document.querySelectorAll('.row2 img').forEach(image => {
  image.addEventListener('click', () => {
    row2.style.animationPlayState = row2.style.animationPlayState === 'paused' ? 'running' : 'paused';
  });
});

