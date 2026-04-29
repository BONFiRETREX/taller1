<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pqrs;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 public function index()
{
    $items = Pqrs::all(); // o paginate()
    return view('mensajes', compact('items'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
public function edit($id)
{
    $mensaje = Pqrs::findOrFail($id);
    return view('editar_mensajes', compact('mensaje'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
{
    $mensaje = Pqrs::findOrFail($id);
    $mensaje->delete();

    return redirect()->route('mensajes')->with('success', 'Eliminado');
}

}
