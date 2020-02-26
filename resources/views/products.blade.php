@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Tutti i prodotti</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <ul>
                    @forelse ($products as $product)
                        <li>
                            <a href="{{ route('products.show', ['slug' => $product->slug]) }}">
                                {{ $product->name }}
                            </a>
                        </li>
                    @empty
                        <p>Non c'è alcun prodotto</p>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
