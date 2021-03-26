@extends('layouts.app')

@section('content')
    @include('inc.navbar')
    @include('inc.filterWindow')

    <div class="posts-body">
        <div class="container posts-container">
            @foreach ($posts as $post)

                <div class="card"> 
                    @if ($post->game_id == 1)
                        <img class="card-img-top" src="https://i.ibb.co/x8Kqd1c/lol-post-slika.jpg" alt="lol_slika">    
                    @endif

                    @if ($post->game_id == 2)
                        <img src="https://i.ibb.co/VjZH79Y/csgo-post-slika.jpg" alt="lol_slika">
                    @endif

                    @if ($post->game_id == 3)
                        <img src="https://i.ibb.co/NY6WXyL/fortnite-post-slika.jpg" alt="fortnite_slika">
                    @endif

                    <div class="card-body">
                        <h4 class="post-title">{{$post->title}}</h4>
                        <p class="card-text">Username: {{$post->username}}</p>

                        @if ($post->game_id == 1)
                            <p class="card-text">Division:</p>
                        @endif

                        @if ($post->game_id == 2)
                            <p class="card-text">Rank:</p>
                        @endif

                        @if ($post->game_id == 3)
                            <p class="card-text">Level:</p>
                        @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection


