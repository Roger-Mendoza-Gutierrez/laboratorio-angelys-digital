<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('user_template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('user_template/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('user_template/assets/css/templatemo-scholar.css') }}">
    <link rel="stylesheet" href="{{ asset('user_template/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('user_template/assets/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>Angely's</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    {{-- <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div> --}}
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Inicio</a></li>
                      <li class="scroll-to-section"><a href="#services">Servicios</a></li>
                      <li class="scroll-to-section"><a href="#courses">Equipos</a></li>
                      {{-- <li class="scroll-to-section"><a href="#team">Equipo</a></li> --}}
                      {{-- <li class="scroll-to-section"><a href="#events">Eventos</a></li> --}}
                      <li class="scroll-to-section"><a href="#contact">Contactanos</a></li>
                      {{-- <nav class="-mx-3 flex flex-1 justify-end"> --}}

                         @if (Route::has('login'))
                                @auth
                                    <li class="scroll-to-section"><a
                                        href="{{ url('/dashboard') }}"
                                        class=""
                                    >
                                        Dashboard
                                    </a></li>
                                @else
                                    <li class="scroll-to-section"><a
                                        href="{{ route('login') }}"
                                        class=""
                                    >
                                        Iniciar sesión
                                    </a></li>

                                    @if (Route::has('register'))
                                        <li class="scroll-to-section"><a
                                            href="{{ route('register') }}"
                                            class=""
                                        >
                                            Registrarse
                                        </a></li>
                                    @endif
                                @endauth
                            {{-- </nav> --}}
                        @endif
                      {{-- <li class="scroll-to-section"><a href="#contact">Register Now!</a></li> --}}
                  </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

    @yield('content')

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 laboratorio Angelys Digital. Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('user_template/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('user_template/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('user_template/assets/js/isotope.min.js') }}"></script>
  <script src="{{ asset('user_template/assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('user_template/assets/js/counter.js') }}"></script>
  <script src="{{ asset('user_template/assets/js/custom.js') }}"></script>

  </body>
</html>
