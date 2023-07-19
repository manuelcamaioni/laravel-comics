@extends('layouts.app')

@section('title', 'Welcome')
@section('main-content')


    <section class="cards-container">
        <h2 class="info-comics">Current Series</h2>

        @foreach ($comics as $comic)
            <div class="card">
                <div class="img-container">
                    <img src="{{ $comic['thumb'] }}" alt="" />
                    <div class="overlay"></div>
                    <div class="info-box">
                        <span class="price">{{ $comic['price'] }}</span>
                        <span class="type-book">{{ $comic['type'] }}</span>
                    </div>
                    <div class="abs-container"></div>
                </div>
                <h3 class="title">{{ $comic['series'] }}</h3>
            </div>
        @endforeach
        <button><a href="#">Load More</a></button>
    </section>
@endsection
