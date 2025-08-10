<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $primaryKey = 'idCita';
    protected $fillable = [
        'idCita',
        'idEventoFK',
        'idClienteFK',
        'fechaCita',
        'horaCita',
        'lugar',
        'comentario',
    ];
}
