<form action="{{route('posts.update', $post->id)}}" method="POST" class="createPostForm">
    @csrf

    {{-- Title --}}
    <div class="form-group">
        <label for="title">Post title</label>
        <input type="text" class="form-control formField" id="title" name="title" placeholder="Enter post title" value="{{$post->title}}">
    </div>

    {{-- Username --}}
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control formField" id="username" name="username" placeholder="ex: PussyDestroyer69" value="{{$post->username}}">
    </div>

    {{-- Level --}}
    <div class="form-group">
        <label for="level">Level</label>
        <input type="text" class="form-control formField" id="level" name="level" placeholder="87" value="{{$attr_attrVal["level"]}}" required>
    </div>


    {{-- Description --}}
    <textarea name="description" class="form-control formField" id="description">{{$post->description}}</textarea>
    
    {{-- Price --}}
    <label for="price">Price</label>
    <input type="text" class="form-control formField" id="price" name="price" placeholder="$" value="{{$post->price}}">

    {{-- PUT --}}
    <input type="hidden" name="_method" value="put"> 

    {{-- Submit --}}
    <button type="submit" name="submit" value="3" class="btn btn-primary w-100">Create</button>
</form> 