@extends('layouts.base')

@section('pageContent')
    <h1>{{$comic->title}}</h1>
    <div class="img-box">
        <img src="{{$comic->image}}" alt="{{$comic->title}}">
    </div>
    <div class="text">
        <p>{{$comic->description}}</p>
    </div>
    <div class="return-btn">
        <a href="{{route('comics.index')}}"><button type="button" class="btn btn-primary">Back to Home</button></a>
    </div>
@endsection