@extends('layouts.app')

@section('title','Solicitud de Vehículo')

@section('content')

<div class="container">
    <h3 class="mb-4">Solicitud de Vehículo</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('autos.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" name="apellido" class="form-control" placeholder="Apellido">
            </div>
        </div>

        <input type="email" name="correo" class="form-control mb-3" placeholder="Correo">
        <input type="text" name="telefono" class="form-control mb-3" placeholder="Teléfono">

        <hr>

        <h5>Datos del vehículo</h5>

        <input type="text" name="vehiculo_interes" class="form-control mb-3" placeholder="Vehículo de interés">
        <input type="text" name="marca" class="form-control mb-3" placeholder="Marca">
        <input type="text" name="modelo" class="form-control mb-3" placeholder="Modelo">
        <input type="number" name="anio" class="form-control mb-3" placeholder="Año">

        <select name="tipo_pago" class="form-select mb-3">
            <option value="Contado">Contado</option>
            <option value="Financiado">Financiado</option>
        </select>

        <input type="number" name="presupuesto" class="form-control mb-3" placeholder="Presupuesto">

        <textarea name="mensaje" class="form-control mb-3" placeholder="Comentarios"></textarea>

        <button class="btn btn-dark w-100">Enviar solicitud</button>
    </form>
</div>

@endsection