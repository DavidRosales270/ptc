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
<?php 
	
?>  
<div style="position: relative;  margin: 0; padding: 0; ">
	<div style="display: inline-block; vertical-align: middle; width: 100%;  margin: 0; padding: 0; ">
    		{!! csrf_field() !!}
		
		<div class="col-sm-12 col-md-12" style="margin: 0; padding: 0; ">
			<div class="col-sm-3 col-md-3" style="background-color: #e10019; color: #FFF; height: 50px; position: relative; ">
				 <span style='position:absolute; bottom: 0px; right: 0px; margin: 8px; font-size: 13px; '><b>Bienvenido</b></span>
			</div>
			<div class="col-sm-3 col-md-3" style="color: #e10019; height: 50px; text-align: center; padding-top: 15px; ">
				<span style='font-size: 16px; '><b>NEGOCION2017</b></span>
			</div>
			<div class="col-sm-6 col-md-6" style="text-align: center; height: 50px; ">
				@if (Auth::check())
					<div style="text-align: center; width: 100%; padding-top: 10px; height: 40px; background-color: #DFDFE1; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; margin-top: 5px; ">
						<img style="margin-left: 8px; " src="../public/user-icon.png" />
						<a style="color: #1697E3; font-size: 14px; " href="/dashboard">{{Auth::user()->name}}</a>
						<span style="margin-left: 8px; font-size: 14px; font-family: Lato; letter-spacing: 1.2px;"><b>$ {{Auth::user()->amount}}</b></span>
						<label style="margin-left: 8px; margin-right: 0px; padding: 4px; background-color: #818181; color: #FFF; border-radius: 8px 0px 0px 8px; -moz-border-radius: 8px 0px 0px 8px; -webkit-border-radius: 8px 0px 0px 8px;" type="button" value="" >Standard</label>
						<input type="button" value="+" style="font-weight: bold; padding: 4px; margin-left: -4px; background-color: green; border: none; color: #fff; " />
					</div>
				@else
				@endif
			</div>
		</div>
		
		<div class="col-sm-12 col-md-12" >
			<div class="col-sm-3 col-md-3" style="font-size: 17px; margin-top: 75px; ">
				<b>GANADORES</b>
			</div>
			<div class="col-sm-3 col-md-3" style="text-align: justify; font-size: 14px; ">
				<br />
				<span style="color: #B7B7B7; font-weight: bold; ">USUARIO</span>
				<br />
				<hr style="border: 2px solid red; padding: 0; margin: 0; margin-top: 8px; background-color: red; " />
				<br />
				Como usuarios puede ganar simplemente viendo anuncios.
			</div>
			<div class="col-sm-3 col-md-3" style="text-align: justify; font-size: 14px; ">
				<br />
				<span style="color: #B7B7B7; font-weight: bold; ">ANUNCIANTE</span>
				<br /><hr style="border: 2px solid red; padding: 0; margin: 0; margin-top: 8px; background-color: red; " />
				<br />
				Puede anunciar su página web y aumentar sus ventas y tráficos.
			</div>
			<div class="col-sm-3 col-md-3" style="text-align: justify; font-size: 14px; ">
				<br />
				<span style="color: #B7B7B7; font-weight: bold; ">NOSOTROS</span>
				<br /><hr style="border: 2px solid red; padding: 0; margin: 0; margin-top: 8px; background-color: red; " />
				<br />
				Somos expertos en brindar nuevas soluciones de negocio en un ambiente de ganancia mutua.
			</div>
		</div>
		<div class="col-sm-12 col-md-12" style="margin-bottom: 24px; vertical-align: middle; ">
			<div class="col-sm-3 col-md-3" style="font-size: 17px; margin-top: 75px; ">
				<b>BENEFICIOS</b>
			</div>
			<div class="col-sm-3 col-md-3" style="font-size: 12px; padding-top: 10px; ">
				<hr style="border: 1px solid #B7B7B7; padding: 0; margin: 0; background-color: #B7B7B7; " />
				<br />
				- Ingresos sin esfuerzos<br />
				- Gane desde casa<br />
				- Garantía de anuncios<br />
				- Estadísticas<br />
				- Oportunidades de expansión<br />
				- Comunidad dedicada<br />
				- AdPrize + Ofertas<br />
			</div>
			<div class="col-sm-3 col-md-3" style="font-size: 12px; padding-top: 10px; ">
				<hr style="border: 1px solid #B7B7B7; padding: 0; margin: 0; background-color: #B7B7B7; " />
				<br />
				- Gestión avanzada<br />
				- Millones de clientes potenciales<br />
				- Filtro demográfico<br />
				- Seguridad<br />
				- Estadísticas<br />
				- Elección<br />
				- Créditos para el AdPrize<br />
			</div>
			<div class="col-sm-3 col-md-3" style="font-size: 12px; padding-top: 10px; ">
				<hr style="border: 1px solid #B7B7B7; padding: 0; margin: 0; background-color: #B7B7B7; " />
				<br />
				- Entorno seguro<br />
				- Soporte profesional<br />
				- Servicio inmediato<br />
				- Alto tráfico<br />
				- Ideas innovadoras<br />
				- Negocio orientado<br />
			</div>
		</div>
		
		<hr style="border: 2px solid red; padding: 0; margin: 24px; background-color: red; " />
		<div class="col-sm-12 col-md-12" style="font-weight: bold; ">
			<div class="col-sm-4 col-md-4" style="text-align: center; font-size:12px; ">
				<b>USUARIOS REGISTRADOS</b><br />
				<span style="font-size: 17px; color: #e10019; font-family: Lato; letter-spacing: 1.5px; "> + 300</span>
			</div>
			<div class="col-sm-4 col-md-4" style="text-align: center; font-size:12px; ">
				<b>ANUNCIOS VISUALIZADOS</b><br />
				<span style="font-size: 17px; color: #e10019; font-family: Lato; letter-spacing: 1.5px; "> + 254,000</span>
			</div>
			<div class="col-sm-4 col-md-4" style="text-align: center; font-size:12px; ">
				<b>PAGOS A USUARIOS</b><br />
				<span style="font-size: 17px; color: #e10019; font-family: Lato; letter-spacing: 1.5px; "> + $ 1,200.23</span>
			</div>
		</div>
		<br />		
	</div>
	<br />
	<br />
</div>

@stop