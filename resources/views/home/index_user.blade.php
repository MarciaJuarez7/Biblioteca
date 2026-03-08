@extends('layout.user')

@section('content')

<h1>Bienvenido a la Biblioteca, {{ auth()->user()->name }}!</h1>

@endsection