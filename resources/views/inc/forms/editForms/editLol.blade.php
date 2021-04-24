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

    {{-- Server --}}
    <div class="form-group radio-group">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="server" id="server_radio1" value="EUNE" required @if ($attr_attrVal['server'] == 'EUNE')
                checked
            @endif>
            <label class="form-check-label radioLabel" for="server_radio1">EUNE</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="server" id="server_radio2" value="EUWEST" @if ($attr_attrVal['server'] == 'EUWEST')
                checked
            @endif>
            <label class="form-check-label radioLabel" for="server_radio2">EUWEST</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="server" id="server_radio3" value="NA" @if ($attr_attrVal['server'] == 'NA')
                checked
            @endif>
            <label class="form-check-label radioLabel" for="server_radio3">NA</label>
        </div>
    </div>


    {{-- Division --}}
    <div class="form-group">
        <select class="form-control formField" aria-label="Default select example" name="division" required>
            <option >Choose account divison</option>
            <option @if ($attr_attrVal['division'] == 'iron') selected @endif value="iron">Iron</option>
            <option @if ($attr_attrVal['division'] == 'bronze') selected @endif value="bronze">Bronze</option>
            <option @if ($attr_attrVal['division'] == 'silver') selected @endif value="silver">Silver</option>
            <option @if ($attr_attrVal['division'] == 'gold') selected @endif value="gold">Gold</option>
            <option @if ($attr_attrVal['division'] == 'platinum') selected @endif value="platinum">Platinum</option>
            <option @if ($attr_attrVal['division'] == 'master') selected @endif value="master">Master</option>
            <option @if ($attr_attrVal['division'] == 'grandmaster') selected @endif value="grandmaster">GrandMaster</option>
            <option @if ($attr_attrVal['division'] == 'challenger') selected @endif value="challenger">Challenger</option>
          </select>
    </div>

    {{-- Description --}}
    <textarea name="description" class="form-control formField" id="description">{{$post->description}}</textarea>
    
    {{-- Price --}}
    <input type="text" class="form-control formField" id="price" name="price" placeholder="$" value="{{$post->price}}">

    {{-- PUT --}}
    <input type="hidden" name="_method" value="put"> 


    {{-- Submit --}}
    <button type="submit" name="submit" value="1" class="btn btn-primary w-100">Update</button>
</form> 
