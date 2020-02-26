@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="float-left">Tutti i prodotti</h1>
            <a class="btn btn-primary float-right"
            href="{{ route('admin.products.create') }}">
                Inserisci nuovo prodotto
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Prezzo</th>
                        <th>Slug</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->slug }}</td>
                            <td>
                                <a class="btn btn-info"
                                href="{{ route('admin.products.show', ['product' => $product->id]) }}">
                                    Visualizza
                                </a>
                                <a class="btn btn-warning"
                                href="{{ route('admin.products.edit', ['product' => $product->id]) }}">
                                    Modifica
                                </a>
                                <form action="{{ route('admin.products.destroy', ['product' => $product->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Cancella">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                Non c'è alcun prodotto
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
