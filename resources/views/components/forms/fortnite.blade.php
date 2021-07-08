<x-forms.createComponents.createFormLayout>

    <x-slot name="attributes">

        {{-- Level --}}
        <div class="form-group">
            <label for="level">Level</label>
            <input type="text" class="form-control formField" id="level" name="level" placeholder="87" value="{{old('level')}}" required>
        </div>

    </x-slot>

    <x-slot name="submitButton">

        <x-forms.createComponents.submitButton value='3' />
        
    </x-slot>

</x-forms.createComponents.createFormLayout>