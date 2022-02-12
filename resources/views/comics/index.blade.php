@extends('layouts.base')

@section('pageContent')
    <h1>Comics List's</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Serie</th>
            <th scope="col">Prezzo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td>{{$comic->title}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->price}}€</td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection
