@extends('layouts.app')


@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Equipos</h1>
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
                        <strong>Modificar de equipo <small>Todos los campos (<b style="color: red;">*</b>) son requeridos.</small></strong>
                    </div>
                    <div class="card-body card-block">
                        {!! Form::open(['route' => ['equipos.update',$equipo->id], 'method' => 'PUT', 'name' => 'form', 'id' => 'form','data-parsley-validate', 'class'=>'form-horizontal', 'enctype' =>'multipart/form-data']) !!}
                        @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="nombre" class=" form-control-label"><b style="color: red;">*</b></label> Nombre</b></label></div>
                                <div class="col-12 col-md-9"><input type="text" id="nombre" name="nombre" placeholder="Ingrese nombre..." required="required" class="form-control" value="{{ $equipo->nombre }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="lema" class=" form-control-label"><b style="color: red;">*</b></label> Lema</b></label></div>
                                <div class="col-12 col-md-9"><input type="text" id="lema" name="lema" placeholder="Ingrese lema..." required="required" class="form-control" value="{{ $equipo->lema }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="liga" class=" form-control-label"><b style="color: red;">*</b></label> Liga</b></label></div>
                                <div class="col-12 col-md-9">
                                    <select name="liga" id="liga" class="form-control">
                                        <option value="Football Tackle" @if($equipo->liga=="Football Tackle") selected="selected" @endif>Football Tackle</option>
                                        <option value="Football Flag" @if($equipo->liga=="Football Flag") selected="selected" @endif>Football Flag</option>
                                    </select>
                                </div>
                            </div>
                            @if($equipo->url_logo)
                                        
                            <div class="row form-group">
                                <div class="col col-md-8">
                                    <label for="name">Logo Actual:</label>
                                    <img src="{{ asset($equipo->url_logo) }}" width="250px" height="250px">    
                                </div>
                            </div>
                            @endif
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="logo" class=" form-control-label">Logo Nuevo</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="logo" name="logo" placeholder="Ingrese logo..." class="form-control"></div>
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

