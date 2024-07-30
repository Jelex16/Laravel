<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    use HasFactory;

    protected $table = 'Secretaria';

    protected $fillable = [
        'name',
        'Apellidos',
        'NumeroCelular',
        'email',
        'Direccion',
        'Ciudad',
        'CP',
        'FechaContrato',
        'NumeroSeguro',
        'Turno',
        'NumeroCuenta',
        'SueldoBase',
    ];

    public $timestamps = false;
}
