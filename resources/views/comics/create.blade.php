@extends('layout.main')

@section('content')

<div class="container mb-5 ">
    <div class="row">
        <div class="col"><h1 class="mb-5">Inserisci nuovo Comic</h1></div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{route('comics.store')}}" method="post">
               @csrf
                <div class="mb-3">
                    <label for="title" class="form-label ">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label ">Immagine</label>
                    <input type="text" name="thumb" id="thumb" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label ">Prezzo</label>
                    <input type="text" name="price" id="price" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label ">Serie</label>
                    <input type="text" name="series" id="series" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label ">Data di uscita</label>
                    <input type="text" name="sale_date" id="sale_date" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label ">Tipo</label>
                    <input type="text" name="type" id="type" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label ">Artisti</label>
                    <input type="text" name="artists" id="artists" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label ">Scrittori</label>
                    <input type="text" name="writers" id="writers" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label ">Descrizione</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-success mb-5">Crea nuovo Comic</button>
                <button type="reset" class="btn btn-danger mb-5">Cancella</button>
            </form>
        </div>
    </div>
</div>

@endsection

@section('title')
   Nuovo Comic
@endsection
