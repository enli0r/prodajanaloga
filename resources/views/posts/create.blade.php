@extends('layouts.app')

@section('content')
<div class="d-flex container justify-content-center my-2 flex-column">






    <div class="col-6 bg-light border rounded-lg bg-light text-secondary p-5 align-self-center">
        

        <form action="{{route('posts.create')}}" method="POST" class="createPostForm">
            @csrf

            <div class="form-group">
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title" value="{{old('title')}}">
            </div>

            <hr>

            <h4>Choose the game</h4>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">League of Legends</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">Counter Strike:Global Offensive</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                    <label class="form-check-label" for="flexRadioDefault3">League of Legends</label>
                </div>
            </div>

            <hr>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="ex: PussyDestroyer69" value="{{old('username')}}">
            </div>

            <hr>

            <div class="form-group">
                <select class="form-control" aria-label="Default select example">
                    <option selected>Choose account divison</option>
                    <option value="1">Iron</option>
                    <option value="2">Bronze</option>
                    <option value="3">Silver</option>
                    <option value="4">Gold</option>
                    <option value="5">Platinum</option>
                    <option value="6">Master</option>
                    <option value="7">GrandMaster</option>
                    <option value="8">Challenger</option>
                  </select>
            </div>


            <textarea name="description" class="form-control" id="description"></textarea>

            
            <input type="text" class="form-control" id="price" name="price" placeholder="$" value="{{old('price')}}">




            <button type="submit" class="btn btn-primary w-100">Create</button>
        </form> 
    </div>
</div>
@endsection