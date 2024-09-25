<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== REMIXICONS ===============-->
   <link href="{{ url('https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css')}}" rel="stylesheet">
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
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
                           <p><a href="#"></a></p>
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

                  <!--=============== DROPDOWN 3 - Rédirection ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        <a href="/redirection" class="lien">Rédirection</a><i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>
                     <ul class="dropdown__menu">
                        <div class="propos">
                           <h3>Rédirection</h3>
                           <br>
                           <p><a href="#"></a></p>
                        </div>
                     </ul>
                  </li>

                  <!--=============== DROPDOWN 4 - Partenaires ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        <a href="/partenaires" class="lien">Partenaires</a><i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>
                     <ul class="dropdown__menu">
                        <div class="propos">
                           <h3>Partenaires</h3>
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
                  <li><a href="/propos" class="nav__link">Cariere</a></li>
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

        @yield('content')

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
                     <li><a href="{{ url('/Acceuil')}}">Acceuil</a></li>
                     <li><a href="{{ url('/propos')}}">A propos</a></li>
                     <li><a href="">Services</a></li>
                     <li><a href="">Rediréction</a></li>
                     <li><a href="">Carrières</a></li>
                     <li><a href="">Contact</a></li>
                  </ul>
             </div>
             <div class="footer-content">
                 <h3>Suivez-nous</h3>
                 <ul class="social-icons">
                  <li><a href=""><i class="fab fa-facebook"></i></a></li>
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
   




