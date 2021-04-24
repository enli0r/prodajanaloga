@extends('layouts.app')

@section('content')

<div id="createPost">
    @include('inc.navbar')
    <div class="container formContainer">

        <div class="tab">
            <span class="tablinks" onclick="openForm(event, 'lol')">League of Legends</span>
            <span class="tablinks" onclick="openForm(event, 'csgo')">Counter Strike:Global Offensive</span>
            <span class="tablinks" onclick="openForm(event, 'fortnite')">Fortnite</span>
        </div>
          
          <!-- Tab content -->
        <div id="lol" class="tabcontent">
            @include('inc.forms.lol')
        </div>
        
        
        <div id="csgo" class="tabcontent">
            @include('inc.forms.csgo')
        </div>
        
        <div id="fortnite" class="tabcontent">
            @include('inc.forms.fortnite')
        </div>

    </div>
</div>
</div>
@endsection