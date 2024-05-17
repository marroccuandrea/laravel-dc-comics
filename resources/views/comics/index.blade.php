@extends('layout.main')

@section('content')
    <h1 class="titolo my-5 text-center">Fumetti</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                @if (session('deleted'))
                    <div class="alert alert-info" role="alert">
                        {{ session('deleted') }}
                    </div>
                @endif
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Serie</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Data di uscita</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
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
                                <td>
                                    <a class="btn btn-success " href="{{ route('comics.show', $product->id) }}"><i
                                            class="fa-solid fa-eye"></i></a>
                                </td>
                                <td>
                                    <form action="{{ route('comics.destroy', $product->id) }}" method="POST"
                                        onsubmit="return confirm('Sei sicuro di voler eliminare questo fumetto?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fa-solid fa-explosion"></i></button>
                                    </form>
                                </td>
                                <td>
                                    <a class="btn btn-warning " href="{{ route('comics.edit', $product->id) }}"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                </td>
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
