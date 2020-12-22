@extends('layouts.app')

@section('content')
    <h1>Prodotti</h1>
    @foreach($tipi_di_pasta as $tipo)
        <p>{{$tipo['titolo']}}</p>
    @endforeach
@endsection

@section('page-title', 'La Molisana - Prodotti')
