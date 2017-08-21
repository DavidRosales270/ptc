<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Dashboard</title>


    {{-- For production, it is recommended to combine following styles into one. --}}
    {!! HTML::style('public/assets/css/bootstrap.min.css') !!}
    {!! HTML::style('public/assets/css/font-awesome.min.css') !!}
    {!! HTML::style('public/assets/css/metisMenu.css') !!}
    {!! HTML::style('public/assets/css/sweetalert.css') !!}
    {!! HTML::style('public/assets/css/bootstrap-social.css') !!}
    {!! HTML::style('public/assets/css/app.css') !!}

    @yield('styles')
</head>
<body>
   <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container" style="margin: 0; padding: 0; width: 100%; font-size:11px; ">
		<header class="row" style="margin: 0; padding: 0; width: 100%; background-color: #FFF; padding-top: 12px; padding-bottom: 12px;">
			<div class="row" style="margin: 0; padding: 0; width: 100%;">
          			<div class="col-sm-6 col-md-6" style="">
					<a href="/"><img src="{{ url('/public/imgs/logo.png') }}" alt="" height="56" width="229"></a>
				</div>
				<div class="col-sm-6 col-md-6" style="text-align: center; padding-top: 20px; padding-right: 20px;  ">
					@if (!Auth::check() || Auth::user()->name != "admin")
						<a href="../anuncios" class="btn btn-danger" style="font-size: 11px; ">Ver Anuncios</a>
					@else
					@endif
					<a href="../foro" class="btn btn-danger" style="font-size: 11px; ">Foro</a>
					
					@if (Auth::check())
						@if (Auth::user()->name == "admin")
							<a href="../admin/config" class="btn btn-danger" style="font-size:11px; ">Configuración</a>
						@else							
						@endif
						<a href="../auth/logout" class="btn btn-danger" style="font-size:11px; ">Cerrar Sesión</a>
					@else
						<a href="../auth/register" class="btn btn-danger" style="font-size:11px; ">Registrese</a>
						<a href="../auth/login" class="btn btn-danger" style="font-size: 11px; ">Iniciar Sesión</a>
					@endif
				</div>
			</div>
	    	</header>
	</div>
	<hr style="background-color: red; border: 4px solid red; padding: 0; margin: 0; " />
    </nav>

    @include('partials.sidebar')

    <div id="page-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>

    {{-- For production, it is recommended to combine following scripts into one. --}}
    {!! HTML::script('public/assets/js/jquery-2.1.4.min.js') !!}
    {!! HTML::script('public/assets/js/bootstrap.min.js') !!}
    {!! HTML::script('public/assets/js/metisMenu.min.js') !!}
    {!! HTML::script('public/assets/js/sweetalert.min.js') !!}
    {!! HTML::script('public/assets/js/delete.handler.js') !!}
    {!! HTML::script('public/assets/plugins/js-cookie/js.cookie.js') !!}
    <script type="text/javascript">
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });
    </script>

    {!! HTML::script('public/assets/js/as/app.js') !!}
    @yield('scripts')
</body>
</html>