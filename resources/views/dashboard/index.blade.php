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
        
        
        <div class="content-dashboard">
            <div class="col-md-4">
                <div class="box-item">
                    
                    <span class="head">Resumen</span>
                    
                    <hr  class="line-hr">
                </div>
                
                <div class="items">
                    
                    <p style="color: #e10019; font-weight: bold; font-size: 12px ">Tipo de Cuenta</p>
                    <hr style="border: 1px solid #B7B7B7; padding: 0; margin: 0; background-color: #B7B7B7; ">
                    
                    
                  
                    <br />
                    <table style="width: 100%;">
                        <tr>
                            <td style="width: 20%"><p class="type-account">Estandard</p></td>
                            <td style="width: 80%; text-align: right"><p>Desde: {{ $user->created_at->format('Y/m/d') }} <a href=""><i class="glyphicon glyphicon-plus"></i></a></p></td>
                        </tr>
                    </table>
                </div>
                
                
                <div class="items">
                    
                    <p style="color: #e10019; font-weight: bold; font-size: 12px ">Anuncios Vistos</p>
                    <hr style="border: 1px solid #B7B7B7; padding: 0; margin: 0; background-color: #B7B7B7; ">
                    
                    
                  
                    <br />
                    <table style="width: 100%;">
                        <tr>
                            <td style="width: 20%"><p class="type-account">Usted:</p></td>
                            <td style="width: 80%; text-align: right"><p>{{ $total_click }}</p></td>
                        </tr>
                        <tr>
                            <td style="width: 20%"><p class="type-account">Referidos:</p></td>
                            <td style="width: 80%; text-align: right"><p>0</p></td>
                        </tr>
                    </table>
                </div>
                
                <div class="items">
                    
                    <p style="color: #e10019; font-weight: bold; font-size: 12px ">Cuenta</p>
                    <hr style="border: 1px solid #B7B7B7; padding: 0; margin: 0; background-color: #B7B7B7; ">
                    
                    
                  
                    <br />
                    <table style="width: 100%;">
                        <tr>
                            <td style="width: 50%"><p class="type-account">Saldo principal</p></td>
                            <td style="width: 50%; text-align: right"><p>$ 0.0026 <a href=""><i class="glyphicon glyphicon-plus"></i></a></p></td>
                        </tr>
                        <tr>
                            <td style="width: 50%"><p class="type-account">Saldo Alquiler</p></td>
                            <td style="width: 50%; text-align: right"><p>$ 0.0000</td>
                        </tr>
                    </table>
                </div>
                
                
                <div class="items">
                    
                    <p style="color: #e10019; font-weight: bold; font-size: 12px ">Otros</p>
                    <hr style="border: 1px solid #B7B7B7; padding: 0; margin: 0; background-color: #B7B7B7; ">
                    
                    
                  
                    <br />
                    <table style="width: 100%;">
                        <tr>
                            <td style="width: 50%"><p class="type-account">Points</p></td>
                            <td style="width: 50%; text-align: right"><p>22 </p></td>
                        </tr>
                        
                        
                    </table>
                </div>
                
                
            </div>
            
            <div class="col-md-8">
                <div class="menu-top">
                    <a href="{{ url('dashboard/ascend') }}"  class="btn btn-success btn-sm">ascienda</a>	
                    <a href="{{ url('dashboard/announce') }}"  class="btn btn-success btn-sm">anunciese</a>	
                    <button type="button" class="btn btn-success btn-sm">referidos</button>
                    <button type="button" class="btn btn-primary btn-sm disabled">su pago</button>
                </div>
                <br />
                <div class="box-item">
                    
                    <span class="head">Sus clics en anuncios</span>
                    
                    <hr  class="line-hr">
                    
                   <div id="chartContainer" style="height: 250px; width: 100%;" class="chartContainer">
                    
                   </div>
                </div>
            </div>
            
            <div style="clear:both"></div>
            
            <br />
             
            <div class="col-md-6">
                <div class="box-item">
                    <span class="head" style="color: #E10119">Últimas entradas del historial</span>
                    <hr  class="line-hr">
                </div>
                    <table style="width:100%"  class="table">
                        <tr>
                            <td><b>2017/08/09</b> </td>
                            <td>Registro</td>
                        </tr>
                    </table>
            </div>
            
            <div class="col-md-6">
            <div class="box-item">
                    <span class="head" style="color: #E10119">Últimas noticias</span>
                    <hr  class="line-hr">
                </div>
                    <table style="width:100%;" class="table" >
                        @if(count($news))
                            @foreach($news as $new)
                            <tr>
                                <td><b>{{ $new->created->format(Y/m/d) }}</b> </td>
                                <td><a href="">{{ $new->description }}</a></td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td> No hay Noticias aun. </td>
                                
                            </tr>
                        @endif
                    </table>
            </div>
        </div>
        
        <div style="clear:both"></div>
		
				

	</div>
	<br />
	<br />
</div>


<script src="/public/js/canvasjs.min.js"></script>
<script type="text/javascript">
window.onload = function() {
		var chart = new CanvasJS.Chart("chartContainer", {
			title: {
			},
			axisX: {
				interval: 10
			},
			data: [{
				type: "line",
				dataPoints: [

                  @for($i=0; $i< 10; $i++)

				  { y: {{ $graph[$i]['total'] }}, toolTipContent: '{{ $graph[$i]['label'] }} '},
                  @endfor
				]
			}]
		});
		chart.render();
	}

</script>

<style>
.canvasjs-chart-credit { display: none}
</style>

@stop