gsap.registerPlugin(ScrollTrigger);

const entries = document.querySelectorAll(".timeline-item");

entries.forEach((entry) => {
  const entryLeft = entry.querySelector(".left");
  const entryRight = entry.querySelector(".right");

  if (entryLeft) {
    gsap.set(entryLeft, {
      xPercent: -100,
      opacity: 0,
    });

    gsap.to(entryLeft, {
      scrollTrigger: {
        trigger: entry,
        start: "top 70%",
        end: "bottom 90%",
        markers: false,
        scrub: true,
      },
      xPercent: 0,
      opacity: 1,
    });
  }

  if (entryRight) {
    gsap.set(entryRight, {
      xPercent: 100,
      opacity: 0,
    });

    gsap.to(entryRight, {
      scrollTrigger: {
        trigger: entry,
        start: "top 70%",
        end: "bottom 90%",
        markers: false,
        scrub: true,
      },
      xPercent: 0,
      opacity: 1,
    });
  }
});

/* CONTACT SECTION */
const contactContainer = document.querySelectorAll(".contact-container");

contactContainer.forEach((entry) => {
  gsap.set(contactContainer, {
    yPercent: 0,
    opacity: 0,
  });
});

gsap.to(contactContainer, {
  scrollTrigger: {
    trigger: contactContainer,
    start: "top 80%",
    end: "top center",
    markers: false,
    scrub: true,
  },
  yPercent: 0,
  opacity: 1,
  backgroundColor: "white",
});

/* CONTACT TITLE */
let contactTitle = gsap.timeline({
  scrollTrigger: {
    trigger: ".contact-title",
    start: "bottom 60%",
    end: "top",
    markers: false,
    scrub: true,
  },
});

gsap.set(".contact-title", { y: -50, opacity: 0 });

contactTitle.to(".contact-title", {
  y: 0,
  opacity: 1,
});

/* CONTACT SUBTITLE */
let contactSubtitle = gsap.timeline({
  scrollTrigger: {
    trigger: ".contact-subtitle",
    start: "top center",
    end: "bottom center",
    markers: false,
    scrub: true,
  },
});

gsap.set(".contact-subtitle", { y: 100, opacity: 0 });

contactSubtitle.to(".contact-subtitle", {
  y: 0,
  opacity: 1,
  duration: 5,
});

/* CONTACT DETAILS */
let contactDetails = gsap.timeline({
  scrollTrigger: {
    trigger: ".left-side",
    start: "top center",
    end: "bottom 80%",
    markers: false,
    scrub: true,
  },
});

gsap.set(".left-side", { y: 100, opacity: 0 });

contactDetails.to(".left-side", {
  y: 0,
  opacity: 1,
  duration: 5,
});

/* GOOGLE MAP */
let googleMap = gsap.timeline({
  scrollTrigger: {
    trigger: ".right-side",
    start: "top center",
    end: "bottom 80%",
    markers: false,
    scrub: true,
  },
});

gsap.set(".right-side", { x: 100, opacity: 0 });

googleMap.to(".right-side", {
  x: 0,
  opacity: 1,
  duration: 5,
});

/* SPLIT TYPES */
const galleryTitles = document.querySelectorAll(".gallery-title");

galleryTitles.forEach((title) => {
  const galleryText = new SplitType(title, { types: "chars" });

  gsap.from(galleryText.chars, {
    scrollTrigger: {
      trigger: title,
      start: "top 80%",
      end: "top center",
      scrub: true,
    },
    y: 100,
    opacity: 0,
    stagger: 0.1,
  });
});

/* GALLERY IMAGES */
const galleryScroll = gsap
  .timeline({
    scrollTrigger: {
      trigger: ".gallery-img",
      start: "top bottom",
      end: "bottom center",
      scrub: true,
    },
  })
  .to(".gallery-img", {
    stagger: 0.2,
    y: -200,
  });

/* PAGE ABOUT */
/* ABOUT SECTION */
const pageAbout = document.querySelectorAll(".page_about");

pageAbout.forEach((entry) => {
  gsap.set(pageAbout, {
    yPercent: 0,
    opacity: 0,
  });
});

gsap.to(pageAbout, {
  scrollTrigger: {
    trigger: pageAbout,
    start: "top 80%",
    end: "top center",
    markers: false,
    scrub: true,
  },
  yPercent: 0,
  opacity: 1,
  backgroundColor: "#171717",
});

/* ABOUT CONTENT */
let aboutInfo = document.querySelectorAll(".about-photo-item");
aboutInfo.forEach(function (item, index) {
  item.style.zIndex = aboutInfo.length - index;
});

gsap.set(".about-photo-item", {
  clipPath: function () {
    return "inset(0px 0px 0px 0px)";
  },
});

const aboutAnimation = gsap.to(".about-photo-item:not(:last-child)", {
  clipPath: function () {
    return "inset(0px 0px 100% 0px)";
  },
  stagger: 0.5,
  ease: "none",
});

ScrollTrigger.create({
  trigger: ".about-work",
  start: "top top",
  end: "bottom bottom",
  animation: aboutAnimation,
  scrub: 1,
});

const lenis = new Lenis();

lenis.on("scroll", (e) => {});

lenis.on("scroll", ScrollTrigger.update);

gsap.ticker.add((time) => {
  lenis.raf(time * 1000);
});

gsap.ticker.lagSmoothing(0);
