@extends('layouts.app')

@section('content')
    <div id="chatPage">
        @include('inc.navbar')
        <div class="container cnt1">
            <div class="userList">
                @foreach ($users as $user)
                    <div class="user">
                        <p>{{$user->name}}</p>
                        <p>{{$user->email}}</p>
                    </div>
                    <hr>
                @endforeach
            </div>
            
    
            <div class="currentChat-container">
                <div class="currentChat">

                </div>
            </div>
        </div>
    </div>
    
@endsection