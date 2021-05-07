@extends('layouts.app')

@section('titoloPagina','Dettagli')

@section('content')
    <main id="main-products">
        <h1>Dettagli</h1>
        <p><strong>Nome:</strong> {{$pasta['titolo']}}</p>
        <p><strong>Cottura:</strong> {{$pasta['cottura']}}</p>
        <p><strong>Peso:</strong> {{$pasta['peso']}}</p>
        <p><strong>Descrizione:</strong> {!!$pasta['descrizione']!!}</p>
    </main>
@endsection