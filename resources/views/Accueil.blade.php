<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!--=============== REMIXICONS ===============-->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <link href="{{ url('https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css')}}" rel="stylesheet">
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
   <link rel="icon" href="img/logo MGH.jpg" type="image/jpg">
   <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="{{ url('css/menu-navbar.css')}}">

   <title>MGH</title>
</head>
<body>
   <div id="loading-screen">
      <i class="bi bi-airplane" id="loading-icon"></i>
  </div>
  
   <div class="tete">
      <!--=============== HEADER ===============-->
      <header class="header" id="nav">
         <nav class="nav container">
            <div class="nav__data">
               <!-- Bouton pour ouvrir/fermer le menu (responsive) -->
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line nav__burger"></i>
                  <i class="ri-close-line nav__close"></i>
               </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <!--=============== DROPDOWN 1 - A propos ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        <a href="{{ url('/propos')}}">A propos</a><i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>
                     <ul class="dropdown__menu">
                        <div class="propos">
                           <h3>A propos</h3>
                           <br>
                           <p>Madagascar Ground Handling est fière de vous fournir les services d'assistance au sol en accord avec les normes IATA.
                              Créée en 2016, nous sommes fiers de faire partie du patrimoine de Madagascar. Nos prestations s'étendent sur les principales villes de Madagascar.
                              Appartenir à Madagascar Ground Handling (MGH), c’est appartenir à une Société vitrine de Madagascar. Notre vision est de gagner la fidélité par la passion et l’innovation.
                              Première image aux portes de Madagascar par voie aérienne, la famille MGH réunit des personnes de caractère et dédiés au service du Client.
                              Cette philosophie est ancrée dans nos 4 valeurs principales : INTEGRITÉ, ESPRIT D'EQUIPE, POLYVALENCE et DYNAMISME.
                              Notre Intégrité fait la différence dans notre secteur d'activité. Rejoignez-nous et prenez part à cette différence.
                              La force de la compagnie s'appuie sur son anticipation ainsi que sur la réactivité du personnel face aux besoins particuliers de chacun de ses clients.
                              Des formations sont dispensées à intervalles réguliers afin de maintenir la qualification du personnel de la</p>
                              <br>
                              <button class="voir-plus">Voir plus</button>
                           </div>
                     </ul>
                  </li>

                  <!--=============== DROPDOWN 2 - Services ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        <a href="{{ url('/services')}}" class="lien">Services</a><i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>
                     <ul class="dropdown__menu">
                        <div class="propos">
                           <h3>Services</h3>
                           <br>
                           <p><a href="#"></a></p>
                        </div>
                     </ul>
                  </li>

                  <!--=============== DROPDOWN 5 - Contact ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        <a href="/contact" class="lien">Contact</a><i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>
                     <ul class="dropdown__menu">
                        <div class="propos">
                           <h3>Contact</h3>
                           <br>
                           <p><a href="#"></a></p>
                        </div>
                     </ul>
                  </li>

                  <!-- Lien direct - Careers -->
                  <li><a href="/carrière" class="nav__link">carrière</a></li>
               </ul>
            </div>
            <!-- Logo MGH -->
            <a href="/Acceuil" class="logo-link">
               <img src="img/logo MGH.jpg" alt="Logo MGH" class="image">
             </a>             
         </nav>
      </header>
   </div>

   <!--=============== SECTION SLO ===============-->
   <div class="slo" style="background: rgb(207, 207, 207)">
      <h1>MADAGASCAR GROUND HANDLING</h1>
      <br>
      <h4>Votre Service d'assistance au Sol à Madagascar</h4>
   </div>

   <!--=============== CAROUSEL ===============-->
   <div class="carousel-container" id="container">
      <div class="carousel" id="carousel">
         <!-- Diapositive 1 -->
         <div class="carousel-slide" style="background-image: url('{{ asset('img/aeroport-de-paris.jpg') }}');">
            <div class="carousel-text">
               <h2>Sary voalohany</h2><br><br><br><br>
               <p>fanazavana betsabetsaka izay zavatra atao eto</p>
            </div>
         </div>
         <!-- Diapositive 2 -->
         <div class="carousel-slide" style="background-image: url('{{ asset('img/aeroport-de-paris.jpg') }}');">
            <div class="carousel-text">
               <h2>Sary Faharoa</h2><br><br><br><br><br>
               <p>fanazavana betsabetsaka izay zavatra atao eto</p>
            </div>
         </div>
         <!-- Diapositive 3 -->
         <div class="carousel-slide" style="background-image: url('{{ asset('img/aeroport-de-paris.jpg') }}');">
            <div class="carousel-text">
               <h2>Sary fahatelo</h2><br><br><br><br><br>
               <p>fanazavana betsabetsaka izay zavatra atao eto</p>
            </div>
         </div>
         <!-- Diapositive 4 -->
         <div class="carousel-slide" style="background-image: url('{{ asset('img/aeroport-de-paris.jpg') }}');">
            <div class="carousel-text">
               <h2>Sary fahadimy</h2><br><br><br><br>
               <p>fanazavana betsabetsaka izay zavatra atao eto</p>
            </div>
         </div>
      </div>

      <!-- Boutons de navigation (Précédent/Suivant) -->
      <button class="prev" onclick="prevSlide()">&#10094;</button>
      <button class="next" onclick="nextSlide()">&#10095;</button>

      <!-- Points de navigation pour les diapositives -->
      <div class="dots">
         <span class="dot" onclick="currentSlide(0)"></span>
         <span class="dot" onclick="currentSlide(1)"></span>
         <span class="dot" onclick="currentSlide(2)"></span>
         <span class="dot" onclick="currentSlide(3)"></span>
      </div>
   </div>

   <br><br>

   <!--=============== SECTION MID ===============-->
   <div class="mid">
      <h5>NOS SERVICES</h5>
      <h1>SOUTENIR    L'AVIATION    NATIONALE</h1>
      <!--=============== CAROUSEL2 ===============-->
      <div id="custom-container">
         <div id="custom-slider-wrapper">
             <span onclick="customSlideRight()" class="custom-btn"></span>
             <div id="custom-slider">
                 <!-- Remplacer les éléments avec des images et du texte superposé -->
                 <div class="custom-slide">
                  <a href="/services-en-pistes" class="learn-more">
                     <img src="{{ asset('img/services/Ramp_handling.jpg') }}" alt="Image 2" class="custom-image">
                     <div class="custom-overlay">
                        <h3>Les Services en Piste</h3>
                        <p>Des équipes dynamiques</p>
                     </div>
                  </a>
               </div>
               <div class="custom-slide">
                  <a href="/services-bagages" class="learn-more">
                  <img src="{{ asset('img/services/Service bagages.jpg') }}" alt="Image 1" class="custom-image">
                  <div class="custom-overlay">
                      <h3>Les Services Bagages</h3>
                      <p>Des services aux normes</p>
                  </div>
                  </a>
              </div>
              <div class="custom-slide">
               <a href="/services-aux-passagers" class="learn-more">
                  <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="Image 2" class="custom-image">
                  <div class="custom-overlay">
                      <h3>Les Services aux Passagers</h3>
                      <p>Priorité des Clients</p>
                       
                  </div>
               </a>
              </div>
              <div class="custom-slide">
               <a href="/services-cargo" class="learn-more">
               <img src="{{ asset('img/services/Services cargo.jpg') }}" alt="Image 1" class="custom-image">
               <div class="custom-overlay">
                   <h3>Les Services Cargo</h3>
                   <p>Livraison rapide</p>
                    
               </div>
               </a>
           </div>
           <div class="custom-slide">
            <a href="/services-vip" class="learn-more">
               <img src="{{ asset('img/services/Services_VIP.jpg') }}" alt="Image 2" class="custom-image">
               <div class="custom-overlay">
                   <h3>Les Services VIP</h3>
                   <p>Nous pouvons vous représenter</p>
                    
               </div>
            </a>
           </div>
                 <!-- Vous pouvez continuer à ajouter d'autres diapositives ici -->
             </div>
             <span onclick="customSlideLeft()" class="custom-btn"></span>
         </div>
     </div>
   </div>
   <br><br>
   <div class="map">
      <h5>Notre réseau</h5>
      <h1>NAVIGUEZ DANS NOTRE NATION</h1><br><br>
      <div id="map" style="height: 700px;"></div>
   </div>

   <div class="actu">
      <h5>Actualités</h5>
      <h1>RESTEZ À JOUR</h1><br><br>
  
      <div class="image-slider">
          <div class="image-slider-track-container">
              <ul class="image-slider-track">
                  @foreach($news as $article)
                  <li class="image-slide">
                     <img src="{{ asset($article->image) }}" alt="Image {{ $article->title }}">
                      <div class="txt-actu">
                          <!-- Titre -->
                          <h2>{{ $article->title }}</h2>
                          <!-- Sous-titre -->
                          <h4>{{ $article->subtitle }}</h4>
                      </div>
                  </li>
                  @endforeach
              </ul>
          </div>
          <button class="image-slider-button left-btn">◀</button>
          <button class="image-slider-button right-btn">▶</button>
  
          <!-- Pagination nav (boutons de navigation en bas) -->
          <div class="image-slider-nav">
              @foreach($news as $index => $article)
              <span class="nav-dot @if($index == 0) active-dot @endif"></span>
              @endforeach
          </div>
      </div>
  </div>
  
    
   <div class="login-page">
      <center><a  href="{{ url('login')}}"> CLIQUER ICI POUR LE LOGIN</a></center>

   </div>
   <br><br>

   <div class="partenaires">
      <h2>PARTENAIRES</h2>
      <div class="txt">
         <P>Merci à tous nos Clients pour leur confiance en nos services ! MGH s’occupe aussi bien des vols réguliers qu’occasionnels. Les vols commerciaux ainsi que les vols militaires sont les bienvenus.</P>
      </div><br><br>
      <!-- Section pour la première ligne avec le titre "Vols Réguliers" -->
  <div class="carousel-section">
   <div class="carousel-title">Vols Réguliers</div>
   <div class="carou-container">
     <div class="carousel-row row1">
       <img src="img/uu.png" alt="Image 1">
       <img src="img/af.png" alt="Image 2">
       <img src="img/md.png" alt="Image 3">
       <img src="img/hm.png" alt="Image 4">
       <img src="img/sa.png" alt="Image 5">
       <img src="img/kq.png" alt="Image 6">
       <img src="img/et.png" alt="Image 7">
       <img src="img/ss.png" alt="Image 8">
       <img src="img/tk.png" alt="Image 9">
       <img src="img/mk.png" alt="Image 10">
       <img src="img/ewa.png" alt="Image 11">
       <img src="img/tz.JPG" alt="Image 12">
       
       <!-- On duplique les images pour le défilement infini -->
       <img src="img/uu.png" alt="Image 1">
       <img src="img/af.png" alt="Image 2">
       <img src="img/md.png" alt="Image 3">
       <img src="img/hm.png" alt="Image 4">
       <img src="img/sa.png" alt="Image 5">
       <img src="img/kq.png" alt="Image 6">
       <img src="img/et.png" alt="Image 7">
       <img src="img/ss.png" alt="Image 8">
       <img src="img/tk.png" alt="Image 9">
       <img src="img/mk.png" alt="Image 10">
       <img src="img/ewa.png" alt="Image 11">
       <img src="img/tz.JPG" alt="Image 12">
     </div>
   </div>
 </div>

 <!-- Section pour la deuxième ligne avec le titre "Vols Ponctuels" -->
 <div class="carousel-section">
   <div class="carousel-title">Vols Ponctuels</div>
   <div class="carou-container">
     <div class="carousel-row row2">
      <img src="img/aircargoglobal.png" alt="Image 1">
      <img src="img/cjs.png" alt="Image 2">
      <img src="img/ufs.png" alt="Image 3">
      <img src="img/airindia.png" alt="Image 4">
      <img src="img/aurora.png" alt="Image 5">
      <img src="img/wfs.png" alt="Image 6">
      <img src="img/palm.png" alt="Image 7">
      <img src="img/avjet.png" alt="Image 8">
      <img src="img/yulounge.png" alt="Image 9">
      <img src="img/jetex.png" alt="Image 10">
      <img src="img/ram.png" alt="Image 11">
      <img src="img/flytag.png" alt="Image 12">
       <!-- On duplique les images pour le défilement infini -->
       <img src="img/aircargoglobal.png" alt="Image 1">
      <img src="img/cjs.png" alt="Image 2">
      <img src="img/ufs.png" alt="Image 3">
      <img src="img/airindia.png" alt="Image 4">
      <img src="img/aurora.png" alt="Image 5">
      <img src="img/wfs.png" alt="Image 6">
      <img src="img/palm.png" alt="Image 7">
      <img src="img/avjet.png" alt="Image 8">
      <img src="img/yulounge.png" alt="Image 9">
      <img src="img/jetex.png" alt="Image 10">
      <img src="img/ram.png" alt="Image 11">
      <img src="img/flytag.png" alt="Image 12">
     </div>
   </div>
   </div>
   </div>
   
   <div class="floating-menu">
      <div class="menu-item" id="contact">
          <span class="icon">📩</span>
          <span class="text">Contact us</span>
      </div>
       
  </div>
  
  
   <footer>
      <div class="footer">
          <div class="footer-content">
              <h3>Contactez-nous</h3><br>
              <p>Email:nathanjoh721@gmail.com</p><br>
              <p>Phone:+261 34 10 505 17</p><br>
              <p>Addresse:Talatamaty</p><br>
          </div>
          <div class="footer-content">
              <h3>Liens rapides</h3>
               <ul class="list">
                  <li><a href="{{ url('/Accueil')}}">Accueil</a></li>
                  <li><a href="{{ url('/propos')}}">A propos</a></li>
                  <li><a href="{{ url('/services')}}">Services</a></li>
                  <li><a href="{{ url('/carrières')}}">Carrières</a></li>
               </ul>
          </div>
          <div class="footer-col">
            <h3>suivez-nous</h3>
            <div class="social-links">
               <a href="#"><i class="fab fa-facebook-f"></i></a>
               <a href="#"><i class="fab fa-twitter"></i></a>
               <a href="#"><i class="fab fa-instagram"></i></a>
               <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
         </div>
         
          </div>
      <div class="bottom-bar">
          <p>&copy; 2024 votre entreprise . Tous droits réservés</p>
      </div>
  </footer>  
  <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
   <!--=============== JS MAIN ===============-->
   <script src="{{ url('js/main.js')}}"></script>
   
</body>
</html>
