<!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

    <meta name="description" content="">
    <meta name="author" content="Mario Palacios">
    <title>Gana dinero</title>
    {!! HTML::style('public/css/global.css') !!}
    {!! HTML::style('public/css/forum.css') !!}
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

<div class="row" >
    <div id="main" style="width: 90%; margin: 20px auto">
        @yield('content')
    </div>

</div>

@yield('scripts')
</body>
</html>