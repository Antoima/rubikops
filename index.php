<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Ejemplo con Tailwind</title>
    <!-- Incluye Tailwind CSS desde un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Incluye el archivo CSS externo -->
    <link href="src/css/navbar.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header>
        <nav class="navbar fixed w-full z-10 top-0 shadow-md">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-auto" src="src/img/rubikops_logo.png" alt="Rubik Logo">
                        </div>
                        <div class="hidden sm:block sm:ml-auto">
                            <div class="flex space-x-4">
                                <a href="#" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">INICIO</a>
                                <a href="#" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">SERVICIOS</a>
                                <a href="#" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">QUIENES SOMOS</a>
                                <a href="#" class="text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">CONTACTANOS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="relative bg-cover bg-center h-screen" style="background-image: url('src/img/banner_principal.png');">
            <div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="relative z-10 flex items-center justify-start h-full text-white">
                <div class="w-1/2 text-center">
                    <p class="text-lg mb-2" style="color: rgb(102,252,241);">TU SUEÑO CON VIDA DIGITAL</p>
                    <h1 class="text-4xl font-bold mb-4 uppercase">¡Conquistemos el mundo digital!</h1>
                    <a href="#" class="px-6 py-3 border-2 border-blue-500 text-white font-semibold rounded-full hover:bg-blue-600" style="border-color: rgb(102,252,241);">Quiero saber más</a>
                </div>
            </div>
        </section>
        <section class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center mb-8">Nuestros Servicios</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <img src="src/img/branding_logo.png" alt="Branding" class="h-12 w-auto mb-4">
                        <h3 class="text-xl font-semibold mb-2">Branding</h3>
                        <p>Te ayudamos a establecer tu marca. Cuéntanos como deseas tu logo, tu slogan, qué quieres proyectar, y nosotros nos encargamos del resto.</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <img src="src/img/web_design_logo.png" alt="Diseño Web" class="h-12 w-auto mb-4">
                        <h3 class="text-xl font-semibold mb-2">Diseño Web</h3>
                        <p>La visualización de la página web es muy importante. Damos ideas de diseño y de creación de páginas web en HTML y Wordpress.</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <img src="src/img/platform_management_logo.png" alt="Manejo de Plataformas" class="h-12 w-auto mb-4">
                        <h3 class="text-xl font-semibold mb-2">Manejo de Plataformas</h3>
                        <p>Asesoramos con diferentes plataformas de Hosting y servicios, como GoDaddy o Google Workspace.</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <img src="src/img/digital_marketing_logo.png" alt="Marketing Digital" class="h-12 w-auto mb-4">
                        <h3 class="text-xl font-semibold mb-2">Marketing Digital</h3>
                        <p>¿Quieres impulsar tu negocio en las redes? ¿Quieres aumentar tus ingresos con la promoción de productos en redes? ¡Te asesoramos!</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <img src="src/img/graphic_design_logo.png" alt="Diseño Gráfico y Publicitario" class="h-12 w-auto mb-4">
                        <h3 class="text-xl font-semibold mb-2">Diseño Gráfico y Publicitario</h3>
                        <p>Si necesitas ayuda con mejores gráficos, imágenes, videos, puedes consultarnos sin ningún problema.</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                        <img src="src/img/app_development_logo.png" alt="Desarrollo de Aplicaciones" class="h-12 w-auto mb-4">
                        <h3 class="text-xl font-semibold mb-2">Desarrollo de Aplicaciones</h3>
                        <p>En desarrollo. Próximamente tendremos servicio de creación de aplicaciones en algunos lenguajes.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ... otras secciones de contenido -->
    </main>
    <footer>
        <!-- Contenido del pie de página -->
    </footer>
    <script src="src/js/navbar.js"></script>

</body>
</html>