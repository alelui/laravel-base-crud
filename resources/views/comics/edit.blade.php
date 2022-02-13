@extends('layouts.base')

@section('pageContent')
    <h1>Modifica Fumetto : {{$comic->title}}</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="title">Titolo Fumetto</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="type">Genere Letterario</label>
            <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
        </div>
        <div class="mb-3">
            <label for="image">Copertina</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="url img" value="{{$comic->image}}">
        </div>      
        <div class="mb-3">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="sale_date">Data</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="aaa-mm-gg" value="{{$comic->sale_date}}">
        </div>
        <div class="form-floating">
            <label for="description"></label>
            <textarea class="form-control" placeholder="Descrizione Fumetto" id="description" name="description" rows="8">{{$comic->description}}</textarea>
        </div>
        <button type="submit" class="my-5 btn btn-info">Save</button>
        <a href="{{route('comics.index')}}"><button type="button" class="btn btn-primary">Back to Home</button></a>
    </form>
@endsection