@extends('layout.main')

@section('content')

<div class="container mb-5 ">
    <div class="row">
        <div class="col"><h1 class="mb-3">Inserisci nuovo Comic</h1></div>
    </div>
    <div class="row">
        <div class="col">
            @php
                $status ='test';
                $title ='';
                $thumb ='';
                $price ='';
                $series ='';
                $sale_date ='';
                $type ='';
                $artists ='';
                $writers ='';
                $description ='';
                if($status === 'test'){
                $title ='Gioconda';
                $thumb ='https://images.contentstack.io/v3/assets/blt9c15dfff665e6dc0/blte1d01c8f47ded911/88-07-55113-0_Rizzo-Bonaccorso_Per-amore-di-Monna-Lisa_COMICS.jpg';
                $price ='$30.00';
                $series ='Action Comics';
                $sale_date ='2024-05-16';
                $type ='comic book';
                $artists ='Emy Ma';
                $writers ='Emy Ma';
                $description ='Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis itaque, ipsam officia qui porro iure corporis nobis impedit molestias sit.';
                }
            @endphp
            <form action="{{route('comics.store')}}" method="post">
               @csrf
                <div class="mb-3">
                    <label for="title" class="form-label ">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{$title}}">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label ">Immagine</label>
                    <input type="text" name="thumb" id="thumb" class="form-control" value="{{$thumb}}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label ">Prezzo</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{$price}}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label ">Serie</label>
                    <input type="text" name="series" id="series" class="form-control"value="{{$series}}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label ">Data di uscita</label>
                    <input type="text" name="sale_date" id="sale_date" class="form-control"value="{{$sale_date}}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label ">Tipo</label>
                    <input type="text" name="type" id="type" class="form-control" value="{{$type}}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label ">Artisti</label>
                    <input type="text" name="artists" id="artists" class="form-control" value="{{$artists}}">
                </div>
                <div class="mb-3">
                    <label for="c" class="form-label ">Scrittori</label>
                    <input type="text" name="writers" id="writers" class="form-control" value="{{$writers}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label ">Descrizione</label>
                    <textarea name="description" id="description" class="form-control" value="">{{$description}}</textarea>
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
