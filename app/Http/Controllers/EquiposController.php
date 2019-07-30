<?php

namespace App\Http\Controllers;

use App\Equipos;
use Illuminate\Http\Request;
use App\Http\Requests\EquiposRequest;
class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos=Equipos::all();

        return view('equipos.index',compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquiposRequest $request)
    {
        /*if (isset($request->url_logo)) {
            
        }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function show(Equipos $equipos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo=Equipos::find($id);

        return view('equipos.edit',compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }
}
