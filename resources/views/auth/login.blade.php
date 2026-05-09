@extends('layouts.app')

@section('title', 'Login')

@section('content')

<style>
    .login-bg {
        background: linear-gradient(135deg, #111827, #1f2937, #ff7b00);
        border-radius: 20px;
        padding: 40px;
    }

    .login-card {
        border: none;
        border-radius: 18px;
        overflow: hidden;
    }

    .login-header {
        background: linear-gradient(45deg, #ff7b00, #ff3c00);
        color: white;
        padding: 25px;
    }

    .login-btn {
        background: linear-gradient(45deg, #ff7b00, #ff3c00);
        border: none;
        font-weight: bold;
        transition: 0.3s;
    }

    .login-btn:hover {
        transform: scale(1.03);
        box-shadow: 0 0 15px rgba(255, 123, 0, 0.7);
    }

    .form-control:focus {
        border-color: #ff7b00;
        box-shadow: 0 0 0 0.2rem rgba(255, 123, 0, 0.25);
    }
</style>

<div class="login-bg">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow login-card">
                <div class="login-header text-center">
                    <h3 class="mb-0">Iniciar Sesión</h3>
                    <p class="mb-0">Accede a tu cuenta</p>
                </div>

                <div class="card-body p-4 bg-light">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Correo electrónico</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>

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

                        <div class="form-check mb-3">
                            <input type="checkbox" name="remember" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">
                                Recordarme
                            </label>
                        </div>

                        <button type="submit" class="btn login-btn text-white w-100">
                            Entrar
                        </button>
                    </form>

                    <div class="text-center mt-3">
                        <a href="{{ route('register') }}" class="text-decoration-none">
                            Crear cuenta nueva
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection