@extends('layout.main')

@section('content')
  <div class="container">
    <div class="row row-cols-3 ">

      @forelse ($comics as $comic)
        <div class="col mb-3 ">
          <div class="card" >
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body">
              <h6 class="card-title">{{$comic->title}}</h6>
              <p class="card-text">{{$comic->series}}</p>
              <p class="card-text">{{$comic->price}}</p>
              <a href="{{route('comics.show', $comic)}}" class="btn btn-primary">Dettagli</a>
            </div>
          </div>
        </div>

      @empty
        <h3>Non c'è niente...</h3>

      @endforelse

    </div>
    <div class="paginator">
        {{$comics->links()}}
    </div>
  </div>
@endsection

@section('title')
  Comics
@endsection
