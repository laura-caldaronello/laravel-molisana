@extends('layouts.app')

@section('titoloPagina','Home')

@section('css')
    <link rel="stylesheet" href="{{asset('css/app-home.css')}}">
@endsection

@section('content')
    <main id="main-home">
        <img id="img-home" src="{{asset('img/molisana-home.jpg')}}" alt="home molisana">
    </main>
@endsection