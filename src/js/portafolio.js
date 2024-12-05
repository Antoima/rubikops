document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".swiper-container", {
    slidesPerView: 1, // Muestra una diapositiva a la vez
    spaceBetween: 10, // Espacio entre diapositivas
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      // Cuando la ventana sea >= 640px
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      // Cuando la ventana sea >= 768px
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      // Cuando la ventana sea >= 1024px
      1024: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
    },
  });
});
