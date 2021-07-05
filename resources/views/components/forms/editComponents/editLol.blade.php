@props(['accountInfo'])

{{-- Server --}}
<div class="form-group radio-group">
    <div class="form-check" required>
        <input class="form-check-input" type="radio" name="server" id="server_radio1" value="EUNE" @if ($accountInfo['server'] == 'EUNE')
            checked
        @endif>
        <label class="form-check-label radioLabel" for="server_radio1">EUNE</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="server" id="server_radio2" value="EUWEST" @if ($accountInfo['server'] == 'EUWEST')
            checked
        @endif>
        <label class="form-check-label radioLabel" for="server_radio2">EUWEST</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="server" id="server_radio3" value="NA" @if ($accountInfo['server'] == 'NA')
            checked
        @endif>
        <label class="form-check-label radioLabel" for="server_radio3">NA</label>
    </div>
</div>


{{-- Division --}}
<div class="form-group">
    <select class="form-control formField" aria-label="Default select example" name="division" required>
        <option >Choose account divison</option>
        <option @if ($accountInfo['division'] == 'iron') selected @endif value="iron">Iron</option>
        <option @if ($accountInfo['division'] == 'bronze') selected @endif value="bronze">Bronze</option>
        <option @if ($accountInfo['division'] == 'silver') selected @endif value="silver">Silver</option>
        <option @if ($accountInfo['division'] == 'gold') selected @endif value="gold">Gold</option>
        <option @if ($accountInfo['division'] == 'platinum') selected @endif value="platinum">Platinum</option>
        <option @if ($accountInfo['division'] == 'master') selected @endif value="master">Master</option>
        <option @if ($accountInfo['division'] == 'grandmaster') selected @endif value="grandmaster">GrandMaster</option>
        <option @if ($accountInfo['division'] == 'challenger') selected @endif value="challenger">Challenger</option>
    </select>
</div>
