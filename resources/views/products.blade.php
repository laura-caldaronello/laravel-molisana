@extends('layouts.app')

@section('titoloPagina','Products')

@section('content')
    <main id="main-products">
        @foreach ($types as $name => $type)
            <h1>la {{$name}}</h1>
            <div class="tipo-container">
                @foreach ($type as $pasta)
                    <div class="pasta-container">
                        <div class="pasta-layover">
                            <a href="{{route('pagina-dettagli',['id' => $pasta['id']])}}">{{$pasta['titolo']}}</a>
                        </div>
                        <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                    </div>
                @endforeach
            </div>
        @endforeach
    </main>
@endsection