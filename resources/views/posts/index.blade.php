@extends('layouts.app')

@section('content')
    @include('inc.navbar')
    @include('inc.filterWindow')

    <div class="posts-body">
        <div class="container posts-container">
            @foreach ($posts as $post)
                <div class="post"> 
                    @if ($post->game_id == 1)
                        <a href=""><img src="https://i.ibb.co/x8Kqd1c/lol-post-slika.jpg" alt="lol_slika"></a>
                        <div class="post-info">
                            <h4 class="post-title">{{$post->title}}</h4>
                            <p class="post-username">Username: {{$post->username}}</p>
                            <p class="post-division">Division:</p>
                        </div>
                    @endif

                    @if ($post->game_id == 2)
                        <a href=""><img src="https://i.ibb.co/VjZH79Y/csgo-post-slika.jpg" alt="lol_slika"></a>
                        <div class="post-info">
                            <h4 class="post-title">{{$post->title}}</h4>
                            <p class="post-username">Username: {{$post->username}}</p>
                            <p class="post-rank">Rank:</p>
                        </div>
                    @endif

                    @if ($post->game_id == 3)
                        <a href=""><img src="https://i.ibb.co/NY6WXyL/fortnite-post-slika.jpg" alt="fortnite_slika"></a>
                        <div class="post-info">
                            <h4 class="post-title">{{$post->title}}</h4>
                            <p class="post-username">Username: {{$post->username}}</p>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection