@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <div class="text-center">
        <h1>Bienvenido al sistema</h1>
        <p>Proyecto Laravel con autenticación.</p>

        @guest
            <a href="{{ route('login') }}" class="btn btn-primary">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="btn btn-success">Registrarse</a>
        @endguest

        @auth
            <a href="{{ route('dashboard') }}" class="btn btn-dark">Ir al Dashboard</a>
        @endauth
    </div>
@endsection