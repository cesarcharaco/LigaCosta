<?php

function cuantos_equipos()
{
	$cuantos=0;
	
		$search=App\Equipos::all();
	
	if (!empty($search)) {
		$cuantos=count($search);
	}

	return $cuantos;
}

function cuantos_coachs()
{
	$cuantos=0;
	
		$search=App\Coach::all();
	
	if (!empty($search)) {
		$cuantos=count($search);
	}

	return $cuantos;
}

function cuantos_ftackle()
{
	$cuantos=0;
	
		$search=App\Jugador::where('genero','Masculino')->get();
	
	if (!empty($search)) {
		$cuantos=count($search);
	}

	return $cuantos;
}

function cuantos_fflag()
{
	$cuantos=0;
	
		$search=App\Jugador::where('genero','Femenino')->get();
	
	if (!empty($search)) {
		$cuantos=count($search);
	}

	return $cuantos;
}