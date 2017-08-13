@extends('layouts.home')
@section('content')
 

 @if (Session::has('status'))
  <div class="alert alert-success">
   {{ Session::get('status') }}
  </div>
 @endif
 @if (count($errors) > 0)
  <div class="alert alert-danger">
   Los datos introducidos en el formulario son incorrectos.
  </div>
 @endif
 <hr />

<div class="col-sm-12 col-md-12" style="padding: 20px; ">
    <div class="col-sm-3 col-md-3" style="background-color: #e10019; color: #FFF; height: 50px; text-align: center; vertical-align: middle; ">
        <br />
        <span style='font-size: 13px; '><b>Restablecer contraseña</b></span>
    </div>
</div>
 <form method="POST" action="{{url('password/email')}}" style="padding: 20px">
  {{csrf_field()}}
     
     <div class="form-group" style="text-align: center; width: 100%; max-width: 520px; ">
					<div class="input-group pull-center" style="margin: auto; text-align: right; width: 100%; ">
						<label for="name" class="input-group-addon" style="cursor: pointer; text-align: right; font-size: 11px; min-width: 150px; " width="40%">Email : </label>
                  				 <input type="email" class="form-control" name="email" value="{{ old('email') }}" />
			     		</div>
			        	<div class="text-danger">{{$errors->first('email')}}</div>
				</div>

 
     
     <div class="form-group" >
			      		<div class="input-group ">
			       			<br>
			       			<button type="submit" class="btn btn-danger" style="min-width: 150px; margin-left: 8px; margin-right: 8px; font-size: 11px;">Enviar</button>
			        	</div>
			    	</div>
 </form>
@stop