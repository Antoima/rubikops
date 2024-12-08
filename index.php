<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rubikops - Your partner in digital development. We offer branding, web design, platform management, and more.">
    <title>Rubikops</title>
    <!-- Incluye Tailwind CSS desde un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Incluye Swiper CSS desde un CDN -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Incluye el archivo CSS externo -->
    <link href="src/css/navbar.css" rel="stylesheet">
    <link href="src/css/portafolio.css" rel="stylesheet">
    <link href="src/css/portafolioMobile.css" rel="stylesheet">
    <!-- Incluye el archivo CSS externo config -->
    <link href="src/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>

</head>
<body class="bg-gray-10">
<header>
    <nav class="navbar fixed w-full z-20 top-0 shadow-md">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0">
                        <img class="h-8 w-auto" src="src/img/rubikops_logo.png" alt="Rubik Logo">
                    </div>
                    <div class="hidden sm:block sm:ml-auto">
                        <div class="flex space-x-4">
                            <a href="#" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">INICIO</a>
                            <a href="#servicios" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">SERVICIOS</a>
                            <a href="#quienes-somos" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">¿QUIÉNES SOMOS?</a>
                            <a href="#" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">CONTACTANOS</a>
                        </div>
                    </div>
                    <!-- Botón de menú para dispositivos móviles -->
                    <button id="menu-toggle" class="sm:hidden text-white px-3 py-2 rounded-md text-sm font-medium">
                        Menú
                    </button>
                </div>
            </div>
            <!-- Menú desplegable para dispositivos móviles -->
            <div id="menu" class="hidden sm:hidden">
                <a href="#" class="block text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-base font-medium">INICIO</a>
                <a href="#servicios" class="block text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-base font-medium">SERVICIOS</a>
                <a href="#quienes-somos" class="block text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-base font-medium">¿QUIÉNES SOMOS?</a>
                <a href="#" class="block text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-base font-medium">CONTACTANOS</a>
            </div>
        </div>
    </nav>
</header>
    <main>
        <section class="relative bg-cover bg-center h-screen" style="background-image: url('src/img/banner_principal.png');">
            <div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="relative flex items-center justify-start h-full text-white">
                <div class="w-1/2 text-center">
                    <p class="text-lg mb-2" style="color: rgb(102,252,241);">TU SUEÑO CON VIDA DIGITAL</p>
                    <h1 class="text-4xl font-bold mb-4 uppercase">¡Conquistemos el mundo digital!</h1>
                    <a href="#" class="px-6 py-3 border-2 border-blue-500 text-white font-semibold rounded-full hover:bg-blue-600" style="border-color: rgb(102,252,241);">Quiero saber más</a>
                </div>
            </div>
        </section>
          <!-- Nueva sección de servicios -->
        <section id="servicios" class="py-12 bg-navbar-color">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center mb-8 text-white">Nuestros Servicios</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <i class="fas fa-bullhorn text-2xl mb-4"></i> <!-- Icono de ejemplo -->
                        <h3 class="text-xl font-semibold mb-2">Branding</h3>
                        <p>Te ayudamos a establecer tu marca. Cuéntanos como deseas tu logo, tu slogan, qué quieres proyectar, y nosotros nos encargamos del resto.</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <i class="fas fa-laptop-code text-2xl mb-4"></i> <!-- Icono de ejemplo -->
                        <h3 class="text-xl font-semibold mb-2">Diseño Web</h3>
                        <p>La visualización de la página web es muy importante. Damos ideas de diseño y de creación de páginas web en HTML y Wordpress.</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <i class="fas fa-server text-2xl mb-4"></i> <!-- Icono de ejemplo -->
                        <h3 class="text-xl font-semibold mb-2">Manejo de Plataformas</h3>
                        <p>Asesoramos con diferentes plataformas de Hosting y servicios, como GoDaddy o Google Workspace.</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <i class="fas fa-chart-line text-2xl mb-4"></i> <!-- Icono de ejemplo -->
                        <h3 class="text-xl font-semibold mb-2">Marketing Digital</h3>
                        <p>¿Quieres impulsar tu negocio en las redes? ¿Quieres aumentar tus ingresos con la promoción de productos en redes? ¡Te asesoramos!</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <i class="fas fa-paint-brush text-2xl mb-4"></i> <!-- Icono de ejemplo -->
                        <h3 class="text-xl font-semibold mb-2">Diseño Gráfico y Publicitario</h3>
                        <p>Si necesitas ayuda con mejores gráficos, imágenes, videos, puedes consultarnos sin ningún problema.</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <i class="fas fa-mobile-alt text-2xl mb-4"></i> <!-- Icono de ejemplo -->
                        <h3 class="text-xl font-semibold mb-2">Desarrollo de Aplicaciones</h3>
                        <p>En desarrollo. Próximamente tendremos servicio de creación de aplicaciones en algunos lenguajes.</p>
                    </div>
                </div>
            </div>
        </section>

