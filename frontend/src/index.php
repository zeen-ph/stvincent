<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>St. Vincent Institute of Technology</title>

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- BOOTSTRAP CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <!-- BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <!-- FONTAWESOME CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!-- CSS STYLING -->
  <link rel="stylesheet" href="/stvincent/frontend/src/globals.css">
  <link rel="stylesheet" href="/stvincent/frontend/src/components/header/header.css">
  <link rel="stylesheet" href="/stvincent/frontend/src/components/footer/footer.css">
  <link rel="stylesheet" href="/stvincent/frontend/src/components/hero/hero.css">
  <link rel="stylesheet" href="/stvincent/frontend/src/components/timeline/timeline.css">
  <link rel="stylesheet" href="/stvincent/frontend/src/components/contact/contact.css">
  <link rel="stylesheet" href="/stvincent/frontend/src/components/gallery/gallery.css">

</head>

<body>

  <!-- HEADER -->
  <header>
    <?php include '../src/components/header/header.php' ?>
  </header>

  <!-- FRONTEND PAGES -->
  <div class="fe-page">
    <?php
    include '../src/pages/home/home.php';
    include '../src/pages/about/about.php';
    include '../src/pages/admissions/admissions.php';
    include '../src/pages/login/login.php';
    ?>
  </div>

  <!-- FOOTER -->
  <footer>
    <?php include '../src/components/footer/footer.php' ?>
  </footer>


</body>

<!-- GSAP -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

<!-- SPLIT TYPE -->
<script src="https://unpkg.com/split-type"></script>

<!-- LENIS -->
<script src="https://unpkg.com/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>

<!-- ANIMATION -->
<script src="/stvincent/frontend/src/animation.js"></script>

</html>