<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Fav Icon -->
  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/ico/apple-icon-57x57.png') }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/ico/apple-icon-60x60.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/ico/apple-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/ico/apple-icon-76x76.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/ico/apple-icon-114x114.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/ico/apple-icon-120x120.png') }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/ico/apple-icon-144x144.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/ico/apple-icon-152x152.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/ico/apple-icon-180x180.png') }}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/ico/android-icon-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/ico/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/ico/favicon-96x96.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/ico/favicon-16x16.png') }}">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{ asset('img/ico/ms-icon-144x144.png') }}">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Icon Box Icons -->
  <script src="https://unpkg.com/boxicons@2.0.8/dist/boxicons.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>@yield('title') - ITCourse</title>
</head>

<body class="body-page">

  @include('layouts.navbar')

  @yield('content')

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <!-- AOS Javascript  -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    // Testicard Animation
    const testiCard = document.querySelectorAll('.testi-card');
    testiCard.forEach((div, i) => {
      div.dataset.aos = 'fade-up';
      div.dataset.aosDelay = i * 250;
      div.dataset.aosDuration = 1000;
    });

    // Course Card Animation
    const courseCard = document.querySelectorAll('.course-card');
    courseCard.forEach((div, i) => {
      div.dataset.aos = 'fade-up';
      div.dataset.aosDelay = i * 250;
      div.dataset.aosDuration = 1000;
    });

    // Team Card Animation
    const teamCard = document.querySelectorAll('.team-card');
    teamCard.forEach((div, i) => {
      div.dataset.aos = 'fade-up';
      div.dataset.aosDelay = i * 250;
      div.dataset.aosDuration = 1000;
    });

    AOS.init({
      once: true
    });
  </script>

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/TextPlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
  <script>
    // import/register plugin
    gsap.registerPlugin(ScrollTrigger, TextPlugin);

    // Animasi Halaman HOME

    // Animasi Text Hero
    gsap.from('.header-hero', {
      duration: 1,
      y: 100,
      opacity: 0,
      ease: "circ.out"
    });

    // Animasi text paragraf hero
    gsap.to('.text-hero', {
      duration: 2,
      delay: 0.5,
      text: 'Belajar cerdas seputar programming bersama ITCourse dan dapatkan pengetahuan untuk membangun masa depan anda yang lebih terarah',
      ease: 'sine'
    });

    // Animasi Gambar Hero
    gsap.from('.hero-image', {
      duration: 1,
      scale: 0.5,
      opacity: 0,
      // ease: 'back.out'
    });

    // Animasi button get started hero
    gsap.from('.btn-hero', {
      duration: 1,
      delay: 2.5,
      opacity: 0,
      y: 50
    })

    // Animasi text section Popular Course
    document.querySelectorAll(".popcourse-text").forEach((popCourseText, i) => {
      gsap.from(popCourseText, {
        scrollTrigger: popCourseText,
        duration: 0.6,
        delay: i * 0.2,
        y: 100,
        opacity: 0,
        ease: "circ.out"
      });
    });

    // Animasi card di section unggulan
    gsap.from('.card-unggulan', {
      scrollTrigger: ".card-unggulan",
      duration: 2,
      scale: 0.5,
      opacity: 0,
      delay: 0.6,
      stagger: 0.2,
      ease: "elastic",
      force3D: true
    });

    // Animasi text card unggulan
    document.querySelectorAll(".text-unggulan").forEach((textUnggul, i) => {
      gsap.from(textUnggul, {
        scrollTrigger: textUnggul,
        duration: 0.6,
        delay: i * 0.3,
        y: 100,
        opacity: 0,
        ease: "circ.out"
      });
    });

    // Animasi text testimonial
    document.querySelectorAll(".testi-text").forEach((textTesti, i) => {
      gsap.from(textTesti, {
        scrollTrigger: textTesti,
        duration: 0.6,
        delay: i * 0.2,
        y: 100,
        opacity: 0,
        ease: "circ.out"
      });
    });

    // Penutup HOME Animasi

    // ABOUT Animasi

    // Animasi text our team
    document.querySelectorAll(".team-text").forEach((teamText, i) => {
      gsap.from(teamText, {
        scrollTrigger: teamText,
        duration: 0.6,
        delay: i * 0.2,
        y: 100,
        opacity: 0,
        ease: "circ.out"
      });
    });

    // Penutup ABOUT Animasi
  </script>

  <!-- Custom Javascript -->
  <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
