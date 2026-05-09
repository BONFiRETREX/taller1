@extends('layouts.app')

@section('title', 'Registro')

@section('content')

<style>
    .auth-bg {
        background: linear-gradient(135deg, #111827, #1f2937, #ff7b00);
        border-radius: 20px;
        padding: 40px;
    }

    .auth-card {
        border: none;
        border-radius: 18px;
        overflow: hidden;
    }

    .auth-header {
        background: linear-gradient(45deg, #ff7b00, #ff3c00);
        color: white;
        padding: 25px;
    }

    .auth-btn {
        background: linear-gradient(45deg, #ff7b00, #ff3c00);
        border: none;
        font-weight: bold;
        transition: 0.3s;
    }

    .auth-btn:hover {
        transform: scale(1.03);
        box-shadow: 0 0 15px rgba(255, 123, 0, 0.7);
    }

    .form-control:focus {
        border-color: #ff7b00;
        box-shadow: 0 0 0 0.2rem rgba(255, 123, 0, 0.25);
    }
</style>

<div class="auth-bg">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow auth-card">
                <div class="auth-header text-center">
                    <h3 class="mb-0">Crear Cuenta</h3>
                    <p class="mb-0">Regístrate para acceder al sistema</p>
                </div>

                <div class="card-body p-4 bg-light">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required autofocus>

                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Correo electrónico</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>

                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Contraseña</label>
                            <input type="password" name="password" class="form-control" required>

                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirmar contraseña</label>
                            <input type="password" name="password_confirmation" class="form-control" required>

                            @error('password_confirmation')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn auth-btn text-white w-100">
                            Registrarse
                        </button>
                    </form>

                    <div class="text-center mt-3">
                        <a href="{{ route('login') }}" class="text-decoration-none">
                            ¿Ya tienes cuenta? Inicia sesión
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection