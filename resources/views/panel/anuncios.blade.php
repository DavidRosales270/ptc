@extends('layouts.home')
@section('content')
<div class="text-info">
    	@if(Session::has('message'))
        	{{Session::get('message')}}
    	@endif
</div>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
	var popUpObj = null;
	
	function abrirpubli(ida) {
		
		popUpObj = window.open('anuncio/i/' + ida);
	}
	
	function msganun() {
		alert('Por favor inicie sesión para poder visualizar el anuncio.');
	}
	
	function visalea(ctrl) {

		$(".anuncioT2").find('svg').hide();	
		var svg = document.getElementById(ctrl);
		svg.style.display = "block";
		var left = Math.floor((Math.random() * 140) + 1);
		svg.style.left = left.toString() + "px";
		var top= Math.floor((Math.random() * 40) + 1);
		svg.style.top = top.toString() + "px";
	}
	
</script>
<link rel="stylesheet" type="text/css" href="../public/css/style.css?v=5" />
<div style="position: relative;  margin: 0; padding: 0; ">
	<!--140*40-->
	<div style="display: inline-block; vertical-align: middle; width: 100%;  margin: 0; padding: 0; ">
    		{!! csrf_field() !!}
		
		<div class="col-sm-12 col-md-12" style="padding: 0; ">
			<div class="col-sm-8 col-md-8" style="padding: 0; margin: 0; ">
				<div class="encanuncio">
					<span style='font-size: 13px; '><b>Exposición Fija</b></span>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-12" style="padding: 10px 0px 10px 4px; text-align: left; ">
			<div class="anuncio" style="cursor: pointer; " onclick="visalea('svg1');">							
				<div class="anuncioT"><b> $0.005</b> - Ver UTDN en vivo</div>
				<div class="anuncioT2" style="position: absolute; ">
					<svg height="20" width="20" style="display: none; position: absolute; z-index: 2;" id="svg1">
						<a href="javascript:void(0);" @if (Auth::check()) onclick="abrirpubli(1);" @else onclick="msganun();" @endif target="_blank">
							<circle cx="10" cy="10" r="8" stroke="black" stroke-width="0.5" fill="red"  />
						</a>
					</svg>	
					Canal mexicano dedicado especialmente a la transmisión de fútbol
				</div>
			</div>
			<div class="anuncio" style="cursor: pointer; " onclick="visalea('svg2');">	
				<div class="anuncioT"><b> $0.005</b> - Ver Antena3 en vivo</div>
				<div class="anuncioT2" style="position: absolute; ">
					<svg height="20" width="20" style="display: none; position: absolute; z-index: 2;" id="svg2">
						<a href="javascript:void(0);" @if (Auth::check()) onclick="abrirpubli(2);" @else onclick="msganun();" @endif target="_blank">
							<circle cx="10" cy="10" r="8" stroke="black" stroke-width="0.5" fill="red"  />
						</a>
					</svg>	
					Canal español con muchas series y peliculas disponibles
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-12" style="padding: 0; ">
			<div class="col-sm-8 col-md-8" style="padding: 0; margin: 0; ">
				<div class="encanuncio">
					<span style='font-size: 13px; '><b>Exposición Estándar</b></span>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-12" style="padding: 10px 0px 10px 4px; text-align: left; ">
			<div class="anuncio" style="cursor: pointer; " onclick="visalea('svg3');">				
				<div class="anuncioTStandar"><b> $0.005</b> - Ver UTDN en vivo</div>
				<div class="anuncioT2" style="position: absolute; ">					
					<svg height="20" width="20" style="display: none; position: absolute; z-index: 2;" id="svg3">
						<a href="javascript:void(0);" @if (Auth::check()) onclick="abrirpubli(1);" @else onclick="msganun();" @endif target="_blank">
							<circle cx="10" cy="10" r="8" stroke="black" stroke-width="0.5" fill="red"  />
						</a>
					</svg>
					Canal mexicano dedicado especialmente a la transmisión de fútbol
				</div>
			</div>
			<div class="anuncio" style="cursor: pointer; " onclick="visalea('svg4');">				
				<div class="anuncioTStandar"><b> $0.005</b> - Ver Antena3 en vivo</div>
				<div class="anuncioT2" style="position: absolute; ">
					<svg height="20" width="20" style="display: none; position: absolute; z-index: 2;" id="svg4">
						<a href="javascript:void(0);" @if (Auth::check()) onclick="abrirpubli(2);" @else onclick="msganun();" @endif target="_blank">
							<circle cx="10" cy="10" r="8" stroke="black" stroke-width="0.5" fill="red"  />
						</a>
					</svg>	
					Canal español con muchas series y peliculas disponibles
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-12" style="padding: 0; ">
			<div class="col-sm-8 col-md-8" style="padding: 0; margin: 0; ">
				<div class="encanuncio">
					<span style='font-size: 13px; '><b>Exposición Micro</b></span>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-12" style="padding: 10px 0px 10px 4px; text-align: left; ">
			<div class="anuncio" style="cursor: pointer; " onclick="visalea('svg5');">
				<div class="anuncioTMicro"><b> $0.005</b> - Ver UTDN en vivo</div>
				<div class="anuncioT2" style="position: absolute; ">					
					<svg height="20" width="20" style="display: none; position: absolute; z-index: 2;" id="svg5">
						<a href="javascript:void(0);" @if (Auth::check()) onclick="abrirpubli(1);" @else onclick="msganun();" @endif target="_blank">
							<circle cx="10" cy="10" r="8" stroke="black" stroke-width="0.5" fill="red"  />
						</a>
					</svg>
					Canal mexicano dedicado especialmente a la transmisión de fútbol
				</div>
			</div>
			<div class="anuncio" style="cursor: pointer; " onclick="visalea('svg6');">				
				<div class="anuncioTMicro"><b> $0.005</b> - Ver Antena3 en vivo</div>
				<div class="anuncioT2" style="position: absolute; ">
					<svg height="20" width="20" style="display: none; position: absolute; z-index: 2;" id="svg6">
						<a href="javascript:void(0);" @if (Auth::check()) onclick="abrirpubli(2);" @else onclick="msganun();" @endif target="_blank">
							<circle cx="10" cy="10" r="8" stroke="black" stroke-width="0.5" fill="red"  />
						</a>
					</svg>	
					Canal español con muchas series y peliculas disponibles
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-12" style="padding: 0; ">
			<div class="col-sm-8 col-md-8" style="padding: 0; margin: 0; ">
				<div class="encanuncio">
					<span style='font-size: 13px; '><b>Exposición Premium</b></span>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-12" style="padding: 10px 0px 10px 4px; text-align: left; ">
			<div class="anuncio" style="cursor: pointer; " onclick="visalea('svg7');">				
				<div class="anuncioTPremium"><b> $0.005</b> - Ver UTDN en vivo</div>
				<div class="anuncioT2" style="position: absolute; ">					
					<svg height="20" width="20" style="display: none; position: absolute; z-index: 2;" id="svg7">
						<a href="javascript:void(0);" @if (Auth::check()) onclick="abrirpubli(1);" @else onclick="msganun();" @endif target="_blank">
							<circle cx="10" cy="10" r="8" stroke="black" stroke-width="0.5" fill="red"  />
						</a>
					</svg>
					Canal mexicano dedicado especialmente a la transmisión de fútbol
				</div>
			</div>
			<div class="anuncio" style="cursor: pointer; " onclick="visalea('svg8');">				
				<div class="anuncioTPremium"><b> $0.005</b> - Ver Antena3 en vivo</div>
				<div class="anuncioT2" style="position: absolute; ">
					<svg height="20" width="20" style="display: none; position: absolute; z-index: 2;" id="svg8">
						<a href="javascript:void(0);" @if (Auth::check()) onclick="abrirpubli(2);" @else onclick="msganun();" @endif target="_blank">
							<circle cx="10" cy="10" r="8" stroke="black" stroke-width="0.5" fill="red"  />
						</a>
					</svg>	
					Canal español con muchas series y peliculas disponibles
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-12" style="padding: 0; ">
			<div class="col-sm-8 col-md-8" style="padding: 0; margin: 0; ">
				<div class="encanuncio">
					<span style='font-size: 13px; '><b>Exposición Plus</b></span>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-12" style="padding: 10px 0px 10px 4px; text-align: left; ">
			<div class="anuncio" style="cursor: pointer; " onclick="visalea('svg9');">				
				<div class="anuncioTPlus"><b> $0.005</b> - Ver UTDN en vivo</div>
				<div class="anuncioT2" style="position: absolute; ">					
					<svg height="20" width="20" style="display: none; position: absolute; z-index: 2;" id="svg9">
						<a href="javascript:void(0);" @if (Auth::check()) onclick="abrirpubli(1);" @else onclick="msganun();" @endif target="_blank">
							<circle cx="10" cy="10" r="8" stroke="black" stroke-width="0.5" fill="red"  />
						</a>
					</svg>
					Canal mexicano dedicado especialmente a la transmisión de fútbol
				</div>
			</div>
			<div class="anuncio" style="cursor: pointer; " onclick="visalea('svg10');">				
				<div class="anuncioTPlus"><b> $0.005</b> - Ver Antena3 en vivo</div>
				<div class="anuncioT2" style="position: absolute; ">
					<svg height="20" width="20" style="display: none; position: absolute; z-index: 2;" id="svg10">
						<a href="javascript:void(0);" @if (Auth::check()) onclick="abrirpubli(2);" @else onclick="msganun();" @endif target="_blank">
							<circle cx="10" cy="10" r="8" stroke="black" stroke-width="0.5" fill="red"  />
						</a>
					</svg>	
					Canal español con muchas series y peliculas disponibles
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-12" style="padding: 0; ">
			<div class="col-sm-8 col-md-8" style="padding: 0; margin: 0; ">
				<div class="encanuncio">
					<span style='font-size: 13px; '><b>Exposición Play</b></span>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-12" style="padding: 10px 0px 10px 4px; text-align: left; ">
			<div class="anuncio" style="cursor: pointer; " onclick="visalea('svg11');">				
				<div class="anuncioTPlay"><b> $0.005</b> - Ver UTDN en vivo</div>
				<div class="anuncioT2" style="position: absolute; ">					
					<svg height="20" width="20" style="display: none; position: absolute; z-index: 2;" id="svg11">
						<a href="javascript:void(0);" @if (Auth::check()) onclick="abrirpubli(1);" @else onclick="msganun();" @endif target="_blank">
							<circle cx="10" cy="10" r="8" stroke="black" stroke-width="0.5" fill="red"  />
						</a>
					</svg>
					Canal mexicano dedicado especialmente a la transmisión de fútbol
				</div>
			</div>
			<div class="anuncio" style="cursor: pointer; " onclick="visalea('svg12');">				
				<div class="anuncioTPlay"><b> $0.005</b> - Ver Antena3 en vivo</div>
				<div class="anuncioT2" style="position: absolute; ">
					<svg height="20" width="20" style="display: none; position: absolute; z-index: 2;" id="svg12">
						<a href="javascript:void(0);" @if (Auth::check()) onclick="abrirpubli(2);" @else onclick="msganun();" @endif target="_blank">
							<circle cx="10" cy="10" r="8" stroke="black" stroke-width="0.5" fill="red"  />
						</a>
					</svg>	
					Canal español con muchas series y peliculas disponibles
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />
</div>

@stop