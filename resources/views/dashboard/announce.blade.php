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
                
                <span class="head"> Compra de paquetes de clics </span>
                
                <hr  class="line-hr">
            </div>
            <div class="col-sm-5 col-md-6">
                <h2>Seleccione un paquete de clics:</h2>

                <form method="post" action="#" style="display:inline" onsubmit="return false();" name="pf" id="pf">
                    <table cellpadding="2" cellspacing="0" align="center">
                        <tbody>
                        <tr>
                            <td>
                                <div class="input-group pull-center">
                                     <label for="name" class="input-group-addon">Tipo:&nbsp; </label>
                                    <select name="exposicao" id="$e" onchange="mud();valores();" class="campotexto form-control" style="font-family:Verdana, Geneva, sans-serif;font-size:11px;width:200px;">
                                        <option value="5" selected="selected">Exposición Micro</option>
                                        <option value="15">Exposición Mini</option>
                                        <option value="30">Exposición Estándar</option>
                                        <option value="60">Exposición Prolongada</option>
                                        <option value="Fixed2">Exposición Fija</option>
                                    </select>
                                </div>
                                <br />
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="input-group pull-center">
                                <label for="name" class="input-group-addon">Clicks </label>
                                <select name="cliques" id="$c" onchange="valores();"class="campotexto form-control" style="font-family:Verdana, Geneva, sans-serif;font-size:11px;width:200px;">
                                    <option value="2500">2500 + 2500 AdPrize</option>
                                    <option value="5000">5000 + 5000 AdPrize</option>
                                    <option value="10000">10000 + 10000 AdPrize</option>
                                    <option value="25000">25000 + 25000 AdPrize</option>
                                    <option value="50000">50000 + 50000 AdPrize</option>
                                    <option value="100000">100000 + 100000 AdPrize</option>
                                    <option value="200000">200000 + 200000 AdPrize</option>
                                    <option value="500000">500000 + 500000 AdPrize</option>
                                </select></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <div align="center" id="total" class="f_b" style="color:#00ac00;font-size:40px;">$5</div>
                    <div align="center" id="total2" class="f_r" style=
                    "color:#888;font-size:11px;">
                    <table cellpadding="0" cellspacing="0">
                        <tbody>
                        <tr>
                            <td style="font-size:11px;">
                            Por clic <span style="font-size:9px;">(Exposición
                            Micro)</span>:&nbsp;
                            </td>
                            <td style="font-size:11px;">
                            $0.00200
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size:11px;">
                            Por clic <span style="font-size:9px;">(Créditos para el
                            AdPrize)</span>:&nbsp;
                            </td>
                            <td style="font-size:11px;">
                            $0.00200
                            </td>
                        </tr>
                        <tr>
                            <td style=
                            "font-size:11px;background-color:#00ac00;color:#fff;padding:1px;">
                            Por clic <span style="font-size:9px;">(Total)</span>:&nbsp;
                            </td>
                            <td style=
                            "font-size:11px;color:#00ac00;background-color:#00ac00;color:#fff;padding:1px;padding-left:0px;">
                            $0.00100
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </form>

                <h2>Seleccione un paquete de clics:</h2>


            </div>
            <div class="col-sm-5 col-md-6">
                <div class="f_b" style="font-size:13px;color:#e10019;font-weight: bold;">¿Qué estoy comprando?</div><br />
                <div style="color:#000;font-size:12px;text-align:justify" class="f_r" align="left">
                    Estos clics son visualizaciones para sus anuncios. Puede
                    asignar todos los clics de su cuenta entre uno o más
                    anuncios de los que tenga definidos.<br />
                    <br />
                    No olvide hacer clic en el botón de "Activar" para iniciar
                    la visualización de cada uno de los anuncios ya que están
                    pausados por defecto.
                </div><br />
                <div class="f_b" style="font-size:13px;color:#e10019;font-weight: bold;">¿Qué paquete debería escoger?</div><br />
                <div style="color:#000;font-size:12px;text-align:justify"class="f_r" align="left">
                    En primer lugar necesita seleccionar cuántos clics
                    (visualizaciones) tendrá su anuncio. Éste será el número de
                    usuarios que verá su anuncio. Después necesita escoger un
                    tipo de exposición.<br />
                    <br />
                    Las exposiciones para el AdPrize son gratuitas y están
                    incluidas en cada compra. El precio por clic viene a modo
                    de ejemplo. Se pueden activar o desactivar para cada
                    anuncio individualmente.<br />
                    <br />
                    Podrá encontrar todo lo relacionado con los diferentes
                    tipos de exposición en la tabla inferior.
                </div>
            
            </div>

            <div style="clear:both"></div>
            <hr class="line-hr" />

            <div style="width:80%; padding:10px;">
           
                        <table cellpadding="2" cellspacing="2" class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td class="tp3">Exposición<br />Micro</td>
                                    <td class="tp3">Exposición<br />Mini</td>
                                    <td class="tp3">Exposición<br />Estándar</td>
                                    <td class="tp3">Exposición<br />Prolongada</td>
                                    <td class="tp3">Exposición<br />Fija</td>
                                    <td class="tp3">AdPrize</td>
                                </tr>
                                <tr>
                                    <td class="tp2" nowrap="nowrap">Tipo de Exposición</td>
                                    <td class="tp1">Por clic</td>
                                    <td class="tp1">Por clic</td>
                                    <td class="tp1">Por clic</td>
                                    <td class="tp1">Por clic</td>
                                    <td class="tp1">Por día</td>
                                    <td class="tp1">Variable</td>
                                </tr>
                                <tr>
                                    <td class="tp2" nowrap="nowrap">Tiempo Mínimo de <br/> Exposición</td>
                                    <td class="tp1">5 segundos</td>
                                    <td class="tp1">15 segundos</td>
                                    <td class="tp1">30 segundos</td>
                                    <td class="tp1">60 segundos</td>
                                    <td class="tp1">5 segundos</td>
                                    <td class="tp1">5 segundos</td>
                                </tr>
                                <tr>
                                    <td class="tp2" nowrap="nowrap">Estadísticas</td>
                                    <td class="tp1">Sí</td>
                                    <td class="tp1">Sí</td>
                                    <td class="tp1">Sí</td>
                                    <td class="tp1">Sí</td>
                                    <td class="tp1 tp0">No</td>
                                    <td class="tp1">Sí</td>
                                </tr>
                                <tr>
                                    <td class="tp2" nowrap="nowrap">Estadísticas detalladas</td>
                                    <td class="tp1 tp0">No</td>
                                    <td class="tp1 tp0">No</td>
                                    <td class="tp1">Sí</td>
                                    <td class="tp1">Sí</td>
                                    <td class="tp1 tp0">No</td>
                                    <td class="tp1 tp0">No</td>
                                </tr>
                                <tr>
                                    <td class="tp2" nowrap="nowrap">Filtro por países</td>
                                    <td class="tp1 tp0">No</td>
                                    <td class="tp1">Sí</td>
                                    <td class="tp1">Sí</td>
                                    <td class="tp1">Sí</td>
                                    <td class="tp1 tp0">No</td>
                                    <td class="tp1 tp0">No</td>
                                </tr>
                                <tr>
                                    <td class="tp2" nowrap="nowrap">Filtro por edad</td>
                                    <td class="tp1 tp0">No</td>
                                    <td class="tp1">Sí</td>
                                    <td class="tp1">Sí</td>
                                    <td class="tp1">Sí</td>
                                    <td class="tp1 tp0">No</td>
                                    <td class="tp1 tp0">No</td>
                                </tr>
                                <tr>
                                    <td class="tp2" nowrap="nowrap">Mostrar Descripción</td>
                                    <td class="tp1 tp0">No</td>
                                    <td class="tp1">Sí</td>
                                    <td class="tp1">Sí</td>
                                    <td class="tp1">Sí</td>
                                    <td class="tp1">Sí</td>
                                    <td class="tp1 tp0">No</td>
                                </tr>
                                <tr>
                                    <td class="tp2" nowrap="nowrap">Créditos para el AdPrize</td>
                                    <td class="tp1">1x</td>
                                    <td class="tp1">4x</td>
                                    <td class="tp1">9x</td>
                                    <td class="tp1">19x</td>
                                    <td class="tp1">Variable</td>
                                    <td class="tp1 tp0">No</td>
                                </tr>
                            </tbody>
                        </table>
                   
            
            </div>
            
        </div>
    </div>
