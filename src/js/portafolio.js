document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".swiper-container", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
    },
  });

  const modal = document.getElementById("projectModal");
  const closeModal = document.getElementById("closeModal");
  const modalContent = document.querySelector("#projectModal .modal-content");
  const modalImage = document.getElementById("modalImage");
  const prevImage = document.getElementById("prevImage");
  const nextImage = document.getElementById("nextImage");
  let currentIndex = 0;
  const images = [
    "https://cdn.myportfolio.com/f56af81070bd78b74c624b1b9c70277a/95de53d4-772b-41f7-b272-b21161c22213_carw_202x158x640.jpg?h=422e6a4afc11aa2f7ea3a950c7065989",
    "https://cdn.myportfolio.com/f56af81070bd78b74c624b1b9c70277a/b54427a4-d6b5-4b9a-829e-e6a25be74e84_rw_1920.png?h=0b8fe299041aa0aab94695f1c7c84188",
    "https://cdn.myportfolio.com/f56af81070bd78b74c624b1b9c70277a/b90b86de-b7d9-4501-b734-dfc7ed028918.jpg?h=7510f72f48052c0a8868c3b8dd787a1b",
    "https://cdn.myportfolio.com/f56af81070bd78b74c624b1b9c70277a/379a03ae-cb38-4492-afaa-46c7af22df57_rw_1920.jpg?h=768af7cccdc82c5aff9d94c8554e590d",
    "https://cdn.myportfolio.com/f56af81070bd78b74c624b1b9c70277a/e14bd429-43f5-4c8b-b0cb-864031b93a8e_rw_1200.jpg?h=d5e74d8c719f56f9c1233c672ed42f7b",
    "https://cdn.myportfolio.com/f56af81070bd78b74c624b1b9c70277a/12fbf632-a23d-499f-8e32-d759cdd78cd0_rw_1200.png?h=81c9f057b54057e620bc765b446f7cdc",
  ];

  function openModal(index) {
    currentIndex = index;
    showLoadingSpinner();
    modalImage.src = images[currentIndex];
    modal.classList.add("active");
  }

  window.openModal = openModal;

  function showLoadingSpinner() {
    const loadingSpinner = document.getElementById("loadingSpinner");
    loadingSpinner.classList.remove("hidden");
  }

  function hideLoadingSpinner() {
    const loadingSpinner = document.getElementById("loadingSpinner");
    loadingSpinner.classList.add("hidden");
  }

  modalImage.addEventListener("load", hideLoadingSpinner);

  function showPrevImage() {
    showLoadingSpinner();
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    modalImage.src = images[currentIndex];
  }

  function showNextImage() {
    showLoadingSpinner();
    currentIndex = (currentIndex + 1) % images.length;
    modalImage.src = images[currentIndex];
  }

  function closeModalFunc() {
    modal.classList.remove("active");
  }

  closeModal.addEventListener("click", closeModalFunc);

  // Cerrar el modal al hacer clic fuera del contenido del modal
  modal.addEventListener("click", function (event) {
    if (!modalContent.contains(event.target)) {
      closeModalFunc();
    }
  });

  prevImage.addEventListener("click", showPrevImage);
  nextImage.addEventListener("click", showNextImage);

  const slides = document.querySelectorAll(".swiper-slide");
  slides.forEach((slide, index) => {
    slide.addEventListener("click", () => openModal(index));
  });
});
