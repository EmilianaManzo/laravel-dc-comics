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

                   {{-- apro il tag php per fare explode che toglie il carattere che vogliamo e ci restituisce un array, è come lo split di js   --}}
                  @php
                      $artist_arr = explode(',',$comic->artists );
                      $writers_arr = explode(',',$comic->writers );
                  @endphp
                  <p class="card-text">Attori:
                    <ul>
                        @foreach ($artist_arr as $artist)
                            <li>{{$artist}}</li>
                        @endforeach
                    </ul>
                  </p>
                  <p class="card-text">Scrittori:
                    <ul>
                        @foreach ($writers_arr as $writers)
                            <li>{{$writers}}</li>
                        @endforeach
                    </ul>
                  </p>

                <a href="{{route('comics.index')}}" class="btn btn-success ">Torna ai Comics</a>

        </div>
    </div>
</div>

@endsection

@section('title')
    Details Comic
@endsection
