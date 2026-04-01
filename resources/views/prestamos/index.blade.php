@extends('layout.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Prestamos</h1>

     @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <a href="{{ route('prestamos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear Prestamo</a>

    <div class="bg-white shadow-md rounded-lg p-6 mt-4">
        <table class="min-w-full table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2 border-b">ID</th>
                <th class="px-4 py-2 border-b">Libro</th>
                <th class="px-4 py-2 border-b">Usuario</th>
                <th class="px-4 py-2 border-b">Fecha del Prestamo</th>
                <th class="px-4 py-2 border-b">Estatus</th>
                <th class="px-4 py-2 border-b">Fecha de Entrega</th>
                <th class="px-4 py-2 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prestamos as $prestamo)
                <tr>
                    <td class="px-4 py-2 border-b text-center">{{ $prestamo->id }}</td>
                    <td class="px-4 py-2 border-b text-center">{{ $prestamo->libro->nombre }}</td>
                    <td class="px-4 py-2 border-b text-center">{{ $prestamo->usuario->name }}</td>
                    <td class="px-4 py-2 border-b text-center">{{ $prestamo->created_at->format('Y-m-d') }}</td>
                    <td class="px-4 py-2 border-b text-center">
                        @if($prestamo->estado == 'pendiente')
                            <span class="text-red-500 font-bold">Pendiente</span>
                        @else
                            <span class="text-green-500 font-bold">Entregado</span>
                        @endif
                    </td>
                     <td class="px-6 py-4 whitespace-nowrap text-center">{{ $prestamo->fecha_entrega ? $prestamo->fecha_entrega : '' }}

                     </td>
                    <td class="px-4 py-2 border-b text-center">
                        <!-- Aquí puedes agregar botones para editar o eliminar el préstamo -->
                         @if($prestamo->estado == 'pendiente')
                        <a href="{{ route('prestamos.entregar', $prestamo->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded">Entregar</a>               
                    @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
@endsection