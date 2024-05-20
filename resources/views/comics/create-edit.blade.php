
@extends('layout.main')

@section('content')

<div class="container mb-5 ">
    <div class="row">
        <div class="col"><h1 class="mb-5">Stai modificando: {{$comic->title}}</h1></div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger " role="alert">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <div class="row">
        <div class="col">
            <form action="{{route('comics.update', $comic)}}" method="post">
               @csrf
               @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label ">Titolo</label>
                    <input
                      type="text"
                      name="title"
                      id="title"
                      class="form-control @error('title') is-invalid @enderror"
                      value="{{old('title',$comic->title)}}">
                      @error('title')
                          <small class="text-danger">
                            {{$message}}
                          </small>
                      @enderror
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label ">Immagine</label>
                    <input type="text" name="thumb" id="thumb" class="form-control" value="{{old('thumb',$comic->thumb)}}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label ">Prezzo</label>
                    <input
                      type="text"
                      name="price"
                      id="price"
                      class="form-control @error('price') is-invalid @enderror"
                      value="{{old('price',$comic->price)}}">
                      @error('price')
                      <small class="text-danger">
                        {{$message}}
                      </small>
                      @enderror
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label ">Serie</label>
                    <input
                      type="text"
                      name="series"
                      id="series"
                      class="form-control @error('series') is-invalid @enderror"
                      value="{{old('series',$comic->series)}}">
                      @error('series')
                        <small class="text-danger">
                        {{$message}}
                        </small>
                        @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label ">Data di uscita</label>
                    <input type="text"
                    name="sale_date"
                    id="sale_date"
                    class="form-control @error('sale_date') is-invalid @enderror"
                    value="{{old('sale_date',$comic->sale_date)}}">
                    @error('sale_date')
                    <small class="text-danger">
                      {{$message}}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label ">Tipo</label>
                    <input
                      type="text"
                      name="type"
                      id="type"
                      class="form-control @error('sale_date') is-invalid @enderror"
                      value="{{old('type',$comic->type)}}">
                      @error('type')
                        <small class="text-danger">
                        {{$message}}
                        </small>
                     @enderror
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label ">Artisti</label>
                    <input
                      type="text"
                      name="artists"
                      id="artists"
                      class="form-control"
                      value="{{old('artists',$comic->artists)}}">
                </div>

                <div class="mb-3">
                    <label for="c" class="form-label ">Scrittori</label>
                    <input type="text" name="writers" id="writers" class="form-control" value="{{old('writers',$comic->writers)}}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label ">Descrizione</label>
                    <textarea name="description" id="description" class="form-control" value="">{{old('description',$comic->description)}}</textarea>
                </div>

            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-warning" id="aggiorna">Aggiorna</button>

                {{-- @include('partials.formdelete') --}}
            </div>

    </div>
</div>

@endsection

@section('title')
   Nuovo Comic
@endsection
