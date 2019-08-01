@extends('layouts.app')


@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Coachs</h1>
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
                        <strong>Modificar coach</strong>
                    </div>
                    <div class="card-body card-block">
                        {!! Form::open(['route' => ['jugadores.update',$coach->id], 'method' => 'PUT', 'name' => 'form', 'id' => 'form','data-parsley-validate', 'class'=>'form-horizontal']) !!}
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="nombres" class=" form-control-label">Nombres</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="nombres" name="nombres" placeholder="Ingrese los nombres..." class="form-control" value="{{ $coach->nombres }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="apellidos" class=" form-control-label">Apellidos</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="apellidos" name="apellidos" placeholder="Ingrese los apellidos..." class="form-control" value="{{ $coach->apellidos }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="rut" class=" form-control-label">RUT</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="rut" name="rut" placeholder="Ingrese el rut..." class="form-control" value="{{ $coach->rut }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="edad" class=" form-control-label">Edad</label></div>
                                <div class="col-12 col-md-9"><input type="number" id="edad" name="edad" placeholder="Ingrese la edad..." class="form-control" value="{{ $coach->edad }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="id_equipo" class=" form-control-label">Equipos</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="id_equipo" id="id_equipo" class="form-control">
                                        @foreach($equipos as $key)
                                            @php $cont=0; @endphp
                                            @foreach($coachs as $key2)
                                                @if($key2->id_equipo==$key->id)
                                                    @php $cont++; @endphp
                                                @endif
                                            @endforeach
                                            @if($cont==0 || $coach->id_equipo==$key->id)
                                                <option value="{{ $key->id }}" @if($coach->id_equipo==$key->id) selected="selected" @endif>{{ $key->nombre }}</option>
                                            @endif
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
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection

