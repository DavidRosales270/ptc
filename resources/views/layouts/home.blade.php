<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
	<meta name="description" content="">
	<meta name="author" content="Mario Palacios">
	<title>Gana dinero</title>


	{!! HTML::style('public/css/global.css') !!}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

	@yield('styles')

	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #eFeFeF; " >
	<div class="container" style="margin: 0; padding: 0; width: 100%; font-size:11px; ">
		<header class="row" style="margin: 0; padding: 0; width: 100%; background-color: #FFF; padding-top: 12px; padding-bottom: 12px;">
			<div class="row" style="margin: 0; padding: 0; width: 100%;">
          			<div class="col-sm-6 col-md-6" style="">
					<a href="/"><img src="../public/imgs/logo.png" alt="" height="56" width="229"></a>
				</div>
				<div class="col-sm-6 col-md-6" style="text-align: center; padding-top: 20px; padding-right: 20px;  ">
					@if (!Auth::check() || Auth::user()->name != "admin")
						<a href="{{url('anuncios')}}" class="btn btn-danger" style="font-size: 11px; ">Ver Anuncios</a>
					@else
					@endif
					<a href="{{url('forum')}}" class="btn btn-danger" style="font-size: 11px; ">Foro</a>
					
					@if (Auth::check())
						@if (Auth::user()->name == "admin")
							<a href="{{url('admin')}}" class="btn btn-danger" style="font-size:11px; ">Configuración</a>
						@else							
						@endif
						<a href="{{url('auth/logout')}}" class="btn btn-danger" style="font-size:11px; ">Cerrar Sesión</a>
					@else
						<a href="{{url('auth/register')}}" class="btn btn-danger" style="font-size:11px; ">Registrese</a>
						<a href="{{url('auth/login')}}" class="btn btn-danger" style="font-size: 11px; ">Iniciar Sesión</a>
					@endif
				</div>
			</div>
	    	</header>
	</div>
	<hr style="background-color: red; border: 4px solid red; padding: 0; margin: 0; " />
	
	<div class="row" style="margin: 0; padding: 0;  margin-top: 8px; margin-bottom: 8px; font-size:11px; ">
		<div id="main" style="margin: 0 auto; width: 75%; background: url(/public/imgs/fondo1.png) no-repeat center center ;  -webkit-background-size: 100% 100%; -moz-background-size: 100% 100%; -o-background-size: 100% 100%; background-size: 100% 100%; width: 75%;" >
			@yield('content')	
		</div>
	
	</div>
	
	<div class="row" style="margin: 0; padding: 0;  margin-top: 8px; margin-bottom: 8px; ">
   	<footer id="footer" class="clearfix" style="margin: 0 auto; width: 75%; ">
      		<div id="footer-widgets" style="width: 100%; ">
        		<div class="container" style="width: 100%; ">
        			<div id="footer-wrapper" style="width: 100%; ">
          				<div class="row" style="width: 100%; ">
            					<div class="col-sm-12 col-md-12">
              						<div id="meta-4" class="widget widgetFooter widget_meta">
						              	<div class="form-group">
						                	<div class="input-group" style="text-align: left; width: 100%; padding-top:10px;">
						                  		<img src="../public/imgs/payza.png" alt="" width="200" >&nbsp;&nbsp;
						                  		<img src="../public/imgs/paypal.png" alt="" width="200">
						                	</div>
						              	</div>
              						</div>
             					</div> <!-- end widget1 -->
			          	</div> <!-- end .row -->

        			</div> <!-- end #footer-wrapper -->

        		</div> <!-- end .container -->
      		</div> <!-- end #footer-widgets -->

      		<div id="sub-floor" style="width: 100%; font-size:11px; ">
        		<div class="container" style="width: 100%; ">
          			<div class="row" style="width: 100%; ">
            				<div class="col-sm-5 col-md-5 copyright" style="text-align: right; margin: 0; padding: 0; ">
             					© 2008 - 2017 Niulinx. Todos los derechos reservados
            				</div>
            				<div class="col-sm-7 col-md-7" style="text-align: right; ">
              						<div id="meta-4" class="widget widgetFooter widget_meta" style="text-align: right; ">
						              	<div class="form-group" style="text-align: right; ">
						                	<div class="input-group" style="text-align: right; width: 100%; ">
						                		<a href="../terminos" class="btn btn-danger" style="font-size: 11px; margin-right: 4px; ">Términos de servicio</a>
						                  		<a href="../politica" class="btn btn-danger" style="font-size: 11px; margin-right: 4px; ">Política de privacidad</a>
						                  		<a href="http://support.niulinx.com/" class="btn btn-danger" style="font-size: 11px; ">Ayuda</a>
						                	</div>
						              	</div>
              						</div>
             					</div> <!-- end widget1 -->
          			</div> <!-- end .row -->
        		</div>
      		</div>
    	</footer>
		</div>

	@yield('scripts')
</body>
</html>
