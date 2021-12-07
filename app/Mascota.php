<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    //
    protected $table='mascotas';

    protected $primarykey='id_mascota';

    public $incrementing=true;

    public $timestamps=true;

    public $fillable=[
        'id_mascota',
        'nombre',
        'genero',
        'peso',
        'id_propietario',
        'id_especie',
        'id_raza'

    ];
}
