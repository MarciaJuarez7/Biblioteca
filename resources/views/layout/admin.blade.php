<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro · Biblioteca</title>
    <!-- Tailwind CSS via CDN + Font Awesome -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* transición para el sidebar mobile */
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
        /* ocultar scroll horizontal en móvil */
        body { overflow-x: hidden; }
    </style>
</head>
<body class="min-h-screen flex flex-col bg-gray-50 text-gray-800 font-sans antialiased">

    <!-- ========== HEADER ========== -->
    <header class="bg-indigo-700 text-white shadow-md sticky top-0 z-30">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo / título biblioteca -->
                <div class="flex items-center space-x-3">
                    <!-- botón menú hamburguesa -->
                    <button id="menuBtn" class="lg:hidden p-2 rounded-md text-indigo-100 hover:text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-white" aria-label="Abrir menú">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <i class="fas fa-book-open text-2xl hidden sm:block"></i>
                    <span class="font-semibold text-xl tracking-tight">Biblioteca Central</span>
                </div>

                <!-- Menú superior desktop -->
                <nav class="hidden md:flex items-center space-x-1 lg:space-x-2">
                    <a href="{{ route('home')}}" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-indigo-600 transition flex items-center gap-1.5"><i class="fas fa-home"></i> Inicio</a>
                    <a href="#" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-indigo-600 transition flex items-center gap-1.5"><i class="fas fa-users"></i> Usuarios</a>
                    <a href="#" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-indigo-600 transition flex items-center gap-1.5"><i class="fas fa-book"></i> Libros</a>
                    <a href="#" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-indigo-600 transition flex items-center gap-1.5"><i class="fas fa-hand-holding-heart"></i> Préstamos</a>
                    <a href="{{route('logout')}}" class="ml-2 px-3 py-2 rounded-md text-sm font-medium bg-indigo-800 hover:bg-indigo-900 transition flex items-center gap-1.5"><i class="fas fa-sign-out-alt"></i> Salir</a>
                </nav>

                <!-- Menú móvil -->
                <div class="flex md:hidden items-center space-x-1">
                    <a href="{{ route('home')}}" class="p-2 rounded-full hover:bg-indigo-600"><i class="fas fa-home"></i></a>
                    <a href="#" class="p-2 rounded-full hover:bg-indigo-600"><i class="fas fa-users"></i></a>
                    <a href="#" class="p-2 rounded-full hover:bg-indigo-600"><i class="fas fa-book"></i></a>
                    <a href="#" class="p-2 rounded-full hover:bg-indigo-600"><i class="fas fa-hand-holding-heart"></i></a>
                    <a href="#" class="p-2 rounded-full hover:bg-indigo-800"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>
    </header>

    <!-- ========== CONTENEDOR PRINCIPAL con SIDEBAR ========== -->
    <div class="flex flex-1 relative">
        <!-- SIDEBAR -->
        <aside id="sidebar" class="sidebar-transition fixed lg:static inset-y-0 left-0 transform -translate-x-full lg:translate-x-0 z-20 w-64 bg-white shadow-xl lg:shadow-md border-r border-gray-200 flex flex-col h-full lg:h-auto">
            <!-- perfil -->
            <div class="p-5 border-b border-gray-100 bg-gradient-to-r from-indigo-50 to-white">
                <div class="flex items-center space-x-3">
                    <div class="h-10 w-10 rounded-full bg-indigo-200 flex items-center justify-center text-indigo-700 font-bold text-lg">A</div>
                    <div>
                        <p class="font-medium text-gray-800">Admin</p>
                        <p class="text-xs text-gray-500">admin@biblioteca.com</p>
                    </div>
                </div>
            </div>
            
            <!-- navegación lateral -->
            <nav class="flex-1 px-3 py-5 space-y-1">
                <a href="{{ route('home')}}" class="flex items-center gap-3 px-4 py-3 text-gray-700 rounded-lg hover:bg-indigo-50 hover:text-indigo-700 transition group">
                    <i class="fas fa-home w-5 text-gray-400 group-hover:text-indigo-600"></i>
                    <span class="font-medium">Inicio</span>
                </a>
                <a href="{{ route('categorias.index') }}" class="flex items-center gap-3 px-4 py-3 text-gray-700 rounded-lg hover:bg-indigo-50 hover:text-indigo-700 transition group">
                    <i class="fas fa-tags w-5 text-gray-400 group-hover:text-indigo-600"></i>
                    <span class="font-medium">Categorias</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 rounded-lg hover:bg-indigo-50 hover:text-indigo-700 transition group">
                    <i class="fas fa-book w-5 text-gray-400 group-hover:text-indigo-600"></i>
                    <span class="font-medium">Libros</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 rounded-lg hover:bg-indigo-50 hover:text-indigo-700 transition group">
                    <i class="fas fa-hand-holding-heart w-5 text-gray-400 group-hover:text-indigo-600"></i>
                    <span class="font-medium">Préstamos</span>
                </a>
                <div class="pt-4 mt-2 border-t border-gray-100">
                    <a href="{{route('logout')}}" class="flex items-center gap-3 px-4 py-3 text-red-600 rounded-lg hover:bg-red-50 transition group">
                        <i class="fas fa-sign-out-alt w-5"></i>
                        <span class="font-medium">Salir</span>
                    </a>
                </div>
            </nav>
            
            <!-- pie de sidebar -->
            <div class="p-4 text-xs text-gray-400 border-t text-center">
                v2.1 · gestión interna
            </div>
        </aside>

        <!-- overlay para móvil -->
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-10 hidden lg:hidden transition-opacity"></div>

        <!-- ========== MAIN CONTENT ========== -->
        <main class="flex-1 p-4 sm:p-6 lg:p-8 min-w-0">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    @include('partials.admin.footer')

    <!-- Script para el menú hamburguesa -->
    <script>
        const menuBtn = document.getElementById('menuBtn');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        if (menuBtn && sidebar && overlay) {
            menuBtn.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-full');
                overlay.classList.toggle('hidden');
            });

            overlay.addEventListener('click', () => {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
            });
        }
    </script>
</body>
</html>


            
