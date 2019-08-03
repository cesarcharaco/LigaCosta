<?php

namespace App\Http\Controllers;

use App\Jugador;
use Illuminate\Http\Request;
use App\Equipos;
use App\Http\Requests\JugadorRequest;
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
    public function store(JugadorRequest $request)
    {
        //dd($request->id_equipo);
        $buscar=Equipos::find($request->id_equipo);
        //dd($buscar);
        if ($request->genero=="Masculino" && $buscar->liga=="Football Tackle") {
        $jugador=new Jugador();
        $jugador->nombres=$request->nombres;
        $jugador->apellidos=$request->apellidos;
        $jugador->rut=$request->rut;
        $jugador->edad=$request->edad;
        $jugador->genero=$request->genero;
        $jugador->posicion=$request->posicion;
        $jugador->num_camiseta=$request->num_camiseta;
        $jugador->id_equipo=$request->id_equipo;
        $jugador->save();

        flash('<i class="icon-circle-check"></i> Jugador registrado exitosamente!')->success()->important();
        return redirect()->to('jugadores');    
        } elseif($request->genero=="Femenino" && $buscar->liga=="Football Flag") {
            $jugador=new Jugador();
        $jugador->nombres=$request->nombres;
        $jugador->apellidos=$request->apellidos;
        $jugador->rut=$request->rut;
        $jugador->edad=$request->edad;
        $jugador->genero=$request->genero;
        $jugador->posicion=$request->posicion;
        $jugador->num_camiseta=$request->num_camiseta;
        $jugador->id_equipo=$request->id_equipo;
        $jugador->save();

        flash('<i class="icon-circle-check"></i> Jugador registrado exitosamente!')->success()->important();
        return redirect()->to('jugadores');    
        }else{
            flash('<i class="icon-circle-check"></i> Si el género es Masculino debe seleccionar un equipo de liga Football Tackle y si por el contrario es Femenino debe seleccionar un equipo de Liga Football Flag!')->warning()->important();
        return redirect()->back();    
        }
        
        
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
    public function update(Request $request,$id)
    {
        //dd($request->id_equipo);
        $buscarut=Jugador::where('rut',$request->rut)->where('id','<>',$id)->first();

        if (!empty($buscarut)) {
            flash('<i class="icon-circle-check"></i> RUT ya está en uso!')->warning()->important();
            return redirect()->back();                
        } else {
            $buscarnumc=Jugador::where('num_camiseta',$request->num_camiseta)->where('id','<>',$id)->first();
            if (!empty($buscarnumc)) {
                flash('<i class="icon-circle-check"></i>El NÚMERO DE CAMISETA ya está en uso!')->warning()->important();
                return redirect()->back(); 
            } else {
                $buscar=Equipos::find($request->id_equipo);
                //dd($buscar);
                if ($request->genero=="Masculino" && $buscar->liga=="Football Tackle") {
                $jugador=Jugador::find($id);
                $jugador->nombres=$request->nombres;
                $jugador->apellidos=$request->apellidos;
                $jugador->rut=$request->rut;
                $jugador->edad=$request->edad;
                $jugador->genero=$request->genero;
                $jugador->posicion=$request->posicion;
                $jugador->num_camiseta=$request->num_camiseta;
                $jugador->id_equipo=$request->id_equipo;
                $jugador->save();

                flash('<i class="icon-circle-check"></i> Jugador modificado exitosamente!')->success()->important();
                return redirect()->to('jugadores');    
                } elseif($request->genero=="Femenino" && $buscar->liga=="Football Flag") {
                $jugador=Jugador::find($id);
                $jugador->nombres=$request->nombres;
                $jugador->apellidos=$request->apellidos;
                $jugador->rut=$request->rut;
                $jugador->edad=$request->edad;
                $jugador->genero=$request->genero;
                $jugador->posicion=$request->posicion;
                $jugador->num_camiseta=$request->num_camiseta;
                $jugador->id_equipo=$request->id_equipo;
                $jugador->save();

                flash('<i class="icon-circle-check"></i> Jugador modificado exitosamente!')->success()->important();
                return redirect()->to('jugadores');    
                }else{
                    flash('<i class="icon-circle-check"></i> Si el género es Masculino debe seleccionar un equipo de liga Football Tackle y si por el contrario es Femenino debe seleccionar un equipo de Liga Football Flag!')->warning()->important();
                return redirect()->back();    
                }        
            }
            
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jugador  $jugador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $jugador=Jugador::find($request->id_jugador);
        if ($jugador->delete()) {
            
            flash('Registro eliminado exitosamente!', 'success');
                return redirect()->back();
        } else {
            flash('No se pudo eliminar el registro, posiblemente esté siendo usada su información en otra área!', 'error');
                return redirect()->back();
        } 
    }
}
