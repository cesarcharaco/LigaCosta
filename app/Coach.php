<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $table='coach';

    protected $fillable=['nombres','apellidos','rut','edad','id_equipo'];


    public function equipos()
    {
    	return $this->belongsTo('App\Equipos','id_equipo');
    }
}
