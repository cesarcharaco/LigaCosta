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
                    <li class="active">Registrar</li>
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
                        <strong>Registro de jugador <small>Todos los campos (<b style="color: red;">*</b>) son requeridos.</small></strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="{{ route('jugadores.store') }}" method="post" class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="nombres" class=" form-control-label"><b style="color: red;">*</b></label> Nombres</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="nombres" name="nombres" placeholder="Ingrese los nombres..." class="form-control" value="{{ old('nombres') }}" ></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="apellidos" class=" form-control-label"><b style="color: red;">*</b></label> Apellidos</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="apellidos" name="apellidos" placeholder="Ingrese los apellidos..." class="form-control" value="{{ old('apellidos') }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="rut" class=" form-control-label"><b style="color: red;">*</b></label> RUT</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="rut" name="rut" placeholder="Ingrese el rut..." class="form-control" value="{{ old('rut') }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="edad" class=" form-control-label"><b style="color: red;">*</b></label> Edad</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="number" id="edad" name="edad" placeholder="Ingrese la edad..." class="form-control" min="10" max="25" value="{{ old('edad') }}">
                                    <small>La edad debe ser mayor de 10 y menor que 25</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="genero" class=" form-control-label"><b style="color: red;">*</b></label> Género</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="genero" id="genero" class="form-control">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="posicion" class=" form-control-label"><b style="color: red;">*</b></label> Posición</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="posicion" name="posicion" placeholder="Ingrese la posición..." class="form-control" value="{{ old('posicion') }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="num_camiseta" class=" form-control-label"><b style="color: red;">*</b></label> Nro. de Camiseta</label></div>
                                <div class="col-12 col-md-9"><input type="number" id="num_camiseta" name="num_camiseta" placeholder="Ingrese el número de la camiseta..." class="form-control" value="{{ old('num_camiseta') }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="equipos" class=" form-control-label"><b style="color: red;">*</b></label> Equipos</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="id_equipo" id="id_equipo" class="form-control">
                                        @foreach($equipos as $key)
                                        <option value="{{ $key->id }}">{{ $key->nombre }} - Liga: {{ $key->liga }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                  <i class="fa fa-dot-circle-o"></i> Registrar
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                  <i class="fa fa-ban"></i> Cancelar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection

