@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')

<style>

body{
    background:#111;
    color:white;
}


.historia{
    background:#1c1c1c;
    padding:40px;
    border-radius:10px;
    margin-bottom:40px;
}


h2{
    color:#ff7b00;
    font-weight:bold;
}


.card{
    background:#1a1a1a;
    border:none;
    border-radius:10px;
}


.form-control, .form-select{
    background:#2b2b2b;
    border:none;
    color:white;
}

.form-control:focus{
    background:#333;
    color:white;
}


.btn-dark{
    background:linear-gradient(45deg,#ff7b00,#ff3c00);
    border:none;
    font-weight:bold;
    transition:0.3s;
}

.btn-dark:hover{
    transform:scale(1.05);
    box-shadow:0 0 15px #ff7b00;
}

</style>

<h2 class="text-center mb-4">Sobre Nuestro Concesionario</h2>

<div class="historia">

<p class="text-center">
    Nuestro concesionario nació con el objetivo de ofrecer a nuestros clientes
    vehículos de alta calidad, confianza y un excelente servicio. Desde nuestros
    inicios hemos trabajado para brindar las mejores marcas del mercado y
    acompañar a cada cliente en la elección de su vehículo ideal.
</p>

<p class="text-center">
    Contamos con varios años de trayectoria en el sector automotriz,
    ofreciendo autos nuevos y seminuevos con garantía y respaldo.
    Nuestro equipo está conformado por profesionales apasionados por
    los vehículos y comprometidos con brindar una experiencia de compra
    segura, transparente y satisfactoria.
</p>

<p class="text-center">
    Hoy seguimos creciendo y mejorando nuestros servicios,
    incorporando nuevas tecnologías, modelos modernos y
    planes de financiamiento accesibles para todos nuestros clientes.
</p>

</div>

<hr class="my-5">

<h3 class="text-center mb-4">Formulario de PQRS</h3>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow p-4">

            <form action="{{ route('pqrs.store') }}" method="POST">
                 @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Nombres</label>
                       <input type="text" name="nombres" class="form-control" value="{{ old('nombres') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Apellidos</label>
                        <input type="text" name="apellidos" class="form-control" value="{{ old('apellidos') }}">
                    </div>
                </div> 

                <div class="mb-3">
                    <label>Correo electrónico</label>
                    
                    <input type="email" name="correo" class="form-control" value="{{ old('correo') }}">
                </div>

                <div class="mb-3">
                    <label>Tipo de solicitud</label>
                          <select name="tipo" class="form-select">
    <option value="Queja">Queja</option>
    <option value="Peticion">Petición</option>
    <option value="Felicitacion">Felicitación</option>
</select>
                </div>

                <div class="mb-3">
                    <label>Mensaje</label>
                    <textarea name="mensaje" class="form-control" rows="4"></textarea>
                </div>
                

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="acepto">
                    <label class="form-check-label">
                        Acepto términos y condiciones
                    </label>
                </div>

                <button type="submit" class="btn btn-dark w-100">
                    Enviar
                </button>

            </form>

            <small class="text-muted">
                Este formulario es únicamente informativo.
            </small>

        </div>
    </div>
</div>

@endsection