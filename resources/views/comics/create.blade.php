@extends('layouts.base')

@section('pageContent')
    <h1>Aggiungi Un Nuovo Fumetto</h1>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="title">Titolo Fumetto</label>
          <input type="text" class="form-control" @error('title') is-invalid @enderror id="title" name="title" value="{{old("title")}}">
            @error('title')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series">Serie</label>
            <input type="text" class="form-control" @error('series') is-invalid @enderror id="series" name="series" value="{{old("series")}}">
            @error('series')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type">Genere Letterario</label>
            <input type="text" class="form-control" @error('type') is-invalid @enderror id="type" name="type" value="{{old("type")}}">
            @error('type')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image">Copertina</label>
            <input type="text" class="form-control" @error('image') is-invalid @enderror id="image" name="image" placeholder="url img" value="{{old("image")}}">
            @error('image')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>      
        <div class="mb-3">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" @error('price') is-invalid @enderror id="price" name="price" value="{{old("price")}}">
            @error('price')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date">Data</label>
            <input type="text" class="form-control" @error('sale_date') is-invalid @enderror id="sale_date" name="sale_date" placeholder="YYYY-mm-gg" value="{{old("sale_date")}}">
            @error('sale_date')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="description"></label>
            <textarea class="form-control" @error('description') is-invalid @enderror placeholder="Descrizione Fumetto" id="description" name="description" rows="8" value="{{old("description")}}"></textarea>
            @error('description')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="my-5 btn btn-info">Aggiungi</button>
        <a href="{{route('comics.index')}}"><button type="button" class="btn btn-primary">Back to Home</button></a>
    </form>
@endsection