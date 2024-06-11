@extends('layout.app')

@section('content')
    @foreach ($movies as $movie)
        <div class="card">
            <div>
                <img src="{{ $movie->image }}" alt="">
            </div>
            <div class="container_hover">

                <div class="container_top">
                    <h2>{{ $movie->title }}</h2>
                    @if ($movie->title != $movie->original_title)
                        <h5>{{ $movie->original_title }}</h5>
                        <span>{{ substr($movie->date, 0, 4) }}</span>
                    @endif


                </div>
                <div class="container_main">

                </div>
                <div class="container_footer">

                    <div class="inner_div">
                        <p>{{ $movie->nationality }}</p>
                        <span>{{ $movie->vote }}</span>
                    </div>
                </div>


            </div>


        </div>
    @endforeach
@endsection
