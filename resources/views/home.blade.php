@extends('layout.app')
@section('metaTitle','Home page')

@section('content')
<section class="black_section">
        <h2 class="title_section">I nostri film:</h2>
        <div class="container">
            <div class="main_content">
                @forelse ($movies as $movie)
                    <div class="card">
                        <a href="">
                            <h3>Title : {{$movie->title}}</h3>
                            <h4>Original Title : {{$movie->original_title}}</h4>
                            <p>Nationality : {{$movie->nationality}}</p>
                            <p>Date : {{$movie->date}}</p>
                            <p>Vote : {{$movie->vote}}</p>
                        </a>
                        
                    </div>
                @empty
                    <p>non ci sono elementi</p>
                @endforelse

            </div>
        </div>
    </section>
@endsection
    
