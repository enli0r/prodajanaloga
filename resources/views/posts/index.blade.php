@extends('layouts.app')

@section('content')
    @foreach ($posts as $post)
        <p>{{$post}}</p>
    @endforeach
@endsection