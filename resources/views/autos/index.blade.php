@extends('layouts.app')

@section('title','Solicitudes')

@section('content')

<div class="container">
    <h3 class="mb-4">Solicitudes de Vehículos</h3>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Vehículo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Pago</th>
                <th>Presupuesto</th>
            </tr>
        </thead>

        <tbody>
            @foreach($solicitudes as $i => $s)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $s->nombre }} {{ $s->apellido }}</td>
                    <td>{{ $s->correo }}</td>
                    <td>{{ $s->vehiculo_interes }}</td>
                    <td>{{ $s->marca }}</td>
                    <td>{{ $s->modelo }}</td>
                    <td>{{ $s->tipo_pago }}</td>
                    <td>${{ $s->presupuesto }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection