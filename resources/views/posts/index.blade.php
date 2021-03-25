@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
        <h4>{{$post->id}}</h4>
    @endforeach
@endsection