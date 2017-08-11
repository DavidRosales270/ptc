@extends('layouts.home')

@section('content')
<div class="container text-danger">
  	@if (Session::has('message'))
  	{{Session::get('message')}}
  	@endif
</div>
<form method="post" action="{{url('/admin/config')}}">
	<div style="display: inline-block; vertical-align: middle; width: 100%; ">
		{!! csrf_field() !!}
		<div class="col-sm-12 col-md-12" style="padding: 20px; ">
			<div class="col-sm-3 col-md-3" style="background-color: #e10019; color: #FFF; height: 50px; text-align: center; vertical-align: middle; ">
				<br />
				<span style='font-size: 13px; '><b>Edición de Tipos Publicidad</b></span>
			</div>			
		</div>
		<div class="control-group" style="width: 100%; ">
			<div class="controls controls-row" style="width: 100%; " >
				<div class="col-sm-8 col-md-8" style="max-width: 520px; margin: 0 auto; float: none; ">	
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="anuncio" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Anuncio : </label >
	                  				<input type="text" name="anuncio" id="anuncio" class="form-control" value="{{Session::get('nombre001')}}" width="60%" required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('anuncio')}}</div>
					</div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="descripcion" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Descripción : </label >
	                  				<input type="text" name="descripcion" id="descripcion" class="form-control" value="{{Session::get('descripcion001')}}" width="60%" required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('descripcion')}}</div>
					</div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="precio" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Precio del Paquete : </label >
	                  				<input type="text" name="precio" id="precio" class="form-control" value="{{Session::get('precio001')}}" width="60%" style="text-align: right; " required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('precio')}}</div>
					</div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="nVisitas" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Total Visitas : </label >
	                  				<input type="text" name="nVisitas" id="nVisitas" class="form-control" value="{{Session::get('nvisitas001')}}" width="60%" style="text-align: right; " />
				     		</div>
				        	<div class="text-danger">{{$errors->first('nVisitas')}}</div>
					</div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="nDias" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Días Publicado : </label >
	                  				<input type="text" name="nDias" id="nDias" class="form-control" value="{{Session::get('dias001')}}" width="60%" style="text-align: right; " />
				     		</div>
				        	<div class="text-danger">{{$errors->first('nDias')}}</div>
					</div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="tVisita" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Tiempo de Visita : </label >
	                  				<input type="text" name="tVisita" id="tVisita" class="form-control" value="{{Session::get('tiempovisita001')}}" width="60%" style="text-align: right; " required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('tVisita')}}</div>
					</div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="gtit1" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Titular Standard : </label >
	                  				<input type="text" name="gtit1" id="gtit1" class="form-control" value="{{Session::get('gtit1001')}}" width="60%" style="text-align: right; " required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('gtit1')}}</div>
				        </div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="gref1" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Referido Standard : </label >
	                  				<input type="text" name="gref1" id="gref1" class="form-control" value="{{Session::get('gref1001')}}" width="60%" style="text-align: right; " required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('gref1')}}</div>
					</div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="gtit2" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Titular Golden : </label >
	                  				<input type="text" name="gtit2" id="gtit2" class="form-control" value="{{Session::get('gtit2001')}}" width="60%" style="text-align: right; " required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('gtit2')}}</div>
				        </div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="gref2" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Referido Golden : </label >
	                  				<input type="text" name="gref2" id="gref2" class="form-control" value="{{Session::get('gref2001')}}" width="60%" style="text-align: right; " required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('gref2')}}</div>
					</div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="gtit3" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Titular Emerald : </label >
	                  				<input type="text" name="gtit3" id="gtit3" class="form-control" value="{{Session::get('gtit3001')}}" width="60%" style="text-align: right; " required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('gtit3')}}</div>
				        </div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="gref3" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Referido Emerald : </label >
	                  				<input type="text" name="gref3" id="gref3" class="form-control" value="{{Session::get('gref3001')}}" width="60%" style="text-align: right; " required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('gref3')}}</div>
					</div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="gtit4" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Titular Sapphire : </label >
	                  				<input type="text" name="gtit4" id="gtit4" class="form-control" value="{{Session::get('gtit4001')}}" width="60%" style="text-align: right; " required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('gtit4')}}</div>
				        </div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="gref4" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Referido Sapphire : </label >
	                  				<input type="text" name="gref4" id="gref4" class="form-control" value="{{Session::get('gref4001')}}" width="60%" style="text-align: right; " required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('gref4')}}</div>
					</div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="gtit5" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Titular Platinum : </label >
	                  				<input type="text" name="gtit5" id="gtit5" class="form-control" value="{{Session::get('gtit5001')}}" width="60%" style="text-align: right; " required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('gtit5')}}</div>
				        </div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="gref5" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Referido Platinum : </label >
	                  				<input type="text" name="gref5" id="gref5" class="form-control" value="{{Session::get('gref5001')}}" width="60%" style="text-align: right; " required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('gref5')}}</div>
					</div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="gtit6" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Titular Diamond : </label >
	                  				<input type="text" name="gtit6" id="gtit6" class="form-control" value="{{Session::get('gtit6001')}}" width="60%" style="text-align: right; " required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('gtit6')}}</div>
				        </div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="gref6" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Referido Diamond : </label >
	                  				<input type="text" name="gref6" id="gref6" class="form-control" value="{{Session::get('gref6001')}}" width="60%" style="text-align: right; " required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('gref6')}}</div>
					</div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="gtit7" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Titular Ultimate : </label >
	                  				<input type="text" name="gtit7" id="gtit7" class="form-control" value="{{Session::get('gtit7001')}}" width="60%" style="text-align: right; " required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('gtit7')}}</div>
				        </div>
					<div class="form-group" style="text-align: center; width: 100%; ">
						<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
							<label for="gref7" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%" >Referido Ultimate : </label >
	                  				<input type="text" name="gref7" id="gref7" class="form-control" value="{{Session::get('gref7001')}}" width="60%" style="text-align: right; " required  />
				     		</div>
				        	<div class="text-danger">{{$errors->first('gref7')}}</div>
					</div>
					<div class="controls controls-row" style="width: 100%;" >						
						<hr style="border: 2px solid red; padding: 0; margin: 0; background-color: red; " />
			    			<div class="form-group" style="text-align: center; width: 100%; max-width: 520px; margin-left: auto; margin-right: auto; " >
			      				<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; " >
			       					<br />
			       					<button type="submit" class="btn btn-danger" style="min-width: 150px; margin-left: 8px; margin-right: 8px; font-size: 11px;">Confirmar</button>
			        			</div>
			    			</div>
					</div>
				</div>
			</div>
	
		</div>
	</div>
</form>
@stop