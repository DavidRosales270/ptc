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
                @foreach($logs as $log)
                    <tr>
                        <td>{{ $log->status }}</td>
                        <td>{{ Carbon\Carbon::parse($log->created_at)->format('Y/m/d  H:i a') }}</td>
                        <td>{{ $log->ip }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
@stop