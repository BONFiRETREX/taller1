<?php

namespace App\Http\Controllers;
use App\Models\Pqrs; //invocamos 
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PqrsController extends Controller
{
    //recibe datos del html  y muestra datos en la pagina, laravel recibe la peticion http  
     public function store (Request $request){
       $request ->validate([

            'nombres'=> 'required|string|max:100',
                'apellidos'=> 'required|string|max:100',
                'correo' => 'required|email',
                'tipo' => 'required|in:Queja,Peticion,Felicitacion',
                'acepto'=> 'accepted'

       ]);
      Pqrs::create([
    'nombre' => $request->nombres,
    'apellidos' => $request->apellidos,
    'correo' => $request->correo,
    'tipo' => $request->tipo,
    'mensaje' => $request->mensaje,
    'estado' => $request->has('acepto')
]);
       return redirect()->route('nosotros')->with('success', 'Mensaje guardado correctamente');
     }

}
