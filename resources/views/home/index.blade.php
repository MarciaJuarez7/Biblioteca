 @extends('layout.admin')

@section('content')
    <!-- Breadcrumb o título de página -->
    <div class="mb-6 flex flex-wrap items-center justify-between gap-4">
        <h1 class="text-2xl sm:text-3xl font-semibold text-gray-800 flex items-center gap-2">
            <i class="fas fa-tachometer-alt text-indigo-600"></i> 
            Panel de control
        </h1>
        <div class="bg-white px-4 py-2 rounded-full shadow-sm text-sm text-gray-600 border">
            <i class="far fa-calendar-alt mr-2"></i> 15 de febrero, 2026
        </div>
    </div>

    <!-- Tarjetas de resumen (estadísticas rápidas) -->
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8" aria-label="Indicadores">
        <article class="bg-white rounded-2xl shadow-sm p-5 border-l-4 border-indigo-500 flex justify-between items-center hover:shadow transition">
            <div>
                <p class="text-sm text-gray-500 uppercase tracking-wider">Usuarios</p>
                <p class="text-3xl font-bold text-gray-800">248</p>
                <p class="text-xs text-green-600 mt-1"><i class="fas fa-arrow-up"></i> +12 esta semana</p>
            </div>
            <div class="h-12 w-12 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600 text-xl">
                <i class="fas fa-users"></i>
            </div>
        </article>
        <article class="bg-white rounded-2xl shadow-sm p-5 border-l-4 border-emerald-500 flex justify-between items-center hover:shadow transition">
            <div>
                <p class="text-sm text-gray-500 uppercase tracking-wider">Libros</p>
                <p class="text-3xl font-bold text-gray-800">1,453</p>
                <p class="text-xs text-emerald-600 mt-1"><i class="fas fa-book"></i> 23 títulos nuevos</p>
            </div>
            <div class="h-12 w-12 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 text-xl">
                <i class="fas fa-book-open"></i>
            </div>
        </article>
        <article class="bg-white rounded-2xl shadow-sm p-5 border-l-4 border-amber-500 flex justify-between items-center hover:shadow transition">
            <div>
                <p class="text-sm text-gray-500 uppercase tracking-wider">Préstamos activos</p>
                <p class="text-3xl font-bold text-gray-800">97</p>
                <p class="text-xs text-amber-600 mt-1"><i class="fas fa-clock"></i> 14 vencen hoy</p>
            </div>
            <div class="h-12 w-12 bg-amber-100 rounded-full flex items-center justify-center text-amber-600 text-xl">
                <i class="fas fa-hand-holding-heart"></i>
            </div>
        </article>
        <article class="bg-white rounded-2xl shadow-sm p-5 border-l-4 border-rose-500 flex justify-between items-center hover:shadow transition">
            <div>
                <p class="text-sm text-gray-500 uppercase tracking-wider">Multas pendientes</p>
                <p class="text-3xl font-bold text-gray-800">$1,280</p>
                <p class="text-xs text-rose-600 mt-1"><i class="fas fa-exclamation-triangle"></i> 8 usuarios</p>
            </div>
            <div class="h-12 w-12 bg-rose-100 rounded-full flex items-center justify-center text-rose-600 text-xl">
                <i class="fas fa-coins"></i>
            </div>
        </article>
    </section>

    <!-- tabla de ejemplo: últimos préstamos (simulación) -->
    <section class="bg-white rounded-2xl shadow-sm p-5 mb-8" aria-label="Listado de préstamos recientes">
        <div class="flex items-center justify-between mb-5">
            <h2 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
                <i class="fas fa-history text-indigo-600"></i> Últimos préstamos
            </h2>
            <a href="#" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium flex items-center gap-1">
                Ver todos <i class="fas fa-arrow-right text-xs"></i>
            </a>
        </div>
        <div class="overflow-x-auto -mx-5 px-5 pb-2">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-50 text-gray-600">
                    <tr>
                        <th scope="col" class="px-4 py-3 text-left font-medium">Usuario</th>
                        <th scope="col" class="px-4 py-3 text-left font-medium">Libro</th>
                        <th scope="col" class="px-4 py-3 text-left font-medium">Préstamo</th>
                        <th scope="col" class="px-4 py-3 text-left font-medium">Devolución</th>
                        <th scope="col" class="px-4 py-3 text-left font-medium">Estado</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr>
                        <td class="px-4 py-3 font-medium">Carmen López</td>
                        <td class="px-4 py-3">Cien años de soledad</td>
                        <td class="px-4 py-3">10/02/2026</td>
                        <td class="px-4 py-3">24/02/2026</td>
                        <td class="px-4 py-3"><span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs">En tiempo</span></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">Roberto Méndez</td>
                        <td class="px-4 py-3">El nombre del viento</td>
                        <td class="px-4 py-3">01/02/2026</td>
                        <td class="px-4 py-3">15/02/2026</td>
                        <td class="px-4 py-3"><span class="bg-red-100 text-red-700 px-2 py-1 rounded-full text-xs">Vencido</span></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">Lucía Fernández</td>
                        <td class="px-4 py-3">1984 (George Orwell)</td>
                        <td class="px-4 py-3">14/02/2026</td>
                        <td class="px-4 py-3">28/02/2026</td>
                        <td class="px-4 py-3"><span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-xs">Nuevo</span></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">Diego Ramírez</td>
                        <td class="px-4 py-3">Sapiens: de animales a dioses</td>
                        <td class="px-4 py-3">05/02/2026</td>
                        <td class="px-4 py-3">19/02/2026</td>
                        <td class="px-4 py-3"><span class="bg-amber-100 text-amber-700 px-2 py-1 rounded-full text-xs">Por vencer</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- espacio para más contenido (gráficos, etc) -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="bg-white p-5 rounded-2xl shadow-sm lg:col-span-2">
            <h3 class="font-medium text-gray-700 mb-3"><i class="fas fa-chart-line mr-2 text-indigo-500"></i> Préstamos últimos 7 días</h3>
            <div class="h-32 flex items-end gap-2">
                <!-- barras simuladas (meramente decorativas) -->
                <div class="w-1/7 bg-indigo-200 h-10 rounded-t"></div>
                <div class="w-1/7 bg-indigo-300 h-16 rounded-t"></div>
                <div class="w-1/7 bg-indigo-400 h-20 rounded-t"></div>
                <div class="w-1/7 bg-indigo-500 h-24 rounded-t"></div>
                <div class="w-1/7 bg-indigo-400 h-20 rounded-t"></div>
                <div class="w-1/7 bg-indigo-300 h-14 rounded-t"></div>
                <div class="w-1/7 bg-indigo-200 h-8 rounded-t"></div>
            </div>
            <p class="text-xs text-gray-400 mt-2">Gráfico ilustrativo · integración futura</p>
        </div>
        <div class="bg-white p-5 rounded-2xl shadow-sm">
            <h3 class="font-medium text-gray-700 mb-3"><i class="fas fa-tag mr-2 text-indigo-500"></i> Categorías populares</h3>
            <ul class="space-y-2 text-sm">
                <li class="flex justify-between"><span>Novela</span> <span class="font-semibold">43%</span></li>
                <li class="flex justify-between"><span>Ciencia ficción</span> <span class="font-semibold">22%</span></li>
                <li class="flex justify-between"><span>Historia</span> <span class="font-semibold">18%</span></li>
                <li class="flex justify-between"><span>Infantil</span> <span class="font-semibold">12%</span></li>
            </ul>
        </div>
    </div>
@endsection