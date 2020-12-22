@extends('layouts.app')

@section('content')

    <h1>Prodotti</h1>
    <div class="cards-container">
        @foreach($formati as $formato)
            <div class="card">
                <img src="{{$formato['src']}}" alt="{{$formato['titolo']}}">
                <div class="layer">
                    <a href="#">{{$formato['titolo']}}</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection

@section('page-title', 'La Molisana - Prodotti')
