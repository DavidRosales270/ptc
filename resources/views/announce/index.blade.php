@extends('layouts.home')
@section('content')
<div style="position: relative;  margin: 0; padding: 0; ">
    <div style="display: inline-block; vertical-align: middle; width: 100%;  margin: 0; padding: 10px; ">
        <div class="announces">

            {!! csrf_field() !!}

            @foreach($tipos_anuncios as $tipo_anuncio)
                <div class="encanuncio">
                    <span><b>{{ $tipo_anuncio->nombre }}</b></span>
                </div>


                <div class="announce_content">
                    {!! getAnnounces($tipo_anuncio->id, $tipo_anuncio->color)  !!}
                </div>
            @endforeach

        </div>
    </div>
</div>
@stop

@section('styles')
    {!! HTML::style('public/css/style.css') !!}
    {!! HTML::style('public/css/announce.css') !!}
@stop

@section('scripts')
    {!! HTML::script('public/js/announce.js') !!}
@stop

