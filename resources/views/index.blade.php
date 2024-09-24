<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== REMIXICONS ===============-->
   <link href="{{ url('https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css')}}" rel="stylesheet">
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
   <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="{{ url('css/menu-navbar.css')}}">

   <title>MGH</title>
</head>
<body>
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
                        A propos <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>
                     <ul class="dropdown__menu">
                        <h3>jvsdjndjnvvn</h3>
                     </ul>
                  </li>

                  <!--=============== DROPDOWN 2 - Services ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        Services <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>
                     <ul class="dropdown__menu">
                        <h3>jvsdjndjnvvn</h3>
                     </ul>
                  </li>

                  <!--=============== DROPDOWN 3 - Rédirection ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        Rédirection <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>
                     <ul class="dropdown__menu">
                        <h3>jvsdjndjnvvn</h3>
                     </ul>
                  </li>

                  <!--=============== DROPDOWN 4 - Partenaires ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        Partenaires <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>
                     <ul class="dropdown__menu">
                        <h3>jvsdjndjnvvn</h3>
                     </ul>
                  </li>

                  <!-- Lien direct - Careers -->
                  <li><a href="#" class="nav__link">Careers</a></li>
               </ul>
            </div>
            <!-- Logo MGH -->
            <img src="img/logo MGH.jpg" class="image">
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
               <h2>Sary voalohany</h2> 
               <p>fanazavana betsabetsaka izay zavatra atao eto</p>
            </div>
         </div>
         <!-- Diapositive 2 -->
         <div class="carousel-slide" style="background-image: url('{{ asset('img/aeroport-de-paris.jpg') }}');">
            <div class="carousel-text">Sary faharoa</div>
         </div>
         <!-- Diapositive 3 -->
         <div class="carousel-slide" style="background-image: url('{{ asset('img/aeroport-de-paris.jpg') }}');">
            <div class="carousel-text">Sary fahatelo</div>
         </div>
         <!-- Diapositive 4 -->
         <div class="carousel-slide" style="background-image: url('{{ asset('img/aeroport-de-paris.jpg') }}');">
            <div class="carousel-text">Sary fahaefatra</div>
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
      <h5>NOTRES SERVICES</h5>
      <h1>SOUTENIR    L'AVIATION    NATIONALE</h1>
      <!--=============== CAROUSEL2 ===============-->
      <div id="custom-container">
         <div id="custom-slider-wrapper">
             <span onclick="customSlideRight()" class="custom-btn"></span>
             <div id="custom-slider">
                 <!-- Remplacer les éléments avec des images et du texte superposé -->
                 <div class="custom-slide">
                     <img src="{{ asset('img/services/350 (2).jpg') }}" alt="Image 1" class="custom-image">
                     <div class="custom-overlay">
                         <h2>Les Services d'Assistance</h2>
                         <p>Une équipe dédiée à votre vol</p>
                         <a href="http://" class="learn-more">Voir plus</a> 
                     </div>
                 </div>
                 <div class="custom-slide">
                     <img src="{{ asset('img/services/Ramp_handling.jpg') }}" alt="Image 2" class="custom-image">
                     <div class="custom-overlay">
                         <h2>Les Services en Piste</h2>
                         <p>Des équipes dynamiques</p>
                         <a href="http://" class="learn-more">Voir plus</a>
                     </div>
                 </div>
                 <div class="custom-slide">
                  <img src="{{ asset('img/services/Service bagages.jpg') }}" alt="Image 1" class="custom-image">
                  <div class="custom-overlay">
                      <h2>Les Services Bagages</h2>
                      <p>Des services aux normes</p>
                      <a href="http://" class="learn-more">Voir plus</a>
                  </div>
              </div>
              <div class="custom-slide">
                  <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="Image 2" class="custom-image">
                  <div class="custom-overlay">
                      <h2>Les Services aux Passagers</h2>
                      <p>Priorité des Clients</p>
                      <a href="http://" class="learn-more">Voir plus</a>
                  </div>
              </div>
              <div class="custom-slide">
               <img src="{{ asset('img/services/Services cargo.jpg') }}" alt="Image 1" class="custom-image">
               <div class="custom-overlay">
                   <h2>TLes Services Cargo</h2>
                   <p>Livraison rapide</p>
                   <div class="learn-more">Learn More</div>
               </div>
           </div>
           <div class="custom-slide">
               <img src="{{ asset('img/services/Services_VIP.jpg') }}" alt="Image 2" class="custom-image">
               <div class="custom-overlay">
                   <h2>Les Services VIP</h2>
                   <p>Nous pouvons vous représenter</p>
                   <div class="learn-more">Learn More</div>
               </div>
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
   

   <!--=============== JS MAIN ===============-->
   <script src="{{ url('js/main.js')}}"></script>
   
</body>
</html>
