@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Bienvenido <?= Auth::user()->name ?>!
                <div class="pull-right">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('admin.index') }}"> Inicio</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>

            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-widget panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-7">
                            <div class="title">Nuevos Usuarios</div>
                            <div class="text-huge">{{  $stats['new'] }}</div>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user-plus fa-5x"></i>
                        </div>
                    </div>
                </div>
                <a href="">
                    <div class="panel-footer">
                        <span class="pull-left">Ver Todos los usuarios</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-widget panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-7">
                            <div class="title">Total Usuarios</div>
                            <div class="text-huge">{{ $stats['total'] }}</div>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                    </div>
                </div>
                <a href="">
                    <div class="panel-footer">
                        <span class="pull-left">Ver Detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-widget panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-7">
                            <div class="title">Usuarios bloqueados</div>
                            <div class="text-huge">{{ $stats['banned'] }}</div>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user-times fa-5x"></i>
                        </div>
                    </div>
                </div>
                <a href="">
                    <div class="panel-footer">
                        <span class="pull-left">Ver Detalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="panel panel-widget panel-purple">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-7">
                            <div class="title">Usuarios no confirmados</div>
                            <div class="text-huge">{{ $stats['unconfirmed'] }}</div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                    </div>
                </div>
                <a href="">
                    <div class="panel-footer">
                        <span class="pull-left">Ver Datalles</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Historial de Registro</div>
                <div class="panel-body">
                    <div>
                        <canvas id="myChart" height="403"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Ultimos Usuarios Registrados</div>
                <div class="panel-body">
                      @if (count($latestRegistrations))
                        <div class="list-group">
                            @foreach ($latestRegistrations as $user)
                                <a href="" class="list-group-item">

                                    &nbsp; <strong>{{ $user->name }}</strong>
                                    <span class="list-time text-muted small">
                                    <em>{{ $user->created_at->diffForHumans() }}</em>
                                </span>
                                </a>
                            @endforeach
                        </div>
                        <a href="" class="btn btn-default btn-block">Ver todos los usuarios</a>
                    @else
                        <p class="text-muted">Ningun usuario registrado</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')

    <script>
        var users = {!! json_encode(array_values($usersPerMonth)) !!};
        var months = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Deciembre"];
        var trans = {
            chartLabel: "Historial de Registro",
            new: "nuevo",
            user: "usuario",
            users: "usuarios"
        };
    </script>
    {!! HTML::script('public/assets/js/chart.min.js') !!}
    {!! HTML::script('public/assets/js/as/dashboard-admin.js') !!}

@stop

