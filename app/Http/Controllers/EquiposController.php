<?php

namespace App\Http\Controllers;

use App\Equipos;
use Illuminate\Http\Request;
use App\Http\Requests\RequestEquipos;
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
    public function store(RequestEquipos $request)
    {
        
        if ($request->hasfile('logo')) {
            $this->validate($request, [
            'logo' => 'required',
            'logo.*' => 'mimes:jpeg,jpg,png' 
            ]);
            $name=$this->random_string()."-".$request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path().'/logos/', $name);  
            $url_logo ='logos/'.$name;

            $equipo=new Equipos();
            $equipo->nombre=$request->nombre;
            $equipo->lema=$request->lema;
            $equipo->nombre_logo=$name;
            $equipo->url_logo=$url_logo;
            $equipo->save();

            flash('<i class="icon-circle-check"></i> Equipo registrado exitosamente!')->success()->important();
            return redirect()->to('equipos');
        }else{
            $equipo=new Equipos();
            $equipo->nombre=$request->nombre;
            $equipo->lema=$request->lema;
            $equipo->save();

            flash('<i class="icon-circle-check"></i> Equipo registrado exitosamente!')->success()->important();
            return redirect()->to('equipos');
        }
    }

    protected function random_string()
    {
        $key = '';
        $keys = array_merge( range('a','z'), range(0,9) );

        for($i=0; $i<10; $i++)
        {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
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
        $buscar=Equipos::where('nombre',$request->nombre)->where('id','<>',$id)->first();
        
        if (!empty($buscar)) {
            flash('<i class="icon-circle-check"></i> El nombre del equipo ya se encuentra en uso!')->warning()->important();
            return redirect()->back();
        } else {
            
        
        if ($request->hasfile('logo')) {
            $this->validate($request, [
            'logo' => 'required',
            'logo.*' => 'mimes:jpeg,jpg,png' 
            ]);
            $name=$this->random_string()."-".$request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path().'/logos/', $name);  
            $url_logo ='logos/'.$name;

            $equipo= Equipos::find($id);
            $equipo->nombre=$request->nombre;
            $equipo->lema=$request->lema;
            $equipo->nombre_logo=$name;
            unlink(public_path().'/'.$equipo->url_logo);
            $equipo->url_logo=$url_logo;
            $equipo->save();
            flash('<i class="icon-circle-check"></i> Equipo actualizado exitosamente!')->success()->important();
            return redirect()->to('equipos');
        }else{
            $equipo= Equipos::find($id);
            $equipo->nombre=$request->nombre;
            $equipo->lema=$request->lema;
            $equipo->save();

            flash('<i class="icon-circle-check"></i> Equipo actualizado exitosamente!')->success()->important();
            return redirect()->to('equipos');
        }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
         $equipo=Equipos::find($request->id_equipo);
         $logo=$equipo->url_logo;
        if ($equipo->delete()) {
            unlink(public_path().'/'.$logo);
            flash('Registro eliminado exitosamente!', 'success');
                return redirect()->back();
        } else {
            flash('No se pudo eliminar el registro, posiblemente esté siendo usada su información en otra área!', 'error');
                return redirect()->back();
        } 
    }
}
