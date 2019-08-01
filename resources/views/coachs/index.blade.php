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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Listado de coachs</strong>
                    <a href="{{ route('coachs.create') }}"><button type="button" class="btn btn-primary btn-sm pull-right"><i class="fa fa-star"></i> Registrar</button></a>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>RUT</th>
                <th>Edad</th>
                <th>Equipo</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach($coachs as $key)
                    <tr>
                        <td>{{ $key->nombres }}</td>
                        <td>{{ $key->apellidos }}</td>
                        <td>{{ $key->rut}}</td>
                        <td>{{ $key->edad }}</td>
                        <td>{{ $key->equipos->nombre }}</td>
                        <td align="center">
                            <a href="{{ route('coachs.edit',$key->id) }}"><button type="button" class="btn btn-primary btn-sm pull"><i class="fa fa-edit"></i></button></a>

                            <button onclick="eliminar('{{ $key->id }}')" type="button" class="btn btn-danger btn-sm pull" data-toggle="modal" data-target="#staticModal"><i class="fa fa-trash"></i></button>


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

<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticModalLabel">Eliminar Coach</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                   ¿Estas seguro que desea eliminar?
                </p>
            {!! Form::open(['route' => ['coachs.destroy',1033], 'method' => 'DELETE']) !!}
                @csrf
             <input type="hidden" name="id_coach" id="id_coach">       
                
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Confirmar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
    function eliminar(id_coach) {
        $("#id_coach").val(id_coach);
    }
</script>
@endsection


