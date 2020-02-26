@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="float-left">Dettagli prodotto: {{ $product->id }}</h1>
            <a class="btn btn-primary float-right"
            href="{{ route('admin.products.index') }}">
                Torna alla lista di tutti i prodotti
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $product->name }}</div>

                <div class="card-body">
                    <p>Descrizione: {{ $product->description }}</p>
                    <p>Prezzo: {{ $product->price }}</p>
                    <p>Creato il: {{ $product->created_at }}</p>
                    <p>Aggiornato il: {{ $product->updated_at }}</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-warning"
                    href="{{ route('admin.products.edit', ['product' => $product->id]) }}">
                        Modifica
                    </a>
                    <form action="{{ route('admin.products.destroy', ['product' => $product->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Cancella">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
