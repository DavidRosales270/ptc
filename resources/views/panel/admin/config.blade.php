@extends('layouts.home')

@section('content')
<div class="container text-danger">
  	@if (Session::has('message'))
  	{{Session::get('message')}}
  	@endif
</div>
<form method="post" action="{{url('admin/config')}}">
	<div style="display: inline-block; vertical-align: middle; width: 100%; ">
	{!! csrf_field() !!}
	<div class="col-sm-12 col-md-12" style="padding: 20px; overflow: scroll;">
			<table border="1" align="center" style="display: inline-block; ">
				<tr style="background-color: #C12E2A; color: white; ">
					<td style="padding: 4px; " rowspan="2">Anuncio</td>
					<td style="padding: 4px; " rowspan="2">Descripción</td>					
					<td style="padding: 4px; " rowspan="2">Precio del Paquete</td>
					<td style="padding: 4px; " rowspan="2">Total Visitas</td>
					<td style="padding: 4px; " rowspan="2">Dias Publicado</td>
					<td style="padding: 4px; " rowspan="2">Tiempo de Visita</td>
					<td style="padding: 4px; text-align: center; " colspan="14" >PAGO POR VISITA</td>
					<td style="padding: 4px; " rowspan="2">Acción</td>
				</tr>
				<tr style="background-color: #C12E2A; color: white; ">
					<td style="padding: 4px; ">Titular Standard</td>					
					<td style="padding: 4px; ">Referido Standard</td>
					<td style="padding: 4px; ">Titular Golden</td>					
					<td style="padding: 4px; ">Referido Golden</td>
					<td style="padding: 4px; ">Titular Emerald</td>					
					<td style="padding: 4px; ">Referido Emerald</td>
					<td style="padding: 4px; ">Titular Sapphire</td>					
					<td style="padding: 4px; ">Referido Sapphire</td>
					<td style="padding: 4px; ">Titular Platinum</td>					
					<td style="padding: 4px; ">Referido Platinum</td>
					<td style="padding: 4px; ">Titular Diamond</td>					
					<td style="padding: 4px; ">Referido Diamond</td>
					<td style="padding: 4px; ">Titular Ultimate</td>					
					<td style="padding: 4px; ">Referido Ultimate</td>					
				</tr>
				@foreach (Session::get('resultado') as $item)
					<tr style="background-color: #FFF; ">
						<td style="padding: 4px; ">
							{{$item->nombre }}
						</td>
						<td style="padding: 4px; ">
							{{$item->descripcion}}
						</td>
						<td style="padding: 4px; text-align: right; ">
							{{$item->precio}}
						</td>
						<td style="padding: 4px; text-align: right; ">
							@if($item->vistas != -1)
								{{$item->vistas}}
							@else
							@endif
						</td>
						<td style="padding: 4px; text-align: right; ">
							@if($item->dias!= -1)
								{{$item->dias}}
							@else
							@endif
						</td>
						<td style="padding: 4px; text-align: right; ">
							{{$item->duracion}}
						</td>
						<td style="padding: 4px; text-align: right; ">
							{{$item->gtStandard}}
						</td>
						<td style="padding: 4px; text-align: right; ">
							{{$item->grStandard}}
						</td>
						<td style="padding: 4px; text-align: right; ">
							{{$item->gtGolden}}
						</td>
						<td style="padding: 4px; text-align: right; ">
							{{$item->grGolden}}
						</td>
						<td style="padding: 4px; text-align: right; ">
							{{$item->gtEmerald}}
						</td>
						<td style="padding: 4px; text-align: right; ">
							{{$item->grEmerald}}
						</td>
						<td style="padding: 4px; text-align: right; ">
							{{$item->gtSapphire}}
						</td>
						<td style="padding: 4px; text-align: right; ">
							{{$item->grSapphire}}
						</td>
						<td style="padding: 4px; text-align: right; ">
							{{$item->gtPlatinum}}
						</td>
						<td style="padding: 4px; text-align: right; ">
							{{$item->grPlatinum}}
						</td>
						<td style="padding: 4px; text-align: right; ">
							{{$item->gtDiamond}}
						</td>
						<td style="padding: 4px; text-align: right; ">
							{{$item->grDiamond}}
						</td>
						
						<td style="padding: 4px; text-align: right; ">
							{{$item->gtUltimate}}
						</td>
						<td style="padding: 4px; text-align: right; ">
							{{$item->grUltimate}}
						</td>
						<td style="padding: 4px; text-align: center; ">
							
							<a href="../admin/editta/id/{{$item->id}}/nombre/{{$item->nombre}}/desc/{{$item->descripcion}}/precio/{{$item->precio}}/visitas/@if($item->vistas != -1){{$item->vistas}}@else - @endif/dias/@if($item->dias!= -1){{$item->dias}}@else - @endif/tiempo/{{$item->duracion}}/gtit1/{{$item->gtStandard}}/gref1/{{$item->grStandard}}/gtit2/{{$item->gtGolden}}/gref2/{{$item->grGolden}}/gtit3/{{$item->gtEmerald}}/gref3/{{$item->grEmerald}}/gtit4/{{$item->gtSapphire}}/gref4/{{$item->grSapphire}}/gtit5/{{$item->gtPlatinum}}/gref5/{{$item->grPlatinum}}/gtit6/{{$item->gtDiamond}}/gref6/{{$item->grDiamond}}/gtit7/{{$item->gtUltimate}}/gref7/{{$item->grUltimate}}">Editar</a>
						</td>
					</tr>
				@endforeach
			</table>
	</div>

</form>
@stop