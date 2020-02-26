@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Dettagli prodotto</h1>
            </div>
        </div>
        <div class="card">
            <div class="card-header">{{ $product->name }}</div>

            <div class="card-body">
                <p>Descrizione: {{ $product->description }}</p>
                <p>Prezzo: {{ $product->price }}</p>
            </div>
        </div>
    </div>
@endsection
