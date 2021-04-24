@extends('layouts.app')

@section('content')
    @include('inc.filterWindow')

    <div class="background-container">
        @include('inc.navbar')
        <div class="posts-body">
            <div class="container posts-container">
                @foreach ($posts as $post)
                    @if ($post->game_id == 1)
                            <div class="card lol"> 
                                <img class="card-img-top" src="https://i.ibb.co/x8Kqd1c/lol-post-slika.jpg" alt="lol_slika">   
                                
                                @include('inc.cardBody')
                            </div>
                    @endif

                    @if ($post->game_id == 2)
                            <div class="card csgo"> 
                                <img src="https://i.ibb.co/VjZH79Y/csgo-post-slika.jpg" alt="lol_slika">

                                @include('inc.cardBody')
                            </div>
                    @endif

                    @if ($post->game_id == 3)
                            <div class="card fortnite"> 
                                <img src="https://i.ibb.co/NY6WXyL/fortnite-post-slika.jpg" alt="fortnite_slika">

                                @include('inc.cardBody')
                            </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection


