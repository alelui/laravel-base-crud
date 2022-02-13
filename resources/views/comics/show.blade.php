@extends('layouts.base')

@section('pageContent')
    <h1>{{$comic->title}}</h1>
    <h2>{{$comic->series}}</h2>
    <h5>{{$comic->sale_date}}</h5>
    <div class="img-box">
        <img src="{{$comic->image}}" alt="{{$comic->title}}">
    </div>
    <p>{{$comic->price}} $</p>
    <div class="text">
        <p>{{$comic->description}}</p>
    </div>
    <div class="return-btn">
        <a href="{{route('comics.index')}}"><button type="button" class="btn btn-primary">Back to Home</button></a>
        <a href="{{route('comics.edit', $comic->id)}}"><button type="button" class="btn btn-success">Modify</button></a>
    </div>
    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger my-5 btn btn-info">dev/null</button>
    </form>
@endsection