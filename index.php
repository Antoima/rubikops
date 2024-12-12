<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rubikops - Your partner in digital development. We offer branding, web design, platform management, and more.">
    <meta name="google-site-verification" content="jq5SnVN9Y_2i6LfrPdFVP9k7ng7EFmZsnayAJvPiQNE" />
    <title>Rubikops</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="src/css/navbar.css" rel="stylesheet">
    <link href="src/css/services.css" rel="stylesheet">
    <link href="src/css/portafolio.css" rel="stylesheet">
    <link href="src/css/portafolioMobile.css" rel="stylesheet">
    <link href="src/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-10">

<div id="loadingSpinner" class="fixed inset-0 flex items-center justify-center bg-white opacity-80 z-50">
    <div class="loader"></div>
</div>

<?php include 'sections/header.php'; ?>

<main>
    <?php include 'sections/presentation.php'; ?>
    <?php include 'sections/service.php'; ?>

    <div class="bg-black h-10 flex items-center justify-center relative overflow-hidden">
        <span class="text-white text-2xl font-bold">
            <span class="animate-fall" style="animation-delay: 0s;">R</span>
            <span class="animate-fall" style="animation-delay: 0.2s;">u</span>
            <span class="animate-fall" style="animation-delay: 0.4s;">b</span>
            <span class="animate-fall" style="animation-delay: 0.6s;">i</span>
            <span class="animate-fall" style="animation-delay: 0.8s;">k</span>
            <span class="animate-fall" style="animation-delay: 1s;">o</span>
            <span class="animate-fall" style="animation-delay: 1.2s;">p</span>
            <span class="animate-fall" style="animation-delay: 1.4s;">s</span>
        </span>
    </div>

    <?php include 'sections/portfolio.php'; ?>
    <?php include 'sections/who-we-are.php'; ?>
    <?php include 'sections/who-we-are-explanation.php'; ?>
    <?php include 'sections/information.php'; ?>
    <?php include 'sections/contact.php'; ?>
</main>

<?php include 'sections/footer.php'; ?>

<div id="projectModal" class="hidden">
    <div class="modal-content">
        <button id="closeModal" class="close-button">X</button>
        <button id="prevImage" class="nav-button"><i class="fas fa-chevron-left"></i></button>
        <div class="image-container">
            <img id="modalImage" class="modal-image" src="" alt="Project Image">
            <div id="loadingSpinner" class="loading-spinner hidden">
                <i class="fas fa-spinner fa-spin"></i>
            </div>
        </div>
        <button id="nextImage" class="nav-button"><i class="fas fa-chevron-right"></i></button>
    </div>
</div>

<script src="src/js/custom.js"></script>
<script src="src/js/navbar.js"></script>
<script src="src/js/presentation.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="src/js/contacto.js"></script>
<script src="src/js/portafolio.js"></script>

</body>
</html>