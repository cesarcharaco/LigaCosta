<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    protected $table='equipos';

    protected $fillable=['nombre','lema','liga','nombre_logo','url_logo'];

    public function coachs()
    {
    	return $this->hasMany('App\Coach','id_equipo','id');
    }

    public function jugadores()
    {
    	return $this->hasMany('App\Jugador','id_equipo','id');
    }
}
