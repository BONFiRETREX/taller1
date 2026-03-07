@extends('layouts.app')

@section('title', 'Catálogo')

@section('content')


<style>
    body{
    background: linear-gradient(135deg,#111,#1f1f1f);
    color:white;
}
</style>


<h2 class="text-center mb-4">Catálogo de Autos</h2>

<div class="row">
    
    <div class="col-md-4">
        <div class="card p-3">
            <img class="img-fluid rounded mb-3"
            src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d">
            
            <h5>Toyota</h5>
            <p>
                Autos reconocidos por su confiabilidad, eficiencia y
                excelente rendimiento para uso familiar y diario.
            </p>

            <button class="btn btn-primary">Ver modelos</button>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <img class="img-fluid rounded mb-3"
            src="https://bieninformado.mx/wp-content/uploads/2024/03/bmw-m-series-seo-overview-ms-04.jpg">

            <h5>BMW</h5>
            <p>
                Vehículos de lujo con tecnología avanzada,
                alto rendimiento y diseño deportivo.
            </p>

            <button class="btn btn-primary" > 
              <a  href="https://youtu.be/2Qxt3IXpqVc?si=Klxwf7WQLzfxK0Gy " class="btn btn-primary text-white" target="_blank"> Aqui puedes ver nuestro modelos de la marca BMW </a>

            </button>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <img class="img-fluid rounded mb-3"
            src="https://images.unsplash.com/photo-1503376780353-7e6692767b70">

            <h5>Chevrolet</h5>
            <p>
                Autos versátiles con gran relación calidad-precio
                ideales para ciudad y carretera.
            </p>

            <button class="btn btn-primary">Ver modelos</button>
        </div>
    </div>
</div>

@endsection
