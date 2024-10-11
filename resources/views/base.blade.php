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

        @yield('content')

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
             <div class="footer-content">
                 <h3>Suivez-nous</h3>
                 <ul class="social-icons">
                  <li><a href=""><i class="fab fa-twitter"></i></a></li>
                  <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                 </ul>
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
   