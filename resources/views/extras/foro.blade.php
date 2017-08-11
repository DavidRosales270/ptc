@extends('layouts.home')

@section('content')
<div class="text-info">
    	@if(Session::has('message'))
        	{{Session::get('message')}}
    	@endif
</div>
<?php 
	
?>

<div style="position: relative;  margin: 0; padding: 0; ">
	<div style="display: inline-block; vertical-align: middle; width: 100%;  margin: 0; padding: 0; ">
    		{!! csrf_field() !!}
		
		foro
	</div>
	<br />
	<br />
</div>

@stop