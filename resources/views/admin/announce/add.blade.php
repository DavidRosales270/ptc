@extends('layouts.admin');

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Anuncios
            <small>Detalles del Anuncio</small>
        </h1>
    </div>
</div>

@include('partials.messages')


<form action="{{ route('admin.announce.store') }}" method="post" >
{!! csrf_field() !!}
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">Detalles del Anuncio</div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="email">Titulo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nombre del Anuncio" value="">
                </div>
                <div class="form-group">
                    <label for="email">URL</label>
                    <input type="text" class="form-control" id="url" name="url"  value="">
                </div>
                <div class="form-group">
                    <label for="username">Descripción</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                <div class="form-group" id="datetimepicker1"  >
                    <label for="username">Fecha para Mostrar</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input type="date" name="date_show" class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>

                </div>
                <div class="form-group">
                    <label for="username">Tipo de Anuncio</label>
                    <select class="form-control" name="type_announce">
                        @foreach($type_anuncio as $type)
                            <option value="{{ $type->id }}">{{ $type->nombre }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label for="username">Precio</label>
                    <input type="text" class="form-control" id="price" placeholder="Ejemplo: 0.0001" name="price" >
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-save"></i>
            Crear Anuncio
        </button>
    </div>
</div>
</form>

@stop
@section('styles')
    {!! HTML::style('public/assets/css/bootstrap-datetimepicker.min.css') !!}
@stop

@section('scripts')
    {!! HTML::script('public/assets/js/moment.min.js') !!}
    {!! HTML::script('public/assets/js/bootstrap-datetimepicker.min.js') !!}
    <script type="text/javascript">
        $(document).ready(function(){
            $('#datetimepicker1').datetimepicker();
        })
    </script>
@stop



