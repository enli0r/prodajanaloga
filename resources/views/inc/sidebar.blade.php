<div class="sidebar">
  <form action="{{route('posts')}}" method="POST" class="filterPostsForm">
    @csrf

    <label>Choose the game</label>
    <div class="form-group">
      <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="1">
          <label class="form-check-label" for="flexRadioDefault1">League of Legends</label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="2">
          <label class="form-check-label" for="flexRadioDefault2">Counter Strike:Global Offensive</label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="3">
          <label class="form-check-label" for="flexRadioDefault3">Fortnite</label>
      </div>
  </div>


    <div class="form-group">
        <select class="form-control" aria-label="Default select example" name="division">
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


    <div class="form-group">
      <label>Enter price range</label>

      <label for="minPrice">Min</label>
      <input type="number" name="minPrice">

      <label for="maxPrice">Max</label>
      <input type="number" name="maxPrice">
    </div>




    <button type="submit" class="btn btn-primary w-100">Filter</button>
</form>
</div>