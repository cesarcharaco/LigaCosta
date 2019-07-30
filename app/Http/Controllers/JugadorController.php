<?php

namespace App\Http\Controllers;

use App\Jugador;
use Illuminate\Http\Request;
use App\Equipos;
class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores=Jugador::all();

        return view('jugadores.index',compact('jugadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos=Equipos::all();

        return view('jugadores.create',compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function show(Jugador $jugador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jugador=Jugador::find($id);

        $equipos=Equipos::all();

        return view('jugadores.edit',compact('jugador','equipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jugador $jugador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }
}
