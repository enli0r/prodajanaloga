<x-layout>
    <div id="createPost">
        <x-navbar />
        <div class="container formContainer">
    
            <div class="tab">
                <span class="tablinks" onclick="openForm(event, 'lol')">League of Legends</span>
                <span class="tablinks" onclick="openForm(event, 'csgo')">Counter Strike:Global Offensive</span>
                <span class="tablinks" onclick="openForm(event, 'fortnite')">Fortnite</span>
            </div>
              
              <!-- Tab content -->
            <div id="lol" class="tabcontent">
                <x-forms.lol />
            </div>
            
            <div id="csgo" class="tabcontent">
                <x-forms.csgo />
            </div>
            
            <div id="fortnite" class="tabcontent">
                <x-forms.fortnite />
            </div>
    
        </div>
    </div>
</x-layout>

