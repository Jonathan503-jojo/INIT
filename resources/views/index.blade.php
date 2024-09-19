<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="{{ url('https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css')}}" rel="stylesheet">

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
               
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line nav__burger"></i>
                  <i class="ri-close-line nav__close"></i>
               </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <!--=============== DROPDOWN 1  ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                           A propos <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>
                     <ul class="dropdown__menu">
                           <h3>jvsdjndjnvvn</h3>
                     </ul>
                  </li>
                  <!--=============== DROPDOWN 2  ===============-->
                     <li class="dropdown__item">
                        <div class="nav__link">
                              Services <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>
                        <ul class="dropdown__menu">
                              <h3>jvsdjndjnvvn</h3>
                        </ul>
                     </li>
                  <!--=============== DROPDOWN 3  ===============-->
                     <li class="dropdown__item">
                        <div class="nav__link">
                              Rédirection <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>
                        <ul class="dropdown__menu">
                              <h3>jvsdjndjnvvn</h3>
                        </ul>
                     </li>
                  <!--=============== DROPDOWN 4  ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                           Partenaires <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>
                     <ul class="dropdown__menu">
                           <h3>jvsdjndjnvvn</h3>
                     </ul>
                  </li>

                  <li><a href="#" class="nav__link">Careers</a></li>
               </ul>
            </div>
            <img src="img/logo MGH.jpg" class="image" >
         </nav>
      </header>

   </div>
   </body>
   <div class="slo" style="background: rgb(207, 207, 207)">
         <h1>MADAGASCAR GROUND HANDLING</h1><br>
         <h4>Votre Service d'assistance au Sol à Madagascar</h4>
   </div>

   <!-- Carousel -->
   <div class="carousel-container" id="container">
      <div class="carousel" id="carousel">
          <div class="carousel-slide" style="background: rgb(15, 199, 15);">
              <div class="carousel-text">Sary voalohany</div>
          </div>
          <div class="carousel-slide" style="background: yellow;">
              <div class="carousel-text">Sary faharoa</div>
          </div>
          <div class="carousel-slide" style="background: rgb(0, 255, 255);">
              <div class="carousel-text">Sary fahatelo</div>
          </div>
          <div class="carousel-slide" style="background: rgb(255, 38, 0);">
              <div class="carousel-text">Sary fahaefatra</div>
          </div>
      </div>

      <!-- Navigation gauche/droite -->
      <button class="prev" onclick="prevSlide()">&#10094;</button>
      <button class="next" onclick="nextSlide()">&#10095;</button>

      <!-- Points de navigation -->
      <div class="dots">
          <span class="dot" onclick="currentSlide(0)"></span>
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
      </div>
  </div>
         <!--=============== MAIN JS ===============-->
         <script src="{{ url('js/main.js')}}"></script>
</html>