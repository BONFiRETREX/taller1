<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SolicitudAuto;

class SolicitudAutoController extends Controller
{
public function index()
{
    $solicitudes = SolicitudAuto::latest()->get();
    return view('autos.index', compact('solicitudes'));
}

public function create()
{
    return view('autos.create');
}

public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'correo' => 'required|email',
        'telefono' => 'required',
        'vehiculo_interes' => 'required',
        'marca' => 'required',
        'modelo' => 'required',
        'anio' => 'required|numeric',
        'tipo_pago' => 'required'
    ]);

    SolicitudAuto::create($request->all());

    return redirect()->back()->with('success', 'Solicitud enviada correctamente');
}
    
}
