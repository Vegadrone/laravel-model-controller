@extends('layouts.main')

@section('title', 'Home')

@section('main-content')

    @forelse ($movies as $movie)
        <div class="container ">
            <div class="row d-flex">
                <div class="col-4">
                    <h2>{{ $movie->title }}</h2>
                    <h4>Original Title:{{ $movie->original_title }}</h4>
                    <h5>Nationality:{{ $movie->nationality }}</h5>
                    <h6>Release date:{{ $movie->date }}</h6>
                    <h6> Vote:{{ $movie->vote }}</h6>
                </div>
            </div>
        </div>


    @empty
    @endforelse

@endsection
