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

        <div class="banners" style="font-size:12px">
            <div class="box-item">
                <span class="head">Cuenta Golden</span>
                <hr  class="line-hr">
            </div>

            <h2>Beneficios principales</h2>
            <table cellpadding="2" cellspacing="2" class="table">
                <tbody>
                    <tr>
                        <td>&nbsp;</td>
                        <td class="tp2" style="background-color:#D6707D; color: #fff" colspan="2" align="center">Sus clics</td>
                        <td class="tp2" style="background-color:#D6707D; color: #fff" colspan="2" align="center">Comisiones de los<br />Referidos Directos</td>
                        <td class="tp2" style="background-color:#D6707D; color: #fff" colspan="2" align="center">Comisiones de los<br />Referidos Alquilados</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td class="tp3">
                            <div class="tag_s" style="background-color:#707070;color:#fff;">Standard</div>
                        </td>
                        <td class="tp3">
                            <div class="tag_s" style="background-color:#dbab1e;">Golden</div>
                        </td>
                        <td class="tp3">
                            <div class="tag_s" style="background-color:#707070;color:#fff;">Standard</div>
                        </td>
                        <td class="tp3">
                            <div class="tag_s" style="background-color:#dbab1e;">Golden</div>
                        </td>
                        <td class="tp3">
                            <div class="tag_s" style="background-color:#707070;color:#fff;">Standard</div>
                        </td>
                        <td class="tp3">
                            <div class="tag_s" style="background-color:#dbab1e;">Golden</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="tp2">Exposición Prolongada</td>
                        <td class="tp1">$0.015</td>
                        <td class="tp1">$0.020</td>
                        <td class="tp1">$0.0050</td>
                        <td class="tp1">$0.0100</td>
                        <td class="tp1">$0.0100</td>
                        <td class="tp1">$0.0200</td>
                    </tr>
                    <tr>
                        <td class="tp2">Exposición Estándar</td>
                        <td class="tp1">$0.010</td>
                        <td class="tp1">$0.010</td>
                        <td class="tp1">$0.0050</td>
                        <td class="tp1">$0.0100</td>
                        <td class="tp1">$0.0050</td>
                        <td class="tp1">$0.0100</td>
                    </tr>
                    <tr>
                        <td class="tp2">
                            <table cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td>Anuncios Fijos</td>
                                        <td>
                                            <div style="display:block;border:1px solid #fff;background-color:#eeaa23;width:10px;height:10px;font-size:10px;"></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td class="tp1">$0.001</td>
                        <td class="tp1">$0.010</td>
                        <td class="tp1">$0.0005</td>
                        <td class="tp1">$0.0050</td>
                        <td class="tp1">$0.0050</td>
                        <td class="tp1">$0.0100</td>
                    </tr>
                </tbody>
            </table>

            <div align="center" style="font-size:40px;font-weight:bold;color:#aaa">+</div>

            <table cellpadding="2" cellspacing="2" class="table" width="650">
                <tbody>
                    <tr>
                    <td class="tp2" align="center" width="33%" colspan="4">
                        Más Anuncios Fijos
                    </td>
                    <td class="tp2" align="center" width="34%" colspan="4">
                        Gráficos detallados
                    </td>
                    <td class="tp2" align="center" width="33%" colspan="4">
                        Límites de referidos más altos
                    </td>
                    </tr>
                    <tr>
                    <td colspan="2" width="12.5%">
                        &nbsp;
                    </td>
                    <td class="tp2" align="center" colspan="4" width="37.5%">
                        Filtro de distribución mejorado
                    </td>
                    <td class="tp2" align="center" colspan="4" width="37.5%">
                        Suscripciones al foro
                    </td>
                    <td colspan="2" width="12.5%">
                        &nbsp;
                    </td>
                    </tr>
                </tbody>
            </table>

            <hr class="line-hr" >

            <div class="alert alert-warning" style="font-size:12px;">
            <b>Simule la compra de la Cuenta Golden en nuestra Central de Proyecciones.</b>
            </div>

            <h2>Lista de Requisitos</h2>
            <ul >
                <li>Ha visto 50 anuncios</li>
                <li>Registrado hace al menos 15 días</li>
            </ul>
            <div style="padding:5px; background: #e10019; color: #fff; width: 100%; text-align: center " align="center">En cuanto cumpla todos los requisitos mínimos podrá ascender a Golden.</div>
        </div>
    </div>
</div>

<style>.tp1,.tp2,.tp3,.tp4,.tp0{border-right:1px solid #fff;border-bottom:1px solid #fff;background-color:#c12e2a;font-size:13px;}
.tp1,.tp0{text-align:center;background-color:#eee;padding-left:8px;padding-right:8px;}
.tp0{color:#ccc;}
.tp3{color:#fff;padding-left:8px;padding-right:8px;}
.tp4{text-align:center;color:#fff;padding-left:8px;padding-right:8px;}
.tp2,.tp4{color:#fff;padding-left:8px;padding-right:8px;}
.tag_s{color:#000;font-family:Arial, Helvetica, sans-serif;font-size:12px;padding-bottom:1px;padding-top:1px;padding-left:2px;padding-right:2px;margin-left:1px;margin-right:1px;margin-bottom:1px;text-align:center;display:inline-block;width:55px;cursor:default;}</style
@stop