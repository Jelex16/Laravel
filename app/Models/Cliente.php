<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Cliente extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'Clientes';

    protected $fillable = [
        'name',
        'Apellidos',
        'Telefono',
        'email',
        'Direccion',
        'Identificacion',
        'Ciudad',
        'CP',
    ];

    public $timestamps = false;
}
