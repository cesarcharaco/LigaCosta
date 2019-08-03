@extends('layouts.app')


@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Usuarios</h1>
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
                    <strong class="card-title">Listado de Usuarios</strong>
                    <a href="{{ route('users.create') }}"><button type="button" class="btn btn-primary btn-sm pull-right"><i class="fa fa-star"></i> Registrar</button></a>
                </div>
                <div class="card-body">

                    <h4 class="card-title">Mis datos <br></h4>
                	<div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right"><b>Nombre:</b></label>
                        <label for="name" class="col-md-2 col-form-label text-md-right">{{ $user->name }}</label>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-2 col-form-label text-md-right"><b>Correo: </b></label>
                        <label for="email" class="col-md-2 col-form-label text-md-right">{{ $user->email }} </label>
                    </div>
                    {{-- 
       				<div class="form-group row">
                        <label for="log_enterprise" class="col-md-2 col-form-label text-md-right"><b>Nombre de la Empresa:</b></label>
                        <label for="log_enterprise" class="col-md-2 col-form-label text-md-right">{{ $user->log_enterprise }} </label>
                    </div>
                    <div class="form-group row">
                        <label for="log_enterprise" class="col-md-2 col-form-label text-md-right"><b>Status:</b></label>
                        <label for="log_enterprise" class="col-md-2 col-form-label text-md-right">{{ $user->status }} </label>
                    </div>
                    <div class="form-group row">
                        <label for="log_enterprise" class="col-md-2 col-form-label text-md-right"><b>Tipo de Usuario:</b></label>
                        <label for="log_enterprise" class="col-md-2 col-form-label text-md-right">{{ $user->user_type }} </label>
                    </div>              --}}
               </div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
@endsection