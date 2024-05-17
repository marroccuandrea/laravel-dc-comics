@extends('layout.main')

@section('content')
    <h1 class="titolo">Crea Fumetto</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input name="title" type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">URL Immagine</label>
            <input name="thumb" type="text" class="form-control" id="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input name="price" type="text" class="form-control" id="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input name="series" type="text" class="form-control" id="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data uscita</label>
            <input name="sale_date" type="date" class="form-control" id="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input name="type" type="text" class="form-control" id="type">
        </div>
        <div class="mb-3">
            <label for="artists" class="form-label">Disegantore</label>
            <input name="artists" type="text" class="form-control" id="artists">
        </div>
        <div class="mb-3">
            <label for="writers" class="form-label">Scrittore</label>
            <input name="writers" type="text" class="form-control" id="writers">
        </div>

        <button class="btn btn-success" type="submit">Genera Fumetto</button>
        <button class="btn btn-warning" type="reset">Reset</button>
    </form>
@endsection
