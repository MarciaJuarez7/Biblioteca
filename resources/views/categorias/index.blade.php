@extends('layout.admin')

@section('content')


    <h1 class="text-2x1 font-bold mb-6">Categorias</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <table class="min-w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b">ID</th>
                    <th class="px-4 py-2 border-b">Nombre</th>
                <tr>
            </thead> 
            <tbody>
                @foreach($categorias as $categoria)
                <tr>
                    <td class="px-4 py-2 border-b">{{ $categoria->id }}</td>
                    <td class="px-4 py-2 border-b">{{ $categoria->nombre }}</td>
                </tr>
                @endforeach
            </tbody> 
        </table>
    </div>
</div>
@endsection