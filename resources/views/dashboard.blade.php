@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="text-center">
    <h1>Bienvenido, {{ Auth::user()->name }}</h1>

    <p class="mt-3">
        Has iniciado sesión correctamente.
    </p>

    <a href="{{ route('mensajes') }}" class="btn btn-primary">
        Ver mensajes PQRS
    </a>
</div>
@endsection