@extends('layouts.app')

@section('content')
    @include('inc.sidebar');
    <h1>HEHHEH</h1>
    @foreach ($posts as $post)
        <h1>{{$post->title}}</h1>
    @endforeach
@endsection