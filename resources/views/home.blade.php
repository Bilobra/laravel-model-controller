@extends('layout.app')
@section('metaTitle','Home page')

@section('content')
    <h2>I nostri film:</h2>
    @forelse ($movies as $movie)
        <div class="container">
            <h3>Title : {{$movie->title}}</h3>
            <h4>Original Title : {{$movie->original_title}}</h4>
            <p>Nationality : {{$movie->nationality}}</p>
            <p>Date : {{$movie->date}}</p>
            <p>Vote : {{$movie->vote}}</p>
            <br>
        </div>
    @empty
        
    @endforelse
@endsection
    
