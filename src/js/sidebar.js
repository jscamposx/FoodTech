var currentPage = window.location.pathname;
if (currentPage.startsWith('/admin')) {
  console.log("Script sidebar loaded!");
  let list = document.querySelectorAll(".sidebar__navigation li");
  function activeLink() {
    list.forEach((item) => {
      item.classList.remove("hovered");
    });
    this.classList.add("hovered");
  }
  list.forEach((item) => item.addEventListener("mouseover", activeLink));

  // Menu Toggle
  let toggle = document.querySelector(".dashboard__toggle");
  let main = document.querySelector(".dashboard__contenido");
  let navigation = document.querySelector(".sidebar__navigation");

  toggle.onclick = function() {
    navigation.classList.toggle("sidebar__navigation--active");
    main.classList.toggle("dashboard__contenido--active");
    toggle.classList.toggle("dashboard__toggle--active");
  }
} 