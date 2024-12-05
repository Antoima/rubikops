document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const menu = document.getElementById("menu");
  const navbar = document.querySelector(".navbar");

  // Toggle menu visibility on mobile
  menuToggle.addEventListener("click", function () {
    console.log("Menu toggle clicked"); // Agrega este log
    menu.classList.toggle("hidden");
  });

  // Change navbar style on scroll
  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });
});
