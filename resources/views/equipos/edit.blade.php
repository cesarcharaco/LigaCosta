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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Modificar de equipo</strong>
                    </div>
                    <div class="card-body card-block">
                        {!! Form::open(['route' => ['equipos.update',$equipo->id], 'method' => 'PUT', 'name' => 'form', 'id' => 'form','data-parsley-validate', 'class'=>'form-horizontal']) !!}
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="nombre" class=" form-control-label">Nombre</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="nombre" name="nombre" placeholder="Ingrese nombre..." class="form-control" value="{{ $equipo->nombre }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="lema" class=" form-control-label">Lema</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="lema" name="lema" placeholder="Ingrese lema..." class="form-control" value="{{ $equipo->lema }}"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="liga" class=" form-control-label">Liga</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="liga" id="liga" class="form-control">
                                        <option value="Football Tackle" @if($equipo->liga=="Football Tackle") selected="selected" @endif>Football Tackle</option>
                                        <option value="Football Flag" @if($equipo->liga=="Football Flag") selected="selected" @endif>Football Flag</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="logo" class=" form-control-label">Logo</label></div>
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

