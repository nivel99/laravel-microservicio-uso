<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extrahospitalario extends Model
{
    public $fillable = [
        'idformulario',
        'fechauso',
        'nombrecompleto',
        'nombrepersonaatendida',
        'tipodocumento',
        'numerodocumento',
        'edad',
        'sexo',
        'etnia',
        'orientacionsexual',
        'identidadgenero',
        'condiciondiscapacidad',
        'poblacionvictima',
        'habitanzacalle',
        'poblacioncampesino',
        'direccion',
        'departamento',
        'ciudad',
        'nivelescolaridad',
        'estratosocioeconomico',
        'tiporegimenafiliacion',
        'idusuario',
    ];
    use HasFactory;
}
