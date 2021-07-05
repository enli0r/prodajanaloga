@extends('layouts.app')

@section('content')
    <div id="chatPage">
        @include('inc.navbar')
        <div class="container userList-container">
            <div class="userList">
                @foreach ($users as $user)
                    <div class="user" id="{{$user->id}}">
                        <p>{{$user->name}}</p>
                        <p>{{$user->email}}</p>
                    </div>
                    <hr>
                @endforeach
            </div>
            
            <div id="messages">
                
            </div>
        </div>
    </div>
    
@endsection