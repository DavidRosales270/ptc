@extends('layouts.admin');

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Usuario
                <small>Detalles del Usuario</small>
            </h1>
        </div>
    </div>

    @include('partials.messages')


    <form action="{{ route('admin.user.update') }}" method="post" >
        {!! csrf_field() !!}
        <input type="hidden" value="{{ $user->id }}" name="id">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Detalles del Usuario</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="email">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email"  value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Contrasena</label>
                            <input type="password" class="form-control" id="password" name="password"  value="">
                        </div>
                        <div class="form-group">
                            <label for="email">Confirmar Contrasena</label>
                            <input type="password" class="form-control" id="password-confirm" name="password-confirm"  value="">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save"></i>
                    Actualizar Usuario
                </button>
            </div>
        </div>
    </form>

@stop




