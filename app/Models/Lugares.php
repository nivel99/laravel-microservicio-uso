<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugares extends Model
{
    public $fillable = [
        'nombrelugar',
        'direccion',
        'codigopostal',
        'imagen',
    ];
    use HasFactory;
}
