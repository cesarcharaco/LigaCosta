<?php

namespace App\Http\Controllers;

use App\Coach;
use Illuminate\Http\Request;
use App\Equipos;
use App\Http\Requests\CoachsRequest;
class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coachs=Coach::all();

        return view('coachs.index',compact('coachs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos=Equipos::all();
        $coachs=Coach::all();
        return view('coachs.create',compact('equipos','coachs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoachsRequest $request)
    {
        //dd($request->all());

        $coach=new Coach();
        $coach->nombres=$request->nombres;
        $coach->apellidos=$request->apellidos;
        $coach->rut=$request->rut;
        $coach->edad=$request->edad;
        $coach->id_equipo=$request->id_equipo;
        $coach->save();

        flash('<i class="icon-circle-check"></i> Coach registrado exitosamente!')->success()->important();
        return redirect()->to('coachs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function show(Coach $coach)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coach=Coach::find($id);
        $equipos=Equipos::all();
        $coachs=Coach::all();
        return view('coachs.edit',compact('coach','equipos','coachs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coach  $coach
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }
}
