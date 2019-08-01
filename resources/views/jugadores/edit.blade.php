@extends('layouts.app')


@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Jugadores</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{ route('equipos.index') }}">Listado</a></li>
                    <li class="active">Modificar datos</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
            @include('flash::message')
             @if (count($errors) > 0)
                <div class="alert alert-danger">
                @include('flash::message')
                <p>Corrige los siguientes errores:</p>
                <ul>
                    @foreach ($errors->all() as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
                </div>
            @endif
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Modificar de jugador</strong>
                    </div>
                    <div class="card-body card-block">
                        {!! Form::open(['route' => ['jugadores.update',$jugador->id], 'method' => 'PUT', 'name' => 'form', 'id' => 'form','data-parsley-validate', 'class'=>'form-horizontal']) !!}
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="nombres" class=" form-control-label">Nombres</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="nombres" name="nombres" placeholder="Ingrese los nombres..." class="form-control" value="{{ $jugador->nombres }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="apellidos" class=" form-control-label">Apellidos</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="apellidos" name="apellidos" placeholder="Ingrese los apellidos..." class="form-control" value="{{ $jugador->apellidos }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="rut" class=" form-control-label">RUT</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="rut" name="rut" placeholder="Ingrese el rut..." class="form-control" value="{{ $jugador->rut }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="edad" class=" form-control-label">Edad</label></div>
                                <div class="col-12 col-md-9"><input type="number" id="edad" name="edad" placeholder="Ingrese la edad..." class="form-control" value="{{ $jugador->edad }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="genero" class=" form-control-label">Género</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="genero" id="genero" class="form-control">
                                        <option value="Masculino" @if($jugador->genero=="Masculino") selected="selected" @endif>Masculino</option>
                                        <option value="Femenino" @if($jugador->genero=="Femenino") selected="selected" @endif>Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="posicion" class=" form-control-label">Posición</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="posicion" name="posicion" placeholder="Ingrese la posición..." class="form-control" value="{{ $jugador->posicion }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="num_camiseta" class=" form-control-label">Nro. de Camiseta</label></div>
                                <div class="col-12 col-md-9"><input type="number" id="num_camiseta" name="num_camiseta" placeholder="Ingrese el número de la camiseta..." class="form-control" value="{{ $jugador->num_camiseta }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="liga" class=" form-control-label">Equipos</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="liga" id="liga" class="form-control">
                                        @foreach($equipos as $key)
                                        <option value="{{ $key->id }}">{{ $key->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                  <i class="fa fa-dot-circle-o"></i> Modificar
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                  <i class="fa fa-ban"></i> Cancelar
                                </button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection

