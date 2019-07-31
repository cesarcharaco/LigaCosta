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
                    <li class="active">Listado</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Listado de equipos</strong>
                    <a href="{{ route('equipos.create') }}"><button type="button" class="btn btn-primary btn-sm pull-right"><i class="fa fa-star"></i> Registrar</button></a>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Lema</th>
                <th>Liga</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach($equipos as $key)
                    <tr>
                        <td>{{ $key->nombre }}</td>
                        <td>{{ $key->lema }}</td>
                        <td>{{ $key->liga}}</td>
                        <td align="center">
                            <a href="#"><button type="button" class="btn btn-primary btn-sm pull"><i class="fa fa-edit"></i></button></a>

                            <a href="#"><button type="button" class="btn btn-danger btn-sm pull"><i class="fa fa-trash"></i></button></a>


                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
                </div>
            </div>
        </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection

