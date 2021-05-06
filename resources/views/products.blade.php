@extends('layouts.app')

@section('titoloPagina','Products')

@section('content')
    <main id="main-products">
        @foreach ($types as $type)
        <h1>la {{$type}}</h1>
        <div class="tipo-container">
            @foreach ($pastas as $pasta)
                @if ($pasta['tipo'] == $type)
                <div class="pasta-container">
                    <div class="pasta-layover">
                        <p>{{$pasta['titolo']}}</p>
                    </div>
                    <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                </div>
                @endif
            @endforeach
        </div>
        @endforeach
    </main>
@endsection