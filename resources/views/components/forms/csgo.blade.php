<x-forms.createComponents.createFormLayout>

    <x-slot name="attributes">

        {{-- Rank --}}
        <div class="form-group">
            <select class="form-control formField" aria-label="Default select example" name="rank" required>
                <option selected value="not_selected">Choose account rank</option>

                @foreach ($ranks as $rank)
                    <option value="{{ $rank }}">{{ $rank }}</option>
                @endforeach

            </select>
        </div>

    </x-slot>

    <x-slot name="submitButton">

        <x-forms.createComponents.submitButton value='2' />
        
    </x-slot>

</x-forms.createComponents.createFormLayout>