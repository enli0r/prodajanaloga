@extends('layouts.app')

@section('content')
    @include('inc.navbar')
    <div class="container">
        @auth
            <h1 class="m*-auto">Hello {{Auth::user()->username}}</h1>
        @endauth
    </div>
@endsection