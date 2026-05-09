<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use Illuminate\Http\Request;

class PqrsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'correo' => 'required|email|max:255',
            'tipo' => 'required|in:Queja,Peticion,Felicitacion',
            'mensaje' => 'required|string|max:1000',
            'acepto' => 'accepted',
        ]);

        Pqrs::create([
            'nombre' => $request->nombres,
            'apellidos' => $request->apellidos,
            'correo' => $request->correo,
            'tipo' => $request->tipo,
            'mensaje' => $request->mensaje,
            'estado' => $request->boolean('acepto'),
        ]);

        return redirect()->route('nosotros')->with('success', 'Mensaje PQRS enviado correctamente ✅');
    }

    public function index()
    {
        $pqrs = Pqrs::latest()->get();

        return view('mensajes', compact('pqrs'));
    }

    public function edit($id)
    {
        $mensaje = Pqrs::findOrFail($id);

        return view('editar_mensajes', compact('mensaje'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombres' => 'required|string|max:100',
            'apellidos' => 'required|string|max:100',
            'correo' => 'required|email|max:255',
            'tipo' => 'required|in:Queja,Peticion,Felicitacion',
            'mensaje' => 'required|string|max:1000',
            'acepto' => 'accepted',
        ]);

        $mensaje = Pqrs::findOrFail($id);

        $mensaje->update([
            'nombre' => $request->nombres,
            'apellidos' => $request->apellidos,
            'correo' => $request->correo,
            'tipo' => $request->tipo,
            'mensaje' => $request->mensaje,
            'estado' => $request->boolean('acepto'),
        ]);

        return redirect()->route('mensajes')->with('success', 'Mensaje actualizado correctamente ✅');
    }

    public function destroy($id)
    {
        $mensaje = Pqrs::findOrFail($id);
        $mensaje->delete();

        return redirect()->route('mensajes')->with('success', 'Mensaje eliminado correctamente ✅');
    }
}