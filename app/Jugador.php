<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table='jugador';

    protected $fillable=['nombres','apellidos','rut','edad','genero','posicion','num_camiseta','status','id_equipo'];

    public function equipos()
    {
    	return $this->belongsTo('App\Equipos','id_equipo');
    }
}
