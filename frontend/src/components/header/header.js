$(document).ready(function () {
  const navItems = $(".nav-item");

  function handleNavItemClick(gotoValue) {
    displayPage(gotoValue);
    updateActiveNavItem(gotoValue);

    const targetSection = $(`div > .fe-page:visible[id=${gotoValue}]`);
    if (targetSection.length) {
      $("html, body").animate(
        {
          scrollTop: targetSection.offset().top,
        },
        600
      );
    }
  }

  navItems.on("click", function () {
    const pageName = $(this).attr("goto");
    sessionStorage.setItem("lastVisitedPage", pageName);
    handleNavItemClick(pageName);
  });

  function setActiveNavItemOnScroll() {
    $("div > .fe-page:visible").each(function () {
      const sectionTop = $(this).offset().top;
      const sectionBottom = sectionTop + $(this).outerHeight();

      if (
        $(window).scrollTop() >= sectionTop &&
        $(window).scrollTop() < sectionBottom
      ) {
        const sectionId = $(this).attr("id");
        updateActiveNavItem(sectionId);
      }
    });
  }

  const lastVisitedPage = sessionStorage.getItem("lastVisitedPage");

  if (lastVisitedPage) {
    displayPage(lastVisitedPage);
    updateActiveNavItem(lastVisitedPage);
    $("html, body").animate(
      {
        scrollTop: $(`div > .fe-page:visible[id=${lastVisitedPage}]`).offset()
          .top,
      },
      600
    );
  } else {
    displayPage("page_home");
    updateActiveNavItem("page_home");
    $("html, body").animate(
      {
        scrollTop: $(`div > .fe-page:visible[id=page_home]`).offset().top,
      },
      600
    );
  }

  // Call this function on scroll to update active nav item
  $(window).on("scroll", setActiveNavItemOnScroll);

  function displayPage(pageName) {
    $("div > .fe-page").each(function () {
      const currentPage = $(this).attr("id");

      if (
        currentPage === pageName ||
        (pageName === "page_home" &&
          (currentPage === "page_about" ||
            currentPage === "page_admissions")) ||
        (pageName === "page_about" &&
          (currentPage === "page_home" || currentPage === "page_admissions")) ||
        (pageName === "page_admissions" &&
          (currentPage === "page_home" || currentPage === "page_about"))
      ) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  }

  function updateActiveNavItem(activePage) {
    navItems.removeClass("active");
    $(`.nav-item[goto=${activePage}]`).addClass("active");
  }
});

let menu = document.querySelector("#menu-icon");
let navMenu = document.querySelector(".nav-menu");

menu.onclick = () => {
  menu.classList.toggle("bx-x");
  navMenu.classList.toggle("open");
};

window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navbar");

  if (window.innerWidth > 1090) {
    if (window.scrollY > 0) {
      navbar.classList.add("fixed");
    } else {
      navbar.classList.remove("fixed");
    }
  } else {
    navbar.classList.remove("fixed");
  }
});
