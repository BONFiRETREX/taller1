<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PaginaController extends Controller
{
    //envia a la vista inicio con una ruta 
public function inicio(){
 return view('inicio');
}
public function menu(){
 return view('menu');
}

public function nosotros(){
 return view('nosotros');
}
public function contacto(){
 return view('contacto');
}
}
