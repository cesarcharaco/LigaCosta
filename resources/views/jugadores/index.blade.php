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
                    <strong class="card-title">Listado de jugadores</strong>
                    <a href="{{ route('jugadores.create') }}"><button type="button" class="btn btn-primary btn-sm pull-right"><i class="fa fa-star"></i> Registrar</button></a>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>RUT</th>
                <th>Edad</th>
                <th>Género</th>
                <th>Posición</th>
                <th>Nro. Camiseta</th>
                <th>Equipo</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach($jugadores as $key)
                    <tr>
                        <td>{{ $key->nombres }}</td>
                        <td>{{ $key->apellidos }}</td>
                        <td>{{ $key->rut}}</td>
                        <td>{{ $key->edad }}</td>
                        <td>{{ $key->genero }}</td>
                        <td>{{ $key->posicion }}</td>
                        <td>{{ $key->num_camiseta }}</td>
                        <td>{{ $key->equipos->nombre }}</td>
                        <td align="center">
                            <a href="{{ route('jugadores.edit', $key->id) }}"><button type="button" class="btn btn-primary btn-sm pull"><i class="fa fa-edit"></i></button></a>

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

