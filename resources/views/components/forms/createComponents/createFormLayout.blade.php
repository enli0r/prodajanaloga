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

    {{-- Attributes --}}
    {{ $attributes }}

    {{-- Description --}}
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control formField" id="description">{{old('description')}}</textarea>
    </div>

    {{-- Price --}}
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control formField" id="price" name="price" placeholder="$" value="{{old('price')}}">
    </div>

    {{-- Submit --}}
    {{ $submitButton }}
</form> 