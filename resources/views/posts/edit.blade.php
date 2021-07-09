<x-layout>
    <div id="createPost">
        <x-navbar />
        <div class="container formContainer">

                <div class="tab">
                    @foreach ($games as $game)
                        <x-tablink :gameName="$game->name" class="{{ $post->game->name == $game->name ? 'active' : 'disabled' }}"/>
                    @endforeach
                </div>

                <div class="tabcontent-edit">
                    <x-forms.editForm :post="$post" :accountInfo="$accountInfo" :divisions="$divisions" :servers="$servers" :ranks="$ranks"/>
                </div>
        </div>
    </div>
</x-layout>