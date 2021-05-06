@extends('layouts.app')

@section('titoloPagina','Products')

@section('content')
    {{-- <div>
        <h1>le lunghe</h1>

    </div>
    <div>
        <h1>le corte</h1>
        
    </div>
    <div>
        <h1>le cortissime</h1>
        
    </div> --}}
    @foreach ($types as $type)
        <h1>la {{$type}}</h1>
        @foreach ($pastas as $pasta)
            @if ($pasta['tipo'] == $type)
                {{$pasta['titolo']}}
            @endif
        @endforeach
    @endforeach
@endsection