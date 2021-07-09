@props(['accountInfo', 'ranks'])

{{-- Rank --}}
<div class="form-group">
    <select class="form-control formField" aria-label="Default select example" name="rank" required>
        <option>Choose account rank</option>
        @foreach ($ranks as $rank)
            <option @if ($accountInfo['rank'] == "$rank") selected @endif value="{{ $rank }}">{{ $rank }}</option>
        @endforeach
    </select>
</div>

   




