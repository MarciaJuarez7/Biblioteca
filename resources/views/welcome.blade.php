<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca | BiblioTech</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans min-h-screen">

<header class="fixed top-0 left-0 right-0 z-50 bg-blue-800 text-white shadow">
    <div class="flex items-center justify-between px-6 py-4">
        <div class="flex items-center gap-4">
            <button id="btnSidebar" class="md:hidden text-2xl focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>

            <span class="text-xl font-bold tracking-wide">BiblioTech</span>
        </div>

        <nav class="hidden md:flex space-x-8">
            <a href="#" class="hover:text-blue-200 transition">Inicio</a>
            <a href="#" class="hover:text-blue-200 transition">Usuarios</a>
            <a href="#" class="hover:text-blue-200 transition">Libros</a>
            <a href="#" class="hover:text-blue-200 transition">Préstamos</a>
            <a href="#" class="hover:text-red-300 transition">Salir</a>
        </nav>
    </div>
</header>

<div class="flex pt-16"> <aside id="sidebar"
        class="fixed top-16 left-0 w-64 h-[calc(100vh-4rem)]
               bg-white shadow-md transform -translate-x-full md:translate-x-0
               transition-transform duration-300 z-40">

        <nav class="p-6 space-y-4">
            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest">Navegación</p>
            <a href="#" class="flex items-center gap-3 text-gray-700 hover:text-blue-700 p-2 rounded hover:bg-gray-50">
                <i class="fas fa-home w-5"></i> Inicio
            </a>
            <a href="#" class="flex items-center gap-3 text-gray-700 hover:text-blue-700 p-2 rounded hover:bg-gray-50">
                <i class="fas fa-book w-5"></i> Libros
            </a>
            <a href="#" class="flex items-center gap-3 text-gray-700 hover:text-blue-700 p-2 rounded hover:bg-gray-50">
                <i class="fas fa-handshake w-5"></i> Préstamos
            </a>
            <hr class="border-gray-100">
            <a href="#" class="flex items-center gap-3 text-red-600 hover:text-red-800 p-2 rounded hover:bg-red-50">
                <i class="fas fa-sign-out-alt w-5"></i> Salir
            </a>
        </nav>
    </aside>

    <main class="flex-1 md:ml-64 p-6 transition-all duration-300">
        
        <section
            class="relative h-[50vh] rounded-2xl overflow-hidden mb-10 bg-center bg-cover shadow-xl"
            style="background-image: url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&w=1200&q=80');">

            <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-black/40"></div>

            <div class="relative z-10 h-full flex flex-col justify-center items-center text-center text-white p-8">
                <h1 class="text-3xl md:text-5xl font-extrabold mb-4 drop-shadow-lg">
                    Descubre un Mundo de Conocimiento
                </h1>
                <p class="text-lg md:text-xl mb-8 max-w-2xl text-gray-200">
                    Gestiona tu acervo bibliográfico, usuarios y préstamos con eficiencia y estilo.
                </p>
                <a href="#"
                   class="bg-blue-600 hover:bg-blue-700 px-10 py-3 rounded-full font-bold shadow-lg transition transform hover:scale-105 active:scale-95">
                    Comenzar Ahora
                </a>
            </div>
        </section>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <article class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=600&q=80" 
                     class="w-full h-40 object-cover" alt="Búsqueda">
                <div class="p-4">
                    <h3 class="font-bold text-lg text-gray-800">Búsqueda Avanzada</h3>
                    <p class="text-gray-500 text-sm">Localiza cualquier ejemplar en segundos.</p>
                </div>
            </article>

            <article class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
                <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=600&q=80" 
                     class="w-full h-40 object-cover" alt="Usuarios">
                <div class="p-4">
                    <h3 class="font-bold text-lg text-gray-800">Gestión de Usuarios</h3>
                    <p class="text-gray-500 text-sm">Base de datos de lectores actualizada.</p>
                </div>
            </article>

            <article class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
                <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=600&q=80" 
                     class="w-full h-40 object-cover" alt="Préstamos">
                <div class="p-4">
                    <h3 class="font-bold text-lg text-gray-800">Control de Préstamos</h3>
                    <p class="text-gray-500 text-sm">Monitorea fechas de entrega y devoluciones.</p>
                </div>
            </article>
        </div>

        <footer class="mt-12 py-6 border-t border-gray-200 text-center text-gray-500 text-sm">
            © 2024 BiblioTech · Sistema de Gestión de Bibliotecas
        </footer>
    </main>
</div>

<script>
    const btnSidebar = document.getElementById('btnSidebar');
    const sidebar = document.getElementById('sidebar');

    btnSidebar.addEventListener('click', (e) => {
        e.stopPropagation();
        sidebar.classList.toggle('-translate-x-full');
    });

    // Cerrar sidebar al hacer clic fuera en móviles
    document.addEventListener('click', (e) => {
        if (window.innerWidth < 768 && !sidebar.contains(e.target) && !btnSidebar.contains(e.target)) {
            sidebar.classList.add('-translate-x-full');
        }
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            sidebar.classList.remove('-translate-x-full');
        } else {
            sidebar.classList.add('-translate-x-full');
        }
    });
</script>

</body>
</html>
