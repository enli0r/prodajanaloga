@extends('layouts.app')

@section('content')

<div id="createPost">
    @include('inc.navbar')
    <div class="container formContainer">

        {{-- LOL --}}
        @if ($post->game_id == 1)

            <div class="tab">
                <span class="tablinks active">League of Legends</span>
                <span class="tablinks disabled">Counter Strike:Global Offensive</span>
                <span class="tablinks disabled">Fortnite</span>
            </div>

            <div class="tabcontent-edit">
                @include('inc.forms.editForms.editLol')
            </div>

        @endif

        {{-- CSGO --}}
        @if ($post->game_id == 2)

            <div class="tab">
                <span class="tablinks disabled">League of Legends</span>
                <span class="tablinks active">Counter Strike:Global Offensive</span>
                <span class="tablinks disabled">Fortnite</span>
            </div>

            <div class="tabcontent-edit">
                @include('inc.forms.editForms.editCsgo')
            </div>

        @endif

        {{-- FORTNITE --}}
        @if ($post->game_id == 3)

            <div class="tab">
                <span class="tablinks disabled">League of Legends</span>
                <span class="tablinks disabled">Counter Strike:Global Offensive</span>
                <span class="tablinks active">Fortnite</span>
            </div>

            <div class="tabcontent-edit">
                @include('inc.forms.editForms.editFortnite')
            </div>
            
        @endif
    </div>
</div>
</div>
@endsection