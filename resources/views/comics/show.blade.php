@extends('layout.main')

@section('content')

<div class="container mb-5 ">
    <div class="row">
        <div class="col"><h1 class="mb-5">Dettagli</h1></div>
    </div>
    <div class="row">
        <div class="col">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
        </div>
        <div class="col">
                  <h5 class="card-title mb-2">{{$comic->title}}</h5>
                  <p class="card-text">{{$comic->series}}</p>
                  <p class="card-text">{{$comic->type}}</p>
                  <p class="card-text">{{$comic->description}}</p>
                  <p class="card-text">{{$comic->sale_date}}</p>
                  <p class="card-text">{{$comic->price}}</p>
                  <p class="card-text">Attori: {{$comic->artists}}</p>
                  <p class="card-text">Scrittori: {{$comic->writers}}</p>


        </div>
    </div>
</div>

@endsection

@section('title')
    Details Comic
@endsection
