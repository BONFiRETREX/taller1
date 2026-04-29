@extends('layouts.app')

@section('title','Editar Mensaje')

@section('content')

<h2 class="text-center mb-4">Editar mensaje</h2>

@if($errors->any())
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<div class="card shadow p-4">

<form action="{{ route('mensajes.update',$mensaje->id) }}"
method="POST">

@csrf
@method('PUT')

<div class="row">

<div class="col-md-6 mb-3">
<label>Nombres</label>
<input type="text"

name="nombres"
class="form-control"
value="{{ $mensaje->nombres }}">
</div>

<div class="col-md-6 mb-3">
<label>Apellidos</label>
<input type="text" name="apellidos" class="form-control" value="{{ $mensaje->apellidos }}">
</div>

</div>

<div class="mb-3">
<label>Correo</label>
<input type="email" name="correo" class="form-control" value="{{ $mensaje->correo }}">
</div>

<div class="mb-3">
<label>Tipo</label>

<select name="tipo" class="form-select">

<option value="Queja">Queja</option>
<option value="Petición">Petición</option>
<option value="Felicitación">Felicitación</option>

</select>

</div>

<div class="mb-3">
<label>Mensaje</label>

<textarea name="mensaje"
class="form-control"
rows="4">

{{ $mensaje->mensaje }}

</textarea>

</div>

<div class="form-check mb-3">

<input type="checkbox"
name="acepto"
class="form-check-input"

{{ $mensaje->acepto ? 'checked' : '' }}

>

<label>Acepto términos</label>

</div>

<button class="btn btn-primary w-100">

Actualizar

</button>

</form>

</div>

@endsection