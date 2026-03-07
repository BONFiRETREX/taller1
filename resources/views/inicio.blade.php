@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<style>
body{
    background: linear-gradient(135deg,#111,#1f1f1f);
    color:white;
}


.btn-auto{
    background: linear-gradient(45deg,#ff3c00,#ff8800);
    color:white;
    border:none;
    padding:12px 25px;
    font-weight:bold;
    border-radius:30px;
    transition:all 0.4s ease;
    box-shadow:0 0 10px rgba(255,100,0,0.6);
}

.btn-auto:hover{
    transform:scale(1.1) translateY(-3px);
    box-shadow:0 0 20px rgba(255,120,0,0.9);
    background: linear-gradient(45deg,#ff8800,#ff3c00);
}


h1{
    color:#ff8800;
    font-weight:bold;
}


.info-autos{
    background:#1a1a1a;
    padding:25px;
    border-radius:10px;
    margin-top:20px;
}
</style>

<h1 class="text-center mb-4">Bienvenidos a Nuestro Concesionario</h1>

<div class="row">
    <div class="col-md-6">

        <p>
            En nuestro concesionario encontrarás una amplia variedad de autos
            nuevos y usados de las mejores marcas. Ofrecemos vehículos de alta
            calidad y asesoría personalizada para ayudarte a elegir el auto ideal.
        </p>

        <a href="{{ route('menu') }}"  button class="btn-auto" >
            Ver Catálogo 🚗
        </button>
       </a>       
    </div>

    <div class="col-md-6">
        <img class="img-fluid rounded"
        src="https://images.unsplash.com/photo-1503376780353-7e6692767b70">
    </div>
</div>

<div class="info-autos">
 <h2>
    Nuestros vehículos
 </h2>

 <p>
    Explora nuestro catálogo de autos deportivos, familiares,
    camionetas y vehículos de lujo. Garantizamos calidad,
    seguridad y el mejor servicio para nuestros clientes.
 </p>

 <button class="btn-auto">
    Conocer más
 </button>

</div>

@endsection