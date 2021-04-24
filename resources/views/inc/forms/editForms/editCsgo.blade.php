<form action="{{route('posts.update', $post->id), $post->id}}" method="POST" class="createPostForm">
    @csrf

    {{-- Title --}}
    <div class="form-group">
        <label for="title">Post title</label>
        <input type="text" class="form-control formField" id="title" name="title" placeholder="Enter post title" value="{{$post->title}}">
    </div>

    {{-- Username --}}
    <div class="form-group">
        <label for="username">Steam Username</label>
        <input type="text" class="form-control formField" id="username" name="username" placeholder="ex: PussyDestroyer69" value="{{$post->username}}">
    </div>


    {{-- Rank --}}
    <div class="form-group">
        <select class="form-control formField" aria-label="Default select example" name="rank" required>
            <option>Choose account rank</option>
            <option @if ($attr_attrVal['rank'] == 'silver') selected @endif value="silver">Silver</option>
            <option @if ($attr_attrVal['rank'] == 'gold') selected @endif value="gold">Gold</option>
            <option @if ($attr_attrVal['rank'] == 'mg') selected @endif value="mg">Master Guardian</option>
            <option @if ($attr_attrVal['rank'] == 'dmg') selected @endif value="dmg">Distinguished Master Guardian</option>
            <option @if ($attr_attrVal['rank'] == 'le') selected @endif value="le">Legendary Eagle</option>
            <option @if ($attr_attrVal['rank'] == 'lem') selected @endif value="lem">Legendary Eagle Master</option>
            <option @if ($attr_attrVal['rank'] == 'supreme') selected @endif value="supreme">Supreme Master First Class</option>
            <option @if ($attr_attrVal['rank'] == 'global') selected @endif value="global">The Global Elite</option>
          </select>
    </div>


    {{-- Description --}}
    <textarea name="description" class="form-control formField" id="description">{{$post->description}}</textarea>
    
    {{-- Price --}}
    <input type="text" class="form-control formField" id="price" name="price" placeholder="$" value="{{$post->price}}">
    
    {{-- PUT --}}
    <input type="hidden" name="_method" value="put"> 

    {{-- Submit --}}
    <button type="submit" name="submit" value="2" class="btn btn-primary w-100">Create</button>
</form> 



