@extends('layout.main')

@section('content')
    <h1 class="titolo">{{ $comic->title }}</h1>
    <a class="btn btn-warning mb-3" href="{{ route('comics.edit', $comic->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
    <div class="row">
        <div class="col-8">

            <div class="card">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">Serie: {{ $comic->series }}</p>
                <p class="card-text">Tipologia: {{ $comic->type }}</p>
                <p class="card-text">Descrizione: {{ $comic->description }}</p>
                <p class="card-text">Prezzo: {{ $comic->price }}</p>
                <p class="card-text">Data uscita: {{ $comic->sale_date }}</p>
                <p class="card-text">Disegnatori: {{ $comic->artists }}</p>
                <p class="card-text">Scrittori: {{ $comic->writers }}</p>

            </div>
            <a class="btn btn-warning my-3" href="{{ route('comics.index') }}">Torna all'elenco</a>
        </div>
        <div class="col-4">
            <img src="{{ $comic->thumb }}" class="fumetto card-img-top" alt="{{ $comic->title }}">
        </div>
    </div>
@endsection
