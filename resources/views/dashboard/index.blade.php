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

<style type="text/css">
    .header_option {
        background-color: #e10019; 
        color: #FFF; 
        padding: 7px;
    }
    .header_option span { font-size: 13px; }
    
    .menu-dashboad { float: left; width: 20%; }
    .menu-dashboad ul {
        display: block;
        
    }
    
    .menu-dashboad ul li { list-style: none; margin-top: 5px; padding: 0}
    
    .menu-dashboad ul li a { font-size: 12px; padding: 0; }
    
    .content-dashboard { width: 79%; float: right;}
    
    .content-dashboard .menu-top {
        text-align: center; 
        width: 100%; 
        padding: 10px; 
        background-color: #DFDFE1; 
        border-radius: 5px; 
        -moz-border-radius: 5px; 
        -webkit-border-radius: 5px; margin-top: 5px;
    }
    .line-hr {
        border: 2px solid red; 
        padding: 0; 
        margin: 0; 
        margin-top: 8px;
        background-color: red;
        margin: 10px 0;
    } 
    .box-item {
        text-align: justify; 
        font-size: 14px; 
    }
    .box-item span.head {
        color: #B7B7B7; 
        font-weight: bold;
        margin: 10px 0;
    }
</style>

<div style="position: relative;  margin: 0; padding: 0; ">
	<div style="display: inline-block; vertical-align: middle; width: 100%;  margin: 0; padding: 10px; ">
    		{!! csrf_field() !!}
        
        <div class="col-md-4 menu-dashboad">
            <div class="header_option" >
				 <span><b>Global</b></span>
			</div>
            <ul>
                <li><a href=''>Resumen</a></li>
                <li><a href=''>Banners</a></li>
                <li><a href=''>Estadisticas</a></li>
            </ul>
            <div class="header_option" >
				 <span ><b>Opciones</b></span>
			</div>
            
            <ul>
                <li><a href=''>Personales</a></li>
                <li><a href=''>Anuncios</a></li>
            </ul>
            
            <div class="header_option" >
				 <span style=' font-size: 13px; '><b>Registros</b></span>
			</div>
            
            <ul>
                <li><a href=''>Historial</a></li>
                <li><a href=''>Anuncios</a></li>
            </ul>
        </div>
        
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
                            <td style="width: 80%; text-align: right"><p>Desde: 2017/08/09 <a href=""><i class="glyphicon glyphicon-plus"></i></a></p></td>
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
                            <td style="width: 80%; text-align: right"><p>22</p></td>
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
				    <button type="button" class="btn btn-success btn-sm">ascienda</button>	<button type="button" class="btn btn-success btn-sm">anunciese</button>	<button type="button" class="btn btn-success btn-sm">referidos</button>
                    <button type="button" class="btn btn-primary btn-sm">su pago</button>
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
				text: "Line Chart"
			},
			axisX: {
				interval: 10
			},
			data: [{
				type: "line",
				dataPoints: [
				  { x: 10, y: 45 },
				  { x: 20, y: 14 },
				  { x: 30, y: 20 },
				  { x: 40, y: 60 },
				  { x: 50, y: 50 },
				  { x: 60, y: 80 },
				  { x: 70, y: 40 },
				  { x: 80, y: 60 },
				  { x: 90, y: 10 },
				  { x: 100, y: 50 }
				]
			}]
		});
		chart.render();
	}

</script>
@stop