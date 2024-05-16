@extends('layout.main')

@section('content')
  <div class="container">
    <div class="row">

      @forelse ($comics as $comic)
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>
              <p class="card-text">{{$comic->series}}</p>
              <p class="card-text">{{$comic->price}}</p>
              <a href="{{route('comics.show'), $comic}}" class="btn btn-primary">Dettagli</a>
            </div>
          </div>
        </div>

      @empty
        <h3>Non c'è niente...</h3>

      @endforelse

    </div>
  </div>
@endsection

@section('title')
  Comics
@endsection
