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
                
                <span class="head">Registro de Accesos</span>
                
                <hr  class="line-hr">
            </div>
            


            <table class="table table-striped table-info">
                <thead>
                    <tr>
                        <th>Estado</th>
                        <th>Fecha</th>
                        <th>IP de Acceso</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Correcto</td>
                        <td>Hoy a las 19:13Hoy a las 19:13</td>
                        <td>190.86.104.132</td>
                    </tr>
                    <tr>
                        <td>Correcto</td>
                        <td>2017/08/11 a las 11:32</td>
                        <td>190.86.104.132</td>
                    </tr>
                    <tr>
                        <td>Correcto</td>
                        <td>2017/08/10 a las 20:12</td>
                        <td>190.86.104.140</td>
                    </tr>
                    <tr>
                        <td>Correcto</td>
                        <td>2017/08/10 a las 10:47</td>
                        <td>190.57.67.114</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
</div>
@stop