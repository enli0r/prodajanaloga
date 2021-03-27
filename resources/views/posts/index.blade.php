@extends('layouts.app')

@section('content')
    @include('inc.filterWindow')

    <div class="background-container">
        {{-- <img id="keyboard" src="https://i.ibb.co/C71mdN5/keyboard.png" alt=""> --}}
        @include('inc.navbar')
        <div class="posts-body">
            <div class="container posts-container">
                @foreach ($posts as $post)
                    @if ($post->game_id == 1)
                        <div class="card lol"> 
                            <img class="card-img-top" src="https://i.ibb.co/x8Kqd1c/lol-post-slika.jpg" alt="lol_slika">   
                            
                            <div class="card-body">
                                <h4 class="post-title">{{$post->title}}</h4>
                                <p class="card-text">Username: {{$post->username}}</p>
                                <p class="card-text">Division:</p>
                            </div>
                        </div>

                    @endif

                    @if ($post->game_id == 2)
                        <div class="card csgo"> 
                            <img src="https://i.ibb.co/VjZH79Y/csgo-post-slika.jpg" alt="lol_slika">

                            <div class="card-body">
                                <h4 class="post-title">{{$post->title}}</h4>
                                <p class="card-text">Username: {{$post->username}}</p>
                                <p class="card-text">Rank:</p>
                            </div>
                        </div>
                    @endif

                    @if ($post->game_id == 3)
                        <div class="card fortnite"> 
                            <img src="https://i.ibb.co/NY6WXyL/fortnite-post-slika.jpg" alt="fortnite_slika">

                            <div class="card-body">
                                <h4 class="post-title">{{$post->title}}</h4>
                                <p class="card-text">Username: {{$post->username}}</p>
                                <p class="card-text">Level:</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection


