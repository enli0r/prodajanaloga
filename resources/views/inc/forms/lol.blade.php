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

    {{-- Server --}}
    <div class="form-group radio-group">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="server" id="server_radio1" value="EUNE" required>
            <label class="form-check-label radioLabel" for="server_radio1">EUNE</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="server" id="server_radio2" value="EUWEST">
            <label class="form-check-label radioLabel" for="server_radio2">EUWEST</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="server" id="server_radio3" value="NA">
            <label class="form-check-label radioLabel" for="server_radio3">NA</label>
        </div>
    </div>


    {{-- Division --}}
    <div class="form-group">
        <select class="form-control formField" aria-label="Default select example" name="division" required>
            <option selected value="not_selected">Choose account divison</option>
            <option value="iron">Iron</option>
            <option value="bronze">Bronze</option>
            <option value="silver">Silver</option>
            <option value="gold">Gold</option>
            <option value="platinum">Platinum</option>
            <option value="master">Master</option>
            <option value="grandmaster">GrandMaster</option>
            <option value="challenger">Challenger</option>
          </select>
    </div>

    {{-- Description --}}
    <textarea name="description" class="form-control formField" id="description">{{old('description')}}</textarea>
    
    {{-- Price --}}
    <input type="text" class="form-control formField" id="price" name="price" placeholder="$" value="{{old('price')}}">

    {{-- Submit --}}
    <button type="submit" name="submit" value="1" class="btn btn-primary w-100">Create</button>
</form> 