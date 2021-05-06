@extends('layouts.app')

@section('titoloPagina','Products')

@section('content')
    pagina di prodotti
    @foreach ($pastas as $pasta)
    <div>
        {{$pasta['titolo']}}
    </div>
    @endforeach
@endsection