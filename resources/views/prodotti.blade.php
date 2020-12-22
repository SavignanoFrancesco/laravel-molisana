@extends('layouts.app')

@section('content')

    <h1>Prodotti</h1>
    <div class="cards-container">
        @foreach($tipi_di_pasta as $tipo)
            <div class="card">
                <img src="{{$tipo['src']}}" alt="{{$tipo['titolo']}}">
                <div class="layer">
                    <a href="#">{{$tipo['titolo']}}</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection

@section('page-title', 'La Molisana - Prodotti')
