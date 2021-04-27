@extends('layouts.app')

@section('content')
    <div class="container w-30 my-5 d-flex justify-content-flex-start">
        <form action="{{route('chat.sender')}}" method="post">
            @csrf
            <input type="text" name="message">
            <button type="submit" name="submit_button">Send</button>
        </form>
    </div>
@endsection