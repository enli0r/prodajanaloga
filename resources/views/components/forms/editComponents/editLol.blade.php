@props(['accountInfo' , 'divisions', 'servers'])

{{-- Server --}}
<div class="form-group radio-group">
    @foreach ($servers as $server)
        <div class="form-check" required>
            <input class="form-check-input" type="radio" name="server" id="server_{{ $server }}" value="{{ $server }}" @if ($accountInfo['server'] == "$server") checked @endif>
            <label class="form-check-label radioLabel" for="server_{{ $server }}">{{ $server }}</label>
        </div>
    @endforeach
</div>


{{-- Division --}}
<div class="form-group">
    <select class="form-control formField" aria-label="Default select example" name="division" required>
        <option >Choose account divison</option>
            @foreach ($divisions as $division)
                <option @if ($accountInfo['division'] == "$division") selected @endif value="{{ $division }}">{{ $division }}</option>
            @endforeach
    </select>
</div>
