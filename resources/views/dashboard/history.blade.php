@extends('layouts.home')
@section('content')
<div class="text-info">
    	@if(Session::has('message'))
        	{{Session::get('message')}}
    	@endif
    	
    	@if(Session::has('status'))
        	{{Session::get('status')}}
    	@endif
</div>
<link rel="stylesheet" type="text/css" href="../public/css/dashboard.css">
<div style="position: relative;  margin: 0; padding: 0; ">
	<div style="display: inline-block; vertical-align: middle; width: 100%;  margin: 0; padding: 10px; ">
        {!! csrf_field() !!}
        @include('dashboard/menu')

        <div class="banners">
            <div class="box-item">
                
                <span class="head">Historial</span>
                
                <hr  class="line-hr">
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Mostrar</label>
                <div class="col-sm-10">
                    <select class="form-control" id="exampleSelect1" style="width: 150px">
                        <option>Registro</option>
                    </select>
                </div>
            </div>

<hr class="line-hr">
            <table class="table table-striped table-info">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Evento</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2017/08/09 a las 15:32</td>
                        <td>Se ha registrado satisfactoriamente en Niulinx</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
</div>
@stop