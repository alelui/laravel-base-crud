@extends('layouts.base')

@section('pageContent')
    <h1>Aggiungi Un Nuovo Fumetto</h1>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="title">Titolo Fumetto</label>
          <input type="text" class="form-control" id="title" name="title" value="{{old("title")}}">
        </div>
        <div class="mb-3">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{old("series")}}">
        </div>
        <div class="mb-3">
            <label for="type">Genere Letterario</label>
            <input type="text" class="form-control" id="type" name="type" value="{{old("type")}}">
        </div>
        <div class="mb-3">
            <label for="image">Copertina</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="url img" value="{{old("image")}}">
        </div>      
        <div class="mb-3">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" value="{{old("price")}}">
        </div>
        <div class="mb-3">
            <label for="sale_date">Data</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="YYYY-mm-gg" value="{{old("sale_date")}}">
        </div>
        <div class="form-floating">
            <label for="description"></label>
            <textarea class="form-control" placeholder="Descrizione Fumetto" id="description" name="description" rows="8" value="{{old("description")}}"></textarea>
        </div>
        <button type="submit" class="my-5 btn btn-info">Aggiungi</button>
        <a href="{{route('comics.index')}}"><button type="button" class="btn btn-primary">Back to Home</button></a>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection