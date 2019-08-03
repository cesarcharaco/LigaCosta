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
                    <li><a href="{{ route('users.index') }}">Listado</a></li>
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

		<div class="col-12">
            <div class="card">
                <form class="form-horizontal" method="POST" action="{{ route('users.store') }}">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">Registrar Usuarios <br> <p>Todos los campos son requeridos (<b style="color:red;">*</b>)</p></h4>
                    	<div class="row form-group">
                            <div class="col col-md-3">
                                <label for="nombres" class=" form-control-label"><b style="color: red;">*</b> Nombre</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ej: Martin Ferrer">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col col-md-3">
                                <label for="email" class="form-control-label"><b style="color:red;">*</b>Correo</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ej: micorreo@gmail.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col col-md-3">
                                <label for="password" class="form-control-label text-md-right"><b style="color:red;">*</b>Contraseña</label>
                            </div>

                            <div class="col-12 col-md-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label for="password-confirm" class="form-control-label text-md-right"><b style="color:red;">*</b>Confirma Contraseña</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
		</div>
	</div>
</div>

@endsection

@section('scripts')
@endsection