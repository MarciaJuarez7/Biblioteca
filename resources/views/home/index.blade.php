 @extends('layout.admin')

@section('content')
   <!-- Breadcrumb o título de página -->
<div class="mb-6 flex flex-wrap items-center justify-between gap-4">
    <h1 class="text-2xl sm:text-3xl font-semibold text-gray-800 flex items-center gap-2">
        <i class="fas fa-book text-indigo-600"></i> 
        Gestión de Libros
    </h1>
    <div class="bg-white px-4 py-2 rounded-full shadow-sm text-sm text-gray-600 border">
        <i class="far fa-calendar-alt mr-2"></i> 15 de febrero, 2026
    </div>
</div>

<!-- Tarjetas de resumen específicas para libros -->
<section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8" aria-label="Estadísticas de libros">
    <article class="bg-white rounded-2xl shadow-sm p-5 border-l-4 border-indigo-500 flex justify-between items-center hover:shadow transition">
        <div>
            <p class="text-sm text-gray-500 uppercase tracking-wider">Total de libros</p>
            <p class="text-3xl font-bold text-gray-800">5</p>
            <p class="text-xs text-green-600 mt-1"><i class="fas fa-arrow-up"></i> 5.2% desde el mes pasado</p>
        </div>
        <div class="h-12 w-12 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600 text-xl">
            <i class="fas fa-book"></i>
        </div>
    </article>
    <article class="bg-white rounded-2xl shadow-sm p-5 border-l-4 border-amber-500 flex justify-between items-center hover:shadow transition">
        <div>
            <p class="text-sm text-gray-500 uppercase tracking-wider">Libros prestados</p>
            <p class="text-3xl font-bold text-gray-800"> 1 </p>
            <p class="text-xs text-red-600 mt-1"><i class="fas fa-arrow-down"></i> 2.1% desde el mes pasado</p>
        </div>
        <div class="h-12 w-12 bg-amber-100 rounded-full flex items-center justify-center text-amber-600 text-xl">
            <i class="fas fa-hand-holding-heart"></i>
        </div>
    </article>
    <article class="bg-white rounded-2xl shadow-sm p-5 border-l-4 border-emerald-500 flex justify-between items-center hover:shadow transition">
        <div>
            <p class="text-sm text-gray-500 uppercase tracking-wider">Usuarios activos</p>
            <p class="text-3xl font-bold text-gray-800">3</p>
            <p class="text-xs text-green-600 mt-1"><i class="fas fa-arrow-up"></i> 12.7% desde el mes pasado</p>
        </div>
        <div class="h-12 w-12 bg-emerald-100 rounded-full flex items-center justify-center text-emerald-600 text-xl">
            <i class="fas fa-users"></i>
        </div>
    </article>
    <article class="bg-white rounded-2xl shadow-sm p-5 border-l-4 border-rose-500 flex justify-between items-center hover:shadow transition">
        <div>
            <p class="text-sm text-gray-500 uppercase tracking-wider">Devoluciones pendientes</p>
            <p class="text-3xl font-bold text-gray-800">1</p>
            <p class="text-xs text-green-600 mt-1"><i class="fas fa-arrow-up"></i> 3.4% desde ayer</p>
        </div>
        <div class="h-12 w-12 bg-rose-100 rounded-full flex items-center justify-center text-rose-600 text-xl">
            <i class="fas fa-clock"></i>
        </div>
    </article>
</section>

<!-- Botón Agregar Libro y subtítulo -->
<div class="flex items-center justify-between mb-5">
    <h2 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
        <i class="fas fa-list text-indigo-600"></i> Lista de Libros
    </h2>
    <a href="{{ route('libros.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md flex items-center">
         <i class="fas fa-plus"></i> Agregar libro
    </a>
</div>

<p class="text-sm text-gray-500 mb-4">Administra el catálogo de libros de la biblioteca</p>

<!-- Tabla de Libros -->
<section class="bg-white rounded-2xl shadow-sm p-5 mb-8" aria-label="Listado de libros">
    <div class="overflow-x-auto -mx-5 px-5 pb-2">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gray-50 text-gray-600">
                <tr>
                    <th scope="col" class="px-4 py-3 text-left font-medium">Título</th>
                    <th scope="col" class="px-4 py-3 text-left font-medium">Autor</th>
                    <th scope="col" class="px-4 py-3 text-left font-medium">ISBN</th>
                    <th scope="col" class="px-4 py-3 text-left font-medium">Categoría</th>
                    <th scope="col" class="px-4 py-3 text-left font-medium">Disponibilidad</th>
                    <th scope="col" class="px-4 py-3 text-left font-medium">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                 @foreach($libros as $libro)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                    <div class="font-medium text-gray-900">{{ $libro->nombre }}</div>
                    <td class="px-4 py-3">{{ $libro->autor }}</td>
                    <td class="px-4 py-3">{{ $libro->isbn }}</td>
                    <td class="px-4 py-3">{{ $libro->categoria->nombre }}</td>
                    <td class="px-4 py-3">
                       @if($libro->estatus == 0)
                       <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs">Disponible</span></td>
                    
                        @else
                    <span class="bg-red-100 text-red-700 px-2 py-1 rounded-full text-xs">Prestado</span>
                        
                    @endif
                    <td class="px-4 py-3">
                        <div class="flex gap-2">
                            <a href="{{ route('libros.edit',$libro->id) }}" class="text-blue-600 hover:text-blue-900 mr-3">Editar</a>
                            <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Eliminar</button>
                            </form>   
                        </div>
                    </td>
                </tr>
                  @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- Paginación -->
     <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
            {{ $libros->links() }}
        </div>
     <!-- 
        <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-200">
        <p class="text-sm text-gray-500">Mostrando 1 a 4 de 1 resultados</p>
        <div class="flex gap-2">
            <button onclick="cambiarPagina('anterior')" class="px-3 py-1 border rounded-md text-sm hover:bg-gray-50">«</button>
            <button onclick="cambiarPagina(1)" class="px-3 py-1 border rounded-md text-sm bg-indigo-50 text-indigo-600">1</button>
            <button onclick="cambiarPagina(2)" class="px-3 py-1 border rounded-md text-sm hover:bg-gray-50">2</button>
            <button onclick="cambiarPagina(3)" class="px-3 py-1 border rounded-md text-sm hover:bg-gray-50">3</button>
            <button onclick="cambiarPagina(4)" class="px-3 py-1 border rounded-md text-sm hover:bg-gray-50">4</button>
            <button onclick="cambiarPagina(5)" class="px-3 py-1 border rounded-md text-sm hover:bg-gray-50">5</button>
            <button onclick="cambiarPagina('siguiente')" class="px-3 py-1 border rounded-md text-sm hover:bg-gray-50">»</button>
        </div>
    </div> -->

</section>

<!-- Script con las funciones -->
<script>
    function agregarLibro() {
        alert('Funcionalidad para agregar nuevo libro');
        // Aquí puedes abrir un modal o redirigir a un formulario
    }

    function editarLibro(titulo) {
        alert(`Editando libro: ${titulo}`);
        // Aquí va la lógica de edición
    }

    function eliminarLibro(titulo) {
        if(confirm(`¿Estás seguro de eliminar "${titulo}"?`)) {
            alert(`Libro eliminado: ${titulo}`);
            // Aquí va la lógica de eliminación
        }
    }

    function cambiarPagina(pagina) {
        alert(`Cambiar a página: ${pagina}`);
        // Aquí va la lógica de paginación
    }
</script>
@endsection