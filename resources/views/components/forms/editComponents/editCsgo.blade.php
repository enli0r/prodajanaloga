@props(['post', 'accountInfo'])

@props(['accountInfo'])

{{-- Rank --}}
<div class="form-group">
    <select class="form-control formField" aria-label="Default select example" name="rank" required>
        <option>Choose account rank</option>
        <option @if ($accountInfo['rank'] == 'silver') selected @endif value="silver">Silver</option>
        <option @if ($accountInfo['rank'] == 'gold') selected @endif value="gold">Gold</option>
        <option @if ($accountInfo['rank'] == 'mg') selected @endif value="mg">Master Guardian</option>
        <option @if ($accountInfo['rank'] == 'dmg') selected @endif value="dmg">Distinguished Master Guardian</option>
        <option @if ($accountInfo['rank'] == 'le') selected @endif value="le">Legendary Eagle</option>
        <option @if ($accountInfo['rank'] == 'lem') selected @endif value="lem">Legendary Eagle Master</option>
        <option @if ($accountInfo['rank'] == 'supreme') selected @endif value="supreme">Supreme Master First Class</option>
        <option @if ($accountInfo['rank'] == 'global') selected @endif value="global">The Global Elite</option>
    </select>
</div>

   




