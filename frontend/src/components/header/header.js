$(document).ready(function () {
  const navItems = $(".nav-item");

  function handleNavItemClick(gotoValue) {
    displayPage(gotoValue);
    updateActiveNavItem(gotoValue);
  }

  navItems.on("click", function () {
    const pageName = $(this).attr("goto");
    sessionStorage.setItem("lastVisitedPage", pageName);
    handleNavItemClick(pageName);
  });

  const lastVisitedPage = sessionStorage.getItem("lastVisitedPage");

  if (lastVisitedPage) {
    displayPage(lastVisitedPage);
    updateActiveNavItem(lastVisitedPage);
  } else {
    displayPage("page_home");
    updateActiveNavItem("page_home");
  }

  function displayPage(pageName) {
    $("div > .fe-page").each(function () {
      if ($(this).attr("id") === pageName) {
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
