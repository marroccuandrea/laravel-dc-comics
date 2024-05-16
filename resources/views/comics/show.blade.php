@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-8">


            <h5 class="card-title">{{ $comic->title }}</h5>
            <p class="card-text">Serie: {{ $comic->series }}</p>
            <p class="card-text">Tipologia: {{ $comic->type }}</p>
            <p class="card-text">Descrizione: {{ $comic->description }}</p>
            <p class="card-text">Prezzo: {{ $comic->price }}</p>
            <p class="card-text">Data uscita: {{ $comic->sale_date }}</p>
            <p class="card-text">Disegnatori: {{ $comic->artists }}</p>
            <p class="card-text">Scrittori: {{ $comic->writers }}</p>

        </div>
        <div class="col-4">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
        </div>
    </div>
@endsection