<!-- Línea o sección con fondo azul y texto animado -->
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
         <!-- Nueva sección de portafolio -->
         <section id="portafolio" class="py-24 bg-portafolio">
             <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row items-center mb-8">
                    <h2 class="text-3xl md:text-5xl font-bold text-white relative pl-4 md:pl-10">
                        <span class="absolute left-0 top-1/2 transform -translate-y-1/2 h-1 w-4 md:w-8 bg-color-global"></span>
                        Portafolio
                    </h2>
                    <a href="https://davidmunera.co" class="mt-4 md:mt-0 md:ml-auto px-4 md:px-6 py-2 md:py-3 border-2 border-blue-500 text-white font-semibold rounded-full hover:bg-blue-600 self-center md:self-auto" style="border-color: rgb(102,252,241);">View All</a>
                </div>
            <div class="swiper-container py-20">
                    <div class="swiper-wrapper">
                     <div class="swiper-slide group perspective bg-white p-0 rounded-lg cursor-pointer" style="height: 400px; overflow: hidden;" onclick="openModal()">
                         <div class="relative transform-style-3d group-hover:rotate-y-180 duration-700 w-full h-full">
                             <!-- Cara frontal de la tarjeta -->
                             <div class="absolute backface-hidden w-full h-full" style="background-image: url('https://cdn.myportfolio.com/f56af81070bd78b74c624b1b9c70277a/95de53d4-772b-41f7-b272-b21161c22213_carw_202x158x640.jpg?h=422e6a4afc11aa2f7ea3a950c7065989'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                                 <!-- Texto centrado en la cara frontal -->
                                 <div class="flex items-center justify-center h-full overlay">
                                     <span class="text-white text-2xl font-bold project-type">Tipo de Proyecto</span>
                                 </div>
                             </div>
                             <!-- Cara trasera de la tarjeta -->
                             <div class="absolute rotate-y-180 backface-hidden w-full h-full bg-gray-200 p-6 rounded-lg">
                                 <h3 class="text-xl font-semibold mb-2">Detalles del Proyecto 1</h3>
                                 <p>Más información sobre el proyecto 1. <a href="#" class="text-blue-500">Leer más</a></p>
                             </div>
                         </div>
                     </div>
                     <div class="swiper-slide group perspective bg-white p-0 rounded-lg cursor-pointer" style="height: 400px; overflow: hidden;" onclick="openModal()">
                         <div class="relative transform-style-3d group-hover:rotate-y-180 duration-700 w-full h-full">
                             <!-- Cara frontal de la tarjeta -->
                             <div class="absolute backface-hidden w-full h-full" style="background-image: url('https://cdn.myportfolio.com/f56af81070bd78b74c624b1b9c70277a/b54427a4-d6b5-4b9a-829e-e6a25be74e84_rw_1920.png?h=0b8fe299041aa0aab94695f1c7c84188'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                                 <!-- Texto centrado en la cara frontal -->
                                 <div class="flex items-center justify-center h-full overlay">
                                     <span class="text-white text-2xl font-bold project-type">Tipo de Proyecto</span>
                                 </div>
                             </div>
                             <!-- Cara trasera de la tarjeta -->
                             <div class="absolute rotate-y-180 backface-hidden w-full h-full bg-gray-200 p-6 rounded-lg">
                                 <h3 class="text-xl font-semibold mb-2">Detalles del Proyecto 1</h3>
                                 <p>Más información sobre el proyecto 1. <a href="#" class="text-blue-500">Leer más</a></p>
                             </div>
                         </div>
                     </div>
                     <div class="swiper-slide group perspective bg-white p-0 rounded-lg cursor-pointer" style="height: 400px; overflow: hidden;" onclick="openModal()">
                         <div class="relative transform-style-3d group-hover:rotate-y-180 duration-700 w-full h-full">
                             <!-- Cara frontal de la tarjeta -->
                             <div class="absolute backface-hidden w-full h-full" style="background-image: url('https://cdn.myportfolio.com/f56af81070bd78b74c624b1b9c70277a/b90b86de-b7d9-4501-b734-dfc7ed028918.jpg?h=7510f72f48052c0a8868c3b8dd787a1b'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                                 <!-- Texto centrado en la cara frontal -->
                                 <div class="flex items-center justify-center h-full overlay">
                                     <span class="text-white text-2xl font-bold project-type">Tipo de Proyecto</span>
                                 </div>
                             </div>
                             <!-- Cara trasera de la tarjeta -->
                             <div class="absolute rotate-y-180 backface-hidden w-full h-full bg-gray-200 p-6 rounded-lg">
                                 <h3 class="text-xl font-semibold mb-2">Detalles del Proyecto 1</h3>
                                 <p>Más información sobre el proyecto 1. <a href="#" class="text-blue-500">Leer más</a></p>
                             </div>
                         </div>
                     </div>
                     <div class="swiper-slide group perspective bg-white p-0 rounded-lg cursor-pointer" style="height: 400px; overflow: hidden;" onclick="openModal()">
                         <div class="relative transform-style-3d group-hover:rotate-y-180 duration-700 w-full h-full">
                             <!-- Cara frontal de la tarjeta -->
                             <div class="absolute backface-hidden w-full h-full" style="background-image: url('https://cdn.myportfolio.com/f56af81070bd78b74c624b1b9c70277a/379a03ae-cb38-4492-afaa-46c7af22df57_rw_1920.jpg?h=768af7cccdc82c5aff9d94c8554e590d'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                                 <!-- Texto centrado en la cara frontal -->
                                 <div class="flex items-center justify-center h-full overlay">
                                     <span class="text-white text-2xl font-bold project-type">Tipo de Proyecto</span>
                                 </div>
                             </div>
                             <!-- Cara trasera de la tarjeta -->
                             <div class="absolute rotate-y-180 backface-hidden w-full h-full bg-gray-200 p-6 rounded-lg">
                                 <h3 class="text-xl font-semibold mb-2">Detalles del Proyecto 1</h3>
                                 <p>Más información sobre el proyecto 1. <a href="#" class="text-blue-500">Leer más</a></p>
                             </div>
                         </div>
                     </div>
                     <div class="swiper-slide group perspective bg-white p-0 rounded-lg cursor-pointer" style="height: 400px; overflow: hidden;" onclick="openModal()">
                         <div class="relative transform-style-3d group-hover:rotate-y-180 duration-700 w-full h-full">
                             <!-- Cara frontal de la tarjeta -->
                             <div class="absolute backface-hidden w-full h-full" style="background-image: url('https://cdn.myportfolio.com/f56af81070bd78b74c624b1b9c70277a/e14bd429-43f5-4c8b-b0cb-864031b93a8e_rw_1200.jpg?h=d5e74d8c719f56f9c1233c672ed42f7b'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                                 <!-- Texto centrado en la cara frontal -->
                                 <div class="flex items-center justify-center h-full overlay">
                                     <span class="text-white text-2xl font-bold project-type">Tipo de Proyecto</span>
                                 </div>
                             </div>
                             <!-- Cara trasera de la tarjeta -->
                             <div class="absolute rotate-y-180 backface-hidden w-full h-full bg-gray-200 p-6 rounded-lg">
                                 <h3 class="text-xl font-semibold mb-2">Detalles del Proyecto 1</h3>
                                 <p>Más información sobre el proyecto 1. <a href="#" class="text-blue-500">Leer más</a></p>
                             </div>
                         </div>
                     </div>
                     <div class="swiper-slide group perspective bg-white p-0 rounded-lg cursor-pointer" style="height: 400px; overflow: hidden;" onclick="openModal()">
                         <div class="relative transform-style-3d group-hover:rotate-y-180 duration-700 w-full h-full">
                             <!-- Cara frontal de la tarjeta -->
                             <div class="absolute backface-hidden w-full h-full" style="background-image: url('https://cdn.myportfolio.com/f56af81070bd78b74c624b1b9c70277a/12fbf632-a23d-499f-8e32-d759cdd78cd0_rw_1200.png?h=81c9f057b54057e620bc765b446f7cdc'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                                 <!-- Texto centrado en la cara frontal -->
                                 <div class="flex items-center justify-center h-full overlay">
                                     <span class="text-white text-2xl font-bold project-type">Tipo de Proyecto</span>
                                 </div>
                             </div>
                             <!-- Cara trasera de la tarjeta -->
                             <div class="absolute rotate-y-180 backface-hidden w-full h-full bg-gray-200 p-6 rounded-lg">
                                 <h3 class="text-xl font-semibold mb-2">Detalles del Proyecto 1</h3>
                                 <p>Más información sobre el proyecto 1. <a href="#" class="text-blue-500">Leer más</a></p>
                             </div>
                         </div>
                     </div>
                     </div>
                     <!-- Agrega los controles de navegación si lo deseas -->
                     <div class="swiper-button-next"></div>
                     <div class="swiper-button-prev"></div>
                     <div class="swiper-pagination"></div>
                 </div>
                                 <!-- Línea decorativa vertical -->
                <div class="flex justify-center mt-16">
                    <div class="h-12 w-1 bg-color-global" ></div>
                </div>
             </div>
         </section>
         <!-- Sección de Quiénes Somos -->
         <section id="quienes-somos" class="py-12 bg-navbar-color">
             <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                 <div class="flex flex-col md:flex-row items-center mb-8">
                     <h2 class="text-3xl md:text-5xl font-bold text-white relative pl-4 md:pl-10">
                         <span class="absolute left-0 top-1/2 transform -translate-y-1/2 h-1 w-4 md:w-8 bg-color-global"></span>
                         ¿Quiénes somos?
                     </h2>
                 </div>
                 <p class="text-lg text-color-global mb-8">¿Qué y quiénes son Rubikops?</p>
                 <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                     <!-- Parte izquierda: Imagen con texto -->
                     <div class="flex flex-col justify-center items-center bg-gray-100 p-6 rounded-lg shadow-lg">
                         <img src="src/img/trabajo_equipo.png" alt="Trabajo en Equipo" class="mb-4">
                         <h3 class="text-xl font-semibold mb-2">Trabajo en Equipo</h3>
                         <p>Creativos comprometidos</p>
                     </div>
                     <!-- Parte derecha: Dos imágenes -->
                     <div class="flex flex-col space-y-4">
                         <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                             <img src="src/img/filosofia.png" alt="Filosofía" class="mb-4">
                             <h3 class="text-xl font-semibold mb-2">Filosofía</h3>
                             <p>La confianza da resultados</p>
                         </div>
                         <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                             <img src="src/img/oficinas.png" alt="Oficinas" class="mb-4">
                             <h3 class="text-xl font-semibold mb-2">Oficinas</h3>
                             <p>En algún lugar del mundo</p>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         
         <!-- Explicación de Quiénes Somos -->
         <section class="py-12 bg-navbar-color">
             <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                 <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                     <!-- Primera columna -->
                     <div class="flex flex-col items-center relative">
                         <h3 class="text-2xl font-bold text-white mt-4">¿Quiénes somos?</h3>
                         <p class="text-white mt-2 text-justify pr-4">Somos una empresa dedicada a entender los requerimientos
                             y necesidades del cliente en el Rubikops es su agencia digital de referencia para
                             todo lo relacionado con desarrollo web, diseño gráfico y creación de contenido. 
                             Con el objetivo de hacer realidad sus ideas digitales, ofrecemos un servicio atractivo 
                             y amigable. Aprovechando plataformas como WordPress y DreamHost, junto con el conjunto de 
                             herramientas de Google, creamos sitios web dinámicos y optimizamos la presencia en línea 
                             para generar resultados.</p>
                         <!-- Línea horizontal en móvil, vertical en escritorio -->
                         <div class="h-1 w-full bg-color-global mt-4 md:h-full md:w-1 md:right-0 md:top-0 md:absolute"></div>
                     </div>
                     <!-- Segunda columna -->
                     <div class="flex flex-col items-center relative">
                         <h3 class="text-2xl font-bold text-white mt-4">Nuestra Visión</h3>
                         <p class="text-white mt-2 text-justify pr-4">Ser la agencia digital líder conocida por transformar ideas innovadoras 
                             en experiencias digitales impactantes, fomentando el crecimiento y el éxito de nuestros clientes 
                             en todo el mundo.</p>
                         <!-- Línea horizontal en móvil, vertical en escritorio -->
                         <div class="h-1 w-full bg-color-global mt-4 md:h-full md:w-1 md:right-0 md:top-0 md:absolute"></div>
                     </div>
                     <!-- Tercera columna -->
                     <div class="flex flex-col items-center">
                         <h3 class="text-2xl font-bold text-white mt-4">Nuestra Misión</h3>
                         <p class="text-white mt-2 text-justify pr-4">Nuestra misión es capacitar a personas y empresas con soluciones digitales
                             de vanguardia, entregadas con un compromiso con la excelencia, la creatividad y un servicio al cliente 
                             incomparable. A través de asociaciones colaborativas y una búsqueda incesante de innovación, 
                             nos esforzamos por hacer que el mundo digital sea más accesible, atractivo y gratificante para todos.</p>
                         <!-- Línea horizontal en móvil, vertical en escritorio -->
                         <div class="h-1 w-full bg-color-global mt-4 md:h-full md:w-1 md:right-0 md:top-0 md:absolute"></div>
                     </div>
                 </div>
             </div>
         </section>
    </main>
    <footer>
        <!-- Contenido del pie de página -->
    </footer>
    <!-- Modal -->
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
    <script src="src/js/navbar.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <script src="src/js/portafolio.js"></script>
</body>
</html>