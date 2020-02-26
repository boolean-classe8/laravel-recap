@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="float-left">Inserimento nuovo prodotto</h1>
            <a class="btn btn-primary float-right"
            href="{{ route('admin.products.index') }}">
                Torna alla lista di tutti i prodotti
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form class="" action="{{ route('admin.products.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Nome prodotto</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome prodotto">
                </div>
                <div class="form-group">
                    <label for="description">Descrizione prodotto</label>
                    <textarea name="description" class="form-control" id="description" rows="8" placeholder="Descrizione prodotto"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Prezzo prodotto</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Prezzo prodotto" min="0">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Inserisci prodotto">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
