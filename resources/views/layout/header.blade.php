<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CRAA - Comisión Regional Anticorrupción de Apurímac</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/LOGO.png" rel="icon">
  <link href="assets/img/LOGO.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/aos/aos.css" rel="stylesheet')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-index">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('/assets/img/LOGO.png') }}" alt="">
        <!-- <h1 class="d-flex align-items-center">Nova</h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ url('/welcome') }}" >INICIO</a></li>
          <li class="dropdown"><a href="#"><span>QUIÉNES SOMOS</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{route('presentacion')}}">PRESENTACIÓN</a></li>
              <li><a href="{{route('objetivos')}}">OBJETIVOS Y FUNCIONES</a></li>
              <li><a href="{{route('miembros')}}">MIEMBROS</a></li>
              <li><a href="{{route('locales')}}">LOCALES INSTITUCIONALES</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>DOCUMENTOS</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{route('plan')}}">PLAN ANUAL DE TRABAJO</a></li>
              <li><a href="{{route('marco')}}">MARCO NORVATIVO</a></li>
              <li><a href="{{route('actas')}}">ACTAS</a></li>
            </ul>
          </li>
          <li><a href="{{route('noticias')}}">NOTICIAS</a></li>
          <li><a href="{{route('denuncia')}}">DENUNCIA</a></li>
          <li><a href="{{route('contacto')}}">CONTACTO</a></li>

        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->