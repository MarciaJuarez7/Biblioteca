<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca | BiblioTech</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* transición suave para el menú móvil */
        .mobile-menu {
            transition: transform 0.3s ease-in-out, opacity 0.2s ease;
            transform: translateX(-100%);
        }
        .mobile-menu.open {
            transform: translateX(0);
        }
        /* overlay oscuro */
        .menu-overlay {
            transition: opacity 0.3s ease;
        }
        /* opcional: efecto sutil en hero */
        .hero-gradient {
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.1) 0%, rgba(129, 140, 248, 0.05) 100%);
        }
    </style>
</head>

<body class="font-sans antialiased text-gray-800 flex flex-col min-h-screen">

    <!-- ========== HEADER ========== -->
    <header class="bg-white shadow-sm sticky top-0 z-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo y nombre -->
                <div class="flex items-center space-x-3">
                    <i class="fas fa-book-open text-indigo-600 text-2xl"></i>
                    <span class="font-bold text-xl text-gray-800">Biblioteca Abierta</span>
                </div>

                <!-- Navegación desktop (visible a partir de md) -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium transition-colors" aria-current="page">Inicio</a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium transition-colors">Catálogo</a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium transition-colors">Servicios</a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium transition-colors">Contacto</a>
                    <a href="#" class="bg-indigo-600 text-white px-5 py-2 rounded-full hover:bg-indigo-700 transition shadow-sm flex items-center gap-2">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                </nav>

                <!-- Botón hamburguesa (móvil) -->
                <button id="menuBtn" class="md:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-300" aria-label="Abrir menú">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>

        <!-- Menú móvil (desplegable) con overlay -->
        <div id="mobileMenu" class="fixed inset-0 z-40 md:hidden pointer-events-none">
            <!-- Overlay oscuro -->
            <div id="overlay" class="menu-overlay absolute inset-0 bg-black bg-opacity-50 opacity-0 transition-opacity duration-300 pointer-events-auto"></div>
            <!-- Panel lateral del menú -->
            <div id="menuPanel" class="mobile-menu absolute top-0 left-0 w-64 h-full bg-white shadow-xl p-6 pointer-events-auto">
                <div class="flex justify-between items-center mb-8">
                    <span class="font-bold text-lg text-indigo-600">Menú</span>
                    <button id="closeMenuBtn" class="text-gray-500 hover:text-gray-800">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <nav class="flex flex-col space-y-4">
                    <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium py-2 border-b border-gray-100 flex items-center gap-3">
                        <i class="fas fa-home w-5 text-indigo-400"></i> Inicio
                    </a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium py-2 border-b border-gray-100 flex items-center gap-3">
                        <i class="fas fa-search w-5 text-indigo-400"></i> Catálogo
                    </a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium py-2 border-b border-gray-100 flex items-center gap-3">
                        <i class="fas fa-hand-holding-heart w-5 text-indigo-400"></i> Servicios
                    </a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 font-medium py-2 border-b border-gray-100 flex items-center gap-3">
                        <i class="fas fa-envelope w-5 text-indigo-400"></i> Contacto
                    </a>
                    <a href="#" class="mt-4 bg-indigo-600 text-white px-4 py-3 rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2">
                        <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                    </a>
                </nav>
                <p class="absolute bottom-6 left-6 text-xs text-gray-400">Biblioteca Abierta © 2026</p>
            </div>
        </div>
    </header>

    <!-- ========== HERO SECTION (con imágenes libres de derechos) ========== -->
    <main class="flex-grow">
        <!-- Hero principal con imagen de fondo (Pexels / Libre) -->
        <section class="relative bg-indigo-50 overflow-hidden">
            <!-- Imagen de fondo: biblioteca moderna (dominio público / Pexels) -->
            <div class="absolute inset-0 z-0">
                <img src="https://images.pexels.com/photos/290595/pexels-photo-290595.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                     alt="Estantería de biblioteca con libros" 
                     class="w-full h-full object-cover opacity-20">
            </div>
            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 hero-gradient">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <!-- Texto hero -->
                    <div>
                        <span class="inline-block bg-indigo-100 text-indigo-800 px-4 py-1 rounded-full text-sm font-semibold mb-4">Bienvenidos a tu biblioteca</span>
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6">
                            Descubre un mundo <br><span class="text-indigo-700">de conocimiento</span>
                        </h1>
                        <p class="text-lg text-gray-600 mb-8">
                            Más de 15,000 títulos disponibles. Préstamos gratis, sala de lectura y actividades culturales para todas las edades.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="#" class="bg-indigo-600 text-white px-8 py-3 rounded-full hover:bg-indigo-700 transition shadow-lg flex items-center gap-2 text-lg">
                                <i class="fas fa-book-open"></i> Explorar catálogo
                            </a>
                            <a href="#" class="bg-white text-indigo-700 px-8 py-3 rounded-full hover:bg-indigo-50 transition shadow border border-indigo-200 flex items-center gap-2 text-lg">
                                <i class="fas fa-id-card"></i> Solicitar carnet
                            </a>
                        </div>
                        <p class="mt-6 text-sm text-gray-500 flex items-center gap-2">
                            <i class="fas fa-check-circle text-green-500"></i> Acceso libre y gratuito
                        </p>
                    </div>
                    <!-- Imagen lateral (libre de copyright) - chica leyendo -->
                    <div class="hidden md:block relative">
                        <img src="https://images.pexels.com/photos/256450/pexels-photo-256450.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                             alt="Persona leyendo un libro en la biblioteca" 
                             class="rounded-2xl shadow-2xl object-cover w-full h-auto max-h-96 border-4 border-white">
                        <!-- Badge flotante decorativo -->
                        <div class="absolute -bottom-4 -left-4 bg-white p-3 rounded-xl shadow-lg flex items-center gap-2">
                            <i class="fas fa-star text-yellow-400"></i>
                            <span class="font-medium">+500 socios nuevos</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de características / destacados (con más imágenes) -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Más que una biblioteca</h2>
                <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">Espacios modernos, tecnología y un equipo dispuesto a ayudarte</p>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Tarjeta 1: libros (imagen Pexels) -->
                    <article class="bg-gray-50 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition">
                        <img src="https://images.pexels.com/photos/159711/books-bookstore-book-reading-159711.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                             alt="Estante con libros antiguos" 
                             class="w-full h-48 object-cover">
                        <div class="p-6">
                            <i class="fas fa-book-open text-indigo-500 text-2xl mb-3"></i>
                            <h3 class="text-xl font-semibold mb-2">Colección amplia</h3>
                            <p class="text-gray-600">Clásicos, bestsellers, cómics y material académico actualizado mensualmente.</p>
                        </div>
                    </article>
                    <!-- Tarjeta 2: espacio de lectura (imagen Unsplash - libre) -->
                    <article class="bg-gray-50 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition">
                        <img src="https://images.pexels.com/photos/207662/pexels-photo-207662.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                             alt="Sala de lectura luminosa" 
                             class="w-full h-48 object-cover">
                        <div class="p-6">
                            <i class="fas fa-couch text-indigo-500 text-2xl mb-3"></i>
                            <h3 class="text-xl font-semibold mb-2">Salas de lectura</h3>
                            <p class="text-gray-600">Ambientes tranquilos, wifi gratuito y zonas de estudio grupales o individuales.</p>
                        </div>
                    </article>
                    <!-- Tarjeta 3: niños leyendo (imagen Pexels) -->
                    <article class="bg-gray-50 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition">
                        <img src="https://images.pexels.com/photos/8613073/pexels-photo-8613073.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                             alt="Niños leyendo cuentos" 
                             class="w-full h-48 object-cover">
                        <div class="p-6">
                            <i class="fas fa-child text-indigo-500 text-2xl mb-3"></i>
                            <h3 class="text-xl font-semibold mb-2">Actividades infantiles</h3>
                            <p class="text-gray-600">Cuentacuentos, talleres de ilustración y club de lectura para los más pequeños.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Mini sección de "Eventos próximos" con otra imagen -->
        <section class="py-12 bg-indigo-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row items-center gap-10">
                    <div class="lg:w-1/2">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Próximos eventos</h2>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-4 bg-white p-4 rounded-xl shadow-sm">
                                <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm font-bold">15 MAR</span>
                                <div><p class="font-semibold">Club de novela negra</p><p class="text-sm text-gray-500">Discutimos "La chica del tren"</p></div>
                            </li>
                            <li class="flex items-start gap-4 bg-white p-4 rounded-xl shadow-sm">
                                <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm font-bold">22 MAR</span>
                                <div><p class="font-semibold">Taller de escritura creativa</p><p class="text-sm text-gray-500">Imparte: Laura García</p></div>
                            </li>
                            <li class="flex items-start gap-4 bg-white p-4 rounded-xl shadow-sm">
                                <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm font-bold">05 ABR</span>
                                <div><p class="font-semibold">Cuentacuentos familiar</p><p class="text-sm text-gray-500">Para niños de 3 a 8 años</p></div>
                            </li>
                        </ul>
                    </div>
                    <div class="lg:w-1/2">
                        <img src="https://images.pexels.com/photos/577585/pexels-photo-577585.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                             alt="Evento de lectura en grupo" 
                             class="rounded-2xl shadow-xl object-cover w-full h-64 lg:h-80">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ========== FOOTER ========== -->
    <footer class="bg-gray-900 text-gray-300 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Col 1: info biblioteca -->
                <div>
                    <div class="flex items-center space-x-2 text-white mb-4">
                        <i class="fas fa-book-open text-indigo-400 text-xl"></i>
                        <span class="font-bold text-lg">Biblioteca Abierta</span>
                    </div>
                    <p class="text-sm text-gray-400">Calle del Saber 123, Centro. Horario: Lun-Vie 9:00-20:00, Sáb 10:00-18:00</p>
                </div>
                <!-- Col 2: enlaces rápidos -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Enlaces</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-indigo-300 transition">Inicio</a></li>
                        <li><a href="#" class="hover:text-indigo-300 transition">Catálogo en línea</a></li>
                        <li><a href="#" class="hover:text-indigo-300 transition">Hazte socio</a></li>
                        <li><a href="#" class="hover:text-indigo-300 transition">Preguntas frecuentes</a></li>
                    </ul>
                </div>
                <!-- Col 3: contacto -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Contacto</h4>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center gap-2"><i class="fas fa-phone w-4 text-indigo-400"></i> 555-123-4567</li>
                        <li class="flex items-center gap-2"><i class="fas fa-envelope w-4 text-indigo-400"></i> info@bibliotecaabierta.org</li>
                        <li class="flex items-center gap-2"><i class="fab fa-twitter w-4 text-indigo-400"></i> @biblio_abierta</li>
                    </ul>
                </div>
                <!-- Col 4: newsletter ficticio -->
                <div>
                    <h4 class="text-white font-semibold mb-4">¿Novedades?</h4>
                    <p class="text-sm text-gray-400 mb-2">Suscríbete a nuestro boletín</p>
                    <form class="flex">
                        <input type="email" placeholder="tu@email.com" class="px-3 py-2 text-sm rounded-l-lg w-full bg-gray-800 border border-gray-700 text-white focus:outline-none focus:ring-1 focus:ring-indigo-500">
                        <button class="bg-indigo-600 hover:bg-indigo-700 px-4 rounded-r-lg text-white"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-6 text-center text-xs text-gray-500">
                <p>© 2026 Biblioteca Abierta. Todas las imágenes son de Pexels (libres para uso comercial sin atribución).</p>
                <p class="mt-1">Diseño con Tailwind CSS · Menú hamburguesa con JavaScript vanilla.</p>
            </div>
        </div>
    </footer>

    <!-- ========== JAVASCRIPT VANILLA (menú hamburguesa) ========== -->
    <script>
        (function() {
            const menuBtn = document.getElementById('menuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            const overlay = document.getElementById('overlay');
            const menuPanel = document.getElementById('menuPanel');
            const closeBtn = document.getElementById('closeMenuBtn');

            // Funciones para abrir/cerrar
            function openMenu() {
                mobileMenu.classList.remove('pointer-events-none');
                overlay.classList.remove('opacity-0');
                overlay.classList.add('opacity-100');
                menuPanel.classList.add('open');
                document.body.style.overflow = 'hidden'; // evitar scroll
            }

            function closeMenu() {
                overlay.classList.remove('opacity-100');
                overlay.classList.add('opacity-0');
                menuPanel.classList.remove('open');
                // Esperar a que termine la transición para ocultar el contenedor y restaurar scroll
                setTimeout(() => {
                    if (!menuPanel.classList.contains('open')) {
                        mobileMenu.classList.add('pointer-events-none');
                        document.body.style.overflow = '';
                    }
                }, 300); // mismo tiempo que transition
            }

            // Event listeners
            if (menuBtn) {
                menuBtn.addEventListener('click', openMenu);
            }
            if (closeBtn) {
                closeBtn.addEventListener('click', closeMenu);
            }
            if (overlay) {
                overlay.addEventListener('click', closeMenu);
            }

            // Cerrar con tecla Escape
            window.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && menuPanel && menuPanel.classList.contains('open')) {
                    closeMenu();
                }
            });

            // Ajustar si se redimensiona a pantalla grande y el menú está abierto
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768) { // md breakpoint
                    if (menuPanel && menuPanel.classList.contains('open')) {
                        closeMenu(); // forzar cierre
                    }
                }
            });
        })();
    </script>
</body>
</html>
