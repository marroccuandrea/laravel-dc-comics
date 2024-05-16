@extends('layout.main')

@section('content')
    <h1 class="my-5">Fumetti</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Serie</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Data di uscita</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->series }}</td>
                                <td>{{ $product->type }}</td>
                                <td>{{ $product->sale_date }}</td>
                            </tr>
                        @empty
                            <h2>Nessun prodotto trovato</h2>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
