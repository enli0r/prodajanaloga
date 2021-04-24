@extends('layouts.app')

@section('content')
    <div id="showPost">
        @include('inc.navbar');
        <div class="container" id="gameHeader-container">

            <div class="crud">
                <a href="{{route('posts.edit', $post->id)}}">Edit</a>

                <form action="{{route('posts.destroy', $post->id)}}" method="POST"> 
                    @csrf
                    @method('DELETE')

                    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                </form>

            </div>

            <div class="row" id="gameHeader">
                @if ($post->game_id == 1)
                    <div class="col" id="lol_col">
                        <h1>League of Legends</h1>
                    </div>
                @endif

                @if ($post->game_id == 2)
                    <div class="col" id="csgo_col">
                        <h1>Counter Strike:Global Offensive</h1>
                    </div>
                @endif

                @if ($post->game_id == 3)
                    <div class="col" id="fortnite_col">
                        <h1>Fortnite</h1>
                    </div>
                @endif
            </div>

            <div class="postInfo ">
                <div class="account-col coll">
                    <h2>account info</h2>
                    <div class="info accountInfo">
                        @foreach ($accountInfo as 
                        $attributeName=>$attributeValue)
                            <h4>{{$attributeName}} : <span>{{$attributeValue}}</span></h4>
                        @endforeach
                    </div>
                </div>

                <div class="user-col coll">
                    <h2>user info</h2>
                    <div class="info userInfo">
                        <h4>Name : <span>{{$user->name}}</span></h4>
                        <h4>E-mail : <span>{{$user->email}}</span></h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection