@extends('layout.main')

@section('content')

<div class="container mb-5 ">
    <div class="row">
        <div class="col"><h1 class="mb-5">Stai modificando: {{$comic->title}}</h1></div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{route('comics.update', $comic)}}" method="post">
               @csrf
               @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label ">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{$comic->title}}">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label ">Immagine</label>
                    <input type="text" name="thumb" id="thumb" class="form-control" value="{{$comic->thumb}}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label ">Prezzo</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{$comic->price}}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label ">Serie</label>
                    <input type="text" name="series" id="series" class="form-control"value="{{$comic->series}}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label ">Data di uscita</label>
                    <input type="text" name="sale_date" id="sale_date" class="form-control"value="{{$comic->sale_date}}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label ">Tipo</label>
                    <input type="text" name="type" id="type" class="form-control" value="{{$comic->type}}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label ">Artisti</label>
                    <input type="text" name="artists" id="artists" class="form-control" value="{{$comic->artists}}">
                </div>
                <div class="mb-3">
                    <label for="c" class="form-label ">Scrittori</label>
                    <input type="text" name="writers" id="writers" class="form-control" value="{{$comic->writers}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label ">Descrizione</label>
                    <textarea name="description" id="description" class="form-control" value="">{{$comic->description}}</textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-warning">Aggiorna</button>
                    @include('partials.formdelete')
                </div>
        </div>

    </div>
</div>

@endsection

@section('title')
   Nuovo Comic
@endsection
