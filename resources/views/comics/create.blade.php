@extends('layout.main')

@section('content')
    <h1 class="titolo">Crea Fumetto</h1>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label fw-bold fs-5">Titolo</label>
            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                value="{{ old('title') }}">
            @error('title')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label fw-bold fs-5">Descrizione</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                rows="3">{{ old('description') }}</textarea>
            @error('description')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label fw-bold fs-5">URL Immagine</label>
            <input name="thumb" type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                value="{{ old('thumb') }}">
            @error('thumb')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label fw-bold fs-5">Prezzo</label>
            <input name="price" type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                value="{{ old('price') }}">
            @error('price')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label fw-bold fs-5">Serie</label>
            <input name="series" type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                value="{{ old('series') }}">
            @error('series')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label fw-bold fs-5">Data uscita</label>
            <input name="sale_date" type="date" class="form-control @error('sale_date') is-invalid @enderror"
                id="sale_date" value="{{ old('sale_date') }}">
            @error('sale_date')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label fw-bold fs-5">Tipo</label>
            <input name="type" type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                value="{{ old('type') }}">
            @error('type')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label fw-bold fs-5">Disegantore</label>
            <input name="artists" type="text" class="form-control @error('artists') is-invalid @enderror" id="artists"
                value="{{ old('artists') }}">
            @error('artists')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label fw-bold fs-5">Scrittore</label>
            <input name="writers" type="text" class="form-control @error('writers') is-invalid @enderror" id="writers"
                value="{{ old('writers') }}">
            @error('writers')
                <small class="text-danger fw-bolder fs-6 ">{{ $message }}</small>
            @enderror
        </div>

        <button class="btn btn-success" type="submit">Genera Fumetto</button>
        <button class="btn btn-warning" type="reset">Reset</button>
    </form>

    <a class="btn btn-warning my-3" href="{{ route('comics.index') }}">Torna all'elenco</a>
@endsection
