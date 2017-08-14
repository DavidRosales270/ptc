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
                    
                    <span class="head">Banners Promocionales</span>
                    
                    <hr  class="line-hr">
                    
                    <div class="link-1">
                        <a href="" style="text-align:center">Haga clic aquí para ver más banners</a>
                    </div>
                   
                   <div class="banner">
                            <img src="../public/imgs/logo.png" alt="" height="56" width="229">
                            <hr class="line-hr" />
                   </div>
                    <br /><br />
                   <div class="alert alert-danger" style="text-align:center">
                        <b>Solo puede tener referidos directos después de ser usuario durante al menos 15 días y tener un mínimo de 100 clics realizados</b>
                   </div>
                   <div class="alert alert-danger" style="text-align:center">
                        <table class="table">
                            <tr>
                                <td><b>Mostrar mi nombre de usuario como:</b></td>
                                <td><b>Información Adicional</b></td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <select class="form-control">
                                        <option>username</option>
                                    </select>
                                </td>
                                <td>
                                    <select id="info" class="form-control">
                                        <option value="0">Sin información adicional</option>
                                        <option value="2">Mostrar Estadísticas del Sitio y lo que he ganado</option>
                                        <option value="3">Mostrar Estadísticas del Sitio y lo que he recibido</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                   </div> 
<hr class="line-hr">
                   <div class="enlaces">
                            <table class="table">
                            <tr>
                                <td>Enlace: </td>
                                <td><a href="">https://www.link.com/?r=dro27</a></td>
                                
                            </tr>
                            <tr>
                                <td>Banner: </td>
                                <td><a href="">https://www.banner.com/imagens/banner1.gif</a></td>
                                
                            </tr>
                            <tr>
                                <td>HTML: </td>
                                <td><textarea style="width:100%"><a href="https://www.link.com/?r=user"><img src="https://www.link.com/imagens/banner1.gif" width="468" height="60"></a></textarea>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>URL para fotos(1): </td>
                                <td><textarea style="width:100%">[URL=https://www.link.com/?r=user][IMG]https://www.link.com/imagens/banner1.gif[/IMG][/URL]</textarea>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>URL para fotos(2): </td>
                                <td><textarea style="width:100%">[URL=https://www.link.com/?r=user][IMG=https://www.link.com/imagens/banner1.gif][/URL]</textarea>
                                </td>
                                
                            </tr>
                            </table>
                   </div> 

                    <hr class="line-hr">

                   <div style="color:#000;font-size: 12px" class="f_r">Puede publicar libremente nuestros banners donde quiera siempre y cuando esté permitido.<br>Puede alojar estos banners si lo desea.<br>Al mostrar o alojar estos banners, debe respetar nuestros Términos de Servicio y los de los lugares donde los va a publicar.<br>No puede modificar estos banners de ninguna forma.</div>   
                </div>
            </div>

    </div>    
</div>


@stop