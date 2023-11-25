<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uso extends Model
{
    public $fillable = [
        'uso_fechaevento',
        'uso_nombrelugarevento',
        'uso_personaatenidadeventonombre',
        'uso_personaatenidadeventotipodocumento',
        'uso_personaatenidadeventonumerodocumento',
        'uso_personaatenidadeventoedad',
        'uso_personaatenidadeventosexo',
        'uso_personaatenidadeventoaseguradorsalud',
        'uso_datoseventonombrepersonautorizodea',
        'uso_datoseventotipodocumento',
        'uso_datoseventonumerodocumento',
        'uso_datoseventotelefono',
        'uso_datoseventohorainicioevento',
        'uso_datoseventohoraactivacioncadenasupervivencia',
        'uso_datoseventohorautlizaciondea',
        'uso_datoseventohoratrasladopersonaatendida',
        'uso_datosmediotransportenombreenccargado',
        'uso_datosmediotransportemediotransporte',
        'uso_datosmediotransporteempresaambulancia',
        'uso_datosmediotransporteobservaciones'
          ];

    use HasFactory;
}
