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
  <link rel="stylesheet" href="/stvincent/frontend/src/components/hero/hero.css">
  <link rel="stylesheet" href="/stvincent/frontend/src/components/timeline/timeline.css">
  <link rel="stylesheet" href="/stvincent/frontend/src/components/contact/contact.css">

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
    ?>
  </div>


</body>

<!-- GSAP -->
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>


<!-- LENIS -->
<script src="https://unpkg.com/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
<script>

  const entries = document.querySelectorAll('.timeline-item');

  entries.forEach(entry => {
    const entryLeft = entry.querySelector('.left');
    const entryRight = entry.querySelector('.right')

    console.log(entryLeft, entryRight);

    if (entryLeft) {
      gsap.set(entryLeft, {
        xPercent: -100,
        opacity: 0
      });

      gsap.to(entryLeft, {
        scrollTrigger: {
          trigger: entry,
          start: 'top 70%',
          end: 'bottom 90%',
          markers: false,
          scrub: true
        },
        xPercent: 0,
        opacity: 1
      });
    }

    if (entryRight) {

      gsap.set(entryRight, {
        xPercent: 100,
        opacity: 0
      });

      gsap.to(entryRight, {
        scrollTrigger: {
          trigger: entry,
          start: 'top 70%',
          end: 'bottom 90%',
          markers: false,
          scrub: true
        },
        xPercent: 0,
        opacity: 1
      });
    }
  });

  /* CONTACT SECTION */
  const contactContainer = document.querySelectorAll('.contact-container');

  contactContainer.forEach(entry => {
    gsap.set(contactContainer, {
      yPercent: 0,
      opacity: 0,
    });
  });

  gsap.to(contactContainer, {
    scrollTrigger: {
      trigger: contactContainer,
      start: 'top 80%',
      end: 'top center',
      markers: false,
      scrub: true
    },
    yPercent: 0,
    opacity: 1,
    backgroundColor: 'white'
  });

  /* CONTACT TITLE */
  const contactTitle = document.querySelectorAll('.contact-title');

  contactTitle.forEach(entry => {
    gsap.set(contactTitle, {
      yPercent: 0,
      opacity: 0,
    });
  });

  gsap.to(contactTitle, {
    scrollTrigger: {
      trigger: contactTitle,
      start: 'bottom 60%',
      end: 'top',
      markers: false,
      scrub: true
    },
    yPercent: 100,
    opacity: 1,
  });


  /* CONTACT SUBTITLE */
  let contactSubtitle = gsap.timeline({
    scrollTrigger: {
      trigger: '.contact-subtitle',
      start: 'top center',
      end: 'bottom center',
      markers: false,
      scrub: true,
    }
  })

  gsap.set('.contact-subtitle', { opacity: 0 });

  contactSubtitle.to('.contact-subtitle', {
    y: -100,
    opacity: 1,
    duration: 5
  })

  const lenis = new Lenis()

  lenis.on('scroll', (e) => {
  })

  lenis.on('scroll', ScrollTrigger.update)

  gsap.ticker.add((time) => {
    lenis.raf(time * 1000)
  })

  gsap.ticker.lagSmoothing(0)
</script>

</html>