@extends('layout.main')

@section('content')
    <h1 class="titolo">{{ $comic->title }}</h1>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="compilate" action="{{ route('comics.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input name="title" type="text" class="form-control" id="title"
                value="{{ old('title', $comic->title) }}">
            @error('title')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" class="form-control" id="description" rows="3">{{ old('description', $comic->description) }}</textarea>
            @error('description')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">URL Immagine</label>
            <input name="thumb" type="text" class="form-control" id="thumb"
                value="{{ old('thumb', $comic->thumb) }}">
            @error('thumb')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input name="price" type="text" class="form-control" id="price"
                value="{{ old('price', $comic->price) }}">
            @error('price')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input name="series" type="text" class="form-control" id="series"
                value="{{ old('series', $comic->series) }}">
            @error('series')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data uscita</label>
            <input name="sale_date" type="date" class="form-control" id="sale_date"
                value="{{ old('sale_date', $comic->sale_date) }}">
            @error('sale_date')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input name="type" type="text" class="form-control" id="type"
                value="{{ old('type', $comic->type) }}">
            @error('type')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Disegantore</label>
            <input name="artists" type="text" class="form-control" id="artists"
                value="{{ old('artists', $comic->artists) }}">
            @error('artists')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittore</label>
            <input name="writers" type="text" class="form-control" id="writers"
                value="{{ old('writers', $comic->writers) }}">
            @error('writers')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>

        <button class="btn btn-success" type="submit">Genera Fumetto</button>
        <button class="btn btn-warning" type="reset">Reset</button>
    </form>

    <a class="btn btn-warning my-3" href="{{ route('comics.index') }}">Torna all'elenco</a>
@endsection
