@extends('layouts.home')
@section('content')

<link rel="stylesheet" type="text/css" href="../public/css/dashboard.css">
<link rel="stylesheet" type="text/css" href="../public/css/bootstrap-switch.css">

<form class='form' method="post" action="{{ url('dashboard/update') }}">

    {!! csrf_field() !!}
    <div style="position: relative;  margin: 0; padding: 0; ">
        <div style="display: inline-block; vertical-align: middle; width: 100%;  margin: 0; padding: 10px; ">
            
            @include('dashboard/menu')

            <div class="banners">
                <div class="box-item">
                    
                    <span class="head">Opciones Personales</span>
                    
                    <hr  class="line-hr">
                </div>
                <div class="user-form">

                @include('partials.messages')
                
                        <h2>Datos personales</h2>
                        <div class="input-group pull-center">
                            <label for="name" class="input-group-addon">Email : </label>
                            <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" width="70%">
                            <span class="form_hint">
                            Los cambios de correo o Identificador serán efectuados tras 48 horas.
                            </span>
                        </div>

                        <br /><br />
                        <div class="input-group pull-center">
                            <label for="name" class="input-group-addon" width="30%">Contraseña : </label>
                            <input type="password" name="password" id="password" class="form-control" value="" width="70%" >
                            <span class="form_hint">
                            Dejelo en blanco si no desea cambiarlo.
                            </span>
                        </div>
                        <br />
                        <div class="input-group pull-center">
                            <label for="name" class="input-group-addon" width="30%">Confirmación de Contraseña : </label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" value="" width="70%">
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
                        
                        <input type="checkbox" class="switch" checked >
                        </div>
                        <br />
                        <div class="input-group pull-center">
                            <label for="name" class="input-group-addon">Mostrar mi nombre de usuario:</label>
                        
                        <input type="checkbox" class="switch" id="toggle-one" checked data-toggle="toggle">
                        </div>
                        <br />
                        <div class="input-group pull-center">
                            <label for="name" class="input-group-addon">Actualizar página de anuncios:</label>
                        
                        <input type="checkbox" class="switch" id="toggle-one" checked data-toggle="toggle">
                        </div>
                        
                            <br />
                      

                        <h2>Confirmación de Contraseña</h2>
                        <div class="input-group pull-center">
                            <label for="name" class="input-group-addon" width="30%">Contraseña Principal : </label>
                            <input type="password" name="name" id="name" class="form-control" value="" width="70%" >
                            <span class="form_hint">
                            Introduzca su Contraseña Principal
                            </span>
                        </div>
                        <br /><br />
                        <hr class="line-hr"/>
                        <input type="submit" class="btn btn-danger" style="font-size: 11px; margin: 0 auto; " name="send" value="Guardar Cambios">
              
                </div>
            </div>
        </div>
    </div>

</form>

<script src="../public/js/bootstrap-switch.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('.switch').bootstrapSwitch({
        onText: 'Si',
        offText : 'No'
    });
})
    
</script>
<<style>
    .bootstrap-switch {
        margin-left: 15px;
        border-radius: 50px;
    }
    .bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-primary{
        background:#c12e2a
    }
</style>
@stop