@extends('layout.main')

@section('content')

<div class="container mb-5 ">
    <div class="row">
        <div class="col"><h1 class="mb-3">Inserisci nuovo Comic</h1></div>
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
            {{-- lo utilizzo solo quando faccio i test e nei value degli input metto {{$title}} con ogn variabile differente --}}
            {{-- @php
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
            @endphp --}}
            <form action="{{route('comics.store')}}" method="post">
               @csrf

                <div class="mb-3">
                    <label for="title" class="form-label ">Titolo <span> * </span> </label>
                    <input
                      type="text"
                      name="title"
                      id="title"
                      class="form-control @error('title') is-invalid @enderror"
                      value="{{old('title')}}">
                      @error('title')
                          <small class="text-danger">
                            {{$message}}
                          </small>
                      @enderror

                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label ">Immagine</label>
                    <input
                      type="text"
                      name="thumb"
                      id="thumb"
                      class="form-control "
                      value="{{old('thumb')}}">

                </div>

                <div class="mb-3">
                    <label for="price" class="form-label ">Prezzo <span class="red"> * </span></label>
                    <input
                      type="text"
                      name="price"
                      id="price"
                      class="form-control @error('price') is-invalid @enderror"
                      value="{{old('price')}}">
                    @error('price')
                    <small class="text-danger">
                      {{$message}}
                    </small>
                  @enderror
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label ">Serie <span class="red"> * </span></label>
                    <input
                      type="text"
                      name="series"
                      id="series"
                      class="form-control @error('series') is-invalid @enderror"
                      value="{{old('series')}}">
                    @error('series')
                    <small class="text-danger">
                      {{$message}}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label ">Data di uscita <span class="red"> * </span></label>
                    <input
                      type="text"
                      name="sale_date"
                      id="sale_date"
                      class="form-control @error('sale_date') is-invalid @enderror"
                      value="{{old('sale_date')}}">
                    @error('sale_date')
                    <small class="text-danger">
                      {{$message}}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label ">Tipo <span class="red"> * </span></label>
                    <input
                      type="text"
                      name="type"
                      id="type"
                      class="form-control @error('type') is-invalid @enderror"
                      value="{{old('type')}}">
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
                      value="{{old('artists')}}">

                </div>

                <div class="mb-3">
                    <label for="c" class="form-label ">Scrittori</label>
                    <input
                      type="text"
                      name="writers"
                      id="writers"
                      class="form-control"
                      value="{{old('writers')}}">

                </div>

                <div class="mb-3">
                    <label for="description" class="form-label ">Descrizione</label>
                    <textarea name="description" id="description" class="form-control" value="{{old('description')}}"></textarea>

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
