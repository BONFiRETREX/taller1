
@extends('layouts.app')

@section('title', 'Mensajes')
@section('content')
<div class="container mt-4">
    <h3 class="mb-4 text-center">Mensajes PQRS</h3>

    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Tipo</th>
                    <th>Mensaje</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->apellido }}</td>
                        <td>{{ $item->correo }}</td>
                       
                      <!-- EDITAR -->
                    <a href="{{ route('mensajes.edit', $item->id) }}" 
                       class="btn btn-warning btn-sm">
                        Editar
                    </a>

                    <!-- ELIMINAR -->
                    <form action="{{ route('mensajes.destroy', $item->id) }}" 
                          method="POST" 
                          style="display:inline;">
                        @csrf
                        @method('DELETE')
                            <button type=submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Seguro que deseas eliminar este mensaje?')">
                                Eliminar
                            </button>
                        </form>
                        
                        </td>


                        <td>
                            <span class="badge 
                                @if($item->tipo == 'Queja') bg-danger
                                @elseif($item->tipo == 'Peticion') bg-warning text-dark
                                @else bg-success
                                @endif">
                                {{ $item->tipo }}
                            </span>
                        </td>
                        <td class="text-start">{{ $item->mensaje }}</td>
                        <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>
                       
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">No hay mensajes registrados</td>
                    </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>
</div>
@endsection