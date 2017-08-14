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

</script>

<div style="position: relative;  margin: 0; padding: 0; ">
	<div style="display: inline-block; vertical-align: middle; width: 100%;  margin: 0; padding: 10px; ">
        {!! csrf_field() !!}
        @include('dashboard/menu')

        <div class="banners">
            <div class="box-item">
                
                <span class="head">Opciones Personales</span>
                
                <hr  class="line-hr">
            </div>
            <div class="user-form">
                <form>
                    <h2>Datos personales</h2>
                    <div class="input-group pull-center">
                        <label for="name" class="input-group-addon">Email : </label>
                        <input type="text" name="name" id="name" class="form-control" value="" width="70%" required="">
                    </div>

                    <br /><br />
                    <div class="input-group pull-center">
                        <label for="name" class="input-group-addon" width="30%">Contraseña : </label>
                        <input type="password" name="name" id="name" class="form-control" value="" width="70%" required="">
                    </div>
                    <br />
                    <div class="input-group pull-center">
                        <label for="name" class="input-group-addon" width="30%">Confirmación de Contraseña : </label>
                        <input type="password" name="name" id="name" class="form-control" value="" width="70%" required="">
                    </div>

                    <br />
                    <h2>Otras Opciones</h2>

                    <div class="input-group pull-center">
                        <label for="name" class="input-group-addon">Bloquear sesión por inactividad : </label>
                       
                        <select class="form-control" name="tpcterm" style="font-size:12px;"><option value="1">Último día</option><option value="5">Últimos 5 días</option><option value="10">Últimos 10 días</option><option value="20">Últimos 20 días</option><option value="30" selected="">Último mes</option><option value="90">Últimos 3 meses</option><option value="180">Últimos 6 meses</option><option value="365">Último año</option></select>
                    </div>
                    <br />
                    <div class="input-group pull-center">
                        <label for="name" class="input-group-addon">Después de iniciar <br /> / desbloquear la sesión : </label>
                       
                       <select class="form-control" name="paginainicial" style="font-size:12px;"><option value="0">Última página visitada</option><option value="1">Ver Anuncios</option><option value="2" selected="">Su cuenta</option><option value="3">Foro</option></select>
                    </div>
<br />
                    <div class="input-group pull-center">
                        <label for="name" class="input-group-addon">Permitir referidos directos:</label>
                       
                       <input type="checkbox" id="toggle-one" checked data-toggle="toggle">
                    </div>
<br />
                    <div class="input-group pull-center">
                        <label for="name" class="input-group-addon">Mostrar mi nombre de usuario:</label>
                       
                       <input type="checkbox" id="toggle-one" checked data-toggle="toggle">
                    </div>
                    <br />
                    <div class="input-group pull-center">
                        <label for="name" class="input-group-addon">Actualizar página de anuncios:</label>
                       
                       <input type="checkbox" id="toggle-one" checked data-toggle="toggle">
                    </div>
<br /><br />
                    <hr class="line-hr"/>

                    

                    <input type="button" class="btn btn-danger" style="font-size: 11px; margin: 0 auto; " name="send" value="Guardar Cambios">
            
                </form>
            </div>
        </div>
    </div>
</div>
@stop