@extends('layouts.base')

@section('pageContent')
    <h1  class="text-center m-5">Comics List's</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Serie</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td>{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->price}}€</td>
                <td><a href="{{route('comics.show', $comic->id)}}"><button type="button" class="btn btn-primary">Visualizza</button></a></td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection
