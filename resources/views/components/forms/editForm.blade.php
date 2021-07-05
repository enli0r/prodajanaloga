@props(['post', 'accountInfo'])

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

    @if ($post->game_id == 1)
        <x-forms.editComponents.editLol :accountInfo="$accountInfo"/>
    @endif

    @if ($post->game_id == 2)
        <x-forms.editComponents.editCsgo  :accountInfo="$accountInfo"/>
    @endif

    @if ($post->game_id == 3)
        <x-forms.editComponents.editFortnite :accountInfo="$accountInfo"/>
    @endif


    {{-- Description --}}
    <textarea name="description" class="form-control formField" id="description">{{$post->description}}</textarea>
    
    {{-- Price --}}
    <input type="text" class="form-control formField" id="price" name="price" placeholder="$" value="{{$post->price}}">
    
    {{-- PUT --}}
    <input type="hidden" name="_method" value="put"> 

    {{-- Submit --}}
    <button type="submit" name="submit" class="btn btn-primary w-100">Update</button>
</form> 