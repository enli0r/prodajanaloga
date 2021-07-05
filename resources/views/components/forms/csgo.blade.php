<form action="{{route('posts.create')}}" method="POST" class="createPostForm">
    @csrf

    {{-- Title --}}
    <div class="form-group">
        <label for="title">Post title</label>
        <input type="text" class="form-control formField" id="title" name="title" placeholder="Enter post title" value="{{old('title')}}">
    </div>

    {{-- Username --}}
    <div class="form-group">
        <label for="username">Steam Username</label>
        <input type="text" class="form-control formField" id="username" name="username" placeholder="ex: PussyDestroyer69" value="{{old('username')}}">
    </div>


    {{-- Rank --}}
    <div class="form-group">
        <select class="form-control formField" aria-label="Default select example" name="rank" required>
            <option selected value="not_selected">Choose account rank</option>
            <option value="silver">Silver</option>
            <option value="gold">Gold</option>
            <option value="mg">Master Guardian</option>
            <option value="dmg">Distinguished Master Guardian</option>
            <option value="le">Legendary Eagle</option>
            <option value="lem">Legendary Eagle Master</option>
            <option value="supreme">Supreme Master First Class</option>
            <option value="global">The Global Elite</option>
          </select>
    </div>


    {{-- Description --}}
    <textarea name="description" class="form-control formField" id="description">{{old('description')}}</textarea>
    
    {{-- Price --}}
    <input type="text" class="form-control formField" id="price" name="price" placeholder="$" value="{{old('price')}}">

    {{-- Submit --}}
    <button type="submit" name="submit" value="2" class="btn btn-primary w-100">Create</button>
</form> 