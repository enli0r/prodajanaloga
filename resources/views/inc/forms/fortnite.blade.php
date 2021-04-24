<form action="{{route('posts.create')}}" method="POST" class="createPostForm">
    @csrf

    {{-- Title --}}
    <div class="form-group">
        <label for="title">Post title</label>
        <input type="text" class="form-control formField" id="title" name="title" placeholder="Enter post title" value="{{old('title')}}">
    </div>

    {{-- Username --}}
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control formField" id="username" name="username" placeholder="ex: PussyDestroyer69" value="{{old('username')}}">
    </div>

    {{-- Level --}}
    <div class="form-group">
        <label for="level">Level</label>
        <input type="text" class="form-control formField" id="level" name="level" placeholder="87" value="{{old('level')}}" required>
    </div>


    {{-- Description --}}
    <textarea name="description" class="form-control formField" id="description">{{old('description')}}</textarea>
    
    {{-- Price --}}
    <input type="text" calass="form-control formField" id="price" name="price" placeholder="$" value="{{old('price')}}">

    {{-- Submit --}}
    <button type="submit" name="submit" value="3" class="btn btn-primary w-100">Create</button>
</form> 