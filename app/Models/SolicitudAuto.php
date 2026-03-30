<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolicitudAuto extends Model
{
    //
    protected $table = 'solicitudes_autos';
    protected $fillable = [
    'nombre','apellido','correo','telefono',
    'vehiculo_interes','marca','modelo','anio',
    'tipo_pago','presupuesto','mensaje'
];
}
