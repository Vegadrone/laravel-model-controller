@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap">
                @forelse ($movies as $movie)
                    <div class="card m-5" style="width: 18rem;">
                        <img src="{{ $movie->poster }}" class="card-img-top" alt="Poster of:{{ $movie->title }}">
                        <div class="card-body">
                            <h2>{{ $movie->title }}</h2>
                            <h4>Original Title:{{ $movie->original_title }}</h4>
                            <h5>Nationality:{{ $movie->nationality }}</h5>
                            <h6>Release date:{{ $movie->date }}</h6>
                            <h6> Vote:{{ $movie->vote }}</h6>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>

@endsection
