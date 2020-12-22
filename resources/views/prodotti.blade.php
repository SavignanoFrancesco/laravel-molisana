@extends('layouts.app')

@section('content')

    <div id="products">

        <div class="container">
            @foreach($tipi as $tipo)

                <h1>{{$tipo}}</h1>

                <div class="cards-container">
                    @foreach($formati as $formato)
                        @if($formato['tipo'] == $tipo)
                            <div class="card">
                                <img src="{{$formato['src']}}" alt="{{$formato['titolo']}}">
                                <div class="layer">
                                    <a href="#">{{$formato['titolo']}}</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            @endforeach
        </div>
    </div>

@endsection

@section('page-title', 'La Molisana - Prodotti')
