<x-forms.createComponents.createFormLayout>

    <x-slot name="attributes">
        
        {{-- Server --}}


        <div class="form-group radio-group">
            @foreach ($servers as $server)
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="server" id="{{ $server."_id" }}" value="{{ $server }}" required>
                    <label class="form-check-label radioLabel" for="{{ $server."_id" }}">{{ $server }}</label>
                </div>
            @endforeach
        </div>


        {{-- Division --}}
        <div class="form-group">
            <select class="form-control formField" aria-label="Default select example" name="division" required>
                <option selected value="not_selected">Choose account divison</option>
                    @foreach ($divisions as $division)
                        <option value="{{ $division }}">{{ $division }}</option>
                    @endforeach
            </select>
        </div>

    </x-slot>

    

    <x-slot name="submitButton">

        <x-forms.createComponents.submitButton value='1' />
        
    </x-slot>


</x-forms.createComponents.createFormLayout>