</div>

<script type="text/javascript">
                    
    mk_tt('t_a2','rm','<div style="text-align:left;">Esta es la cantidad de tiempo que su anuncio debe<br>ser visto por nuestros usuarios.<br><br><u><b>Exposición Micro:<\/b> 5 segundos<\/u><br>Nuestro tipo de exposición más rápido y barato.<br>Es la mejor opción si busca aumentar el tráfico de su sitio web.<br>Nota: ¡Este tipo de anuncios no pueden ser filtrados demográficamente<br>o separados en categorías ni tendrán estadísticas detalladas!<br><br><u><b>Exposición Mini:<\/b> 15 segundos<\/u><br>Es más económico y rápido de ver.<br>Su anuncio será visto en menos tiempo pero no todos<br>los usuarios se verán tentados a visitarlo.<br><br><u><b>Exposición Estándar:<\/b> 30 segundos<\/u><br>Éste es nuestro paquete estándar.<br><br><u><b>Exposición Prolongada:<\/b> 60 segundos<\/u><br>Su anuncio será expuesto por una mayor cantidad de<br>tiempo. Éste es el tipo de anuncio que nuestros usuarios<br>visitarán con más frecuencia.<\/div>');
    mk_tt('t_a1','rm','<div style="text-align:left">Elija cuántos clics de usuarios necesita.<br><br>Su anuncio será mostrado hasta alcanzar los clics de usuarios que ha elegido.<br><br>Todos los clics de los visitantes serán gratuitos.<\/div>');
</script>
<style>.tp1,.tp2,.tp3,.tp4,.tp0{border-right:1px solid #fff;border-bottom:1px solid #fff;background-color:#D6707D;font-size:13px;}
.tp1,.tp0{text-align:center;background-color:#e9e9e9;padding-left:8px;padding-right:8px;font-family:Arial, Helvetica, sans-serif;font-size:12px;}
.tp2{background-color:#c12e2a;}
.tp0{color:#bbb;}
.tp3{color:#fff;padding-left:8px;padding-right:8px;text-align:center;}
.tp4{text-align:center;color:#fff;padding-left:8px;padding-right:8px;}
.tp2,.tp4{color:#fff;padding-left:8px;padding-right:8px;text-align:left;white-space: nowrap;}
</style>
@stop