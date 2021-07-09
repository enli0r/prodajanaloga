<x-layout>
    <div class="background-container">
        <x-navbar />
        <div class="container d-flex" id="filter-container">

            <div x-data="{show: false}" class="categories">

                <button @click="show = !show">{{ isset($currentCategory) ? $currentCategory->name : 'Categories' }}</button>
    
                <div x-show="show" @click.away="show = false" id="dropdown" style="display: none">
                    <a href="{{ route('posts') }}">All</a>
                    @foreach ($games as $game)
                        <a href="{{ route('posts') }}?game={{ $game->name }}">{{ $game->name }}</a>
                    @endforeach
                    
                </div>
            </div>

            <x-search />
        </div>
        

        <div class="posts-body">
            <div class="container posts-container">
                @foreach ($posts as $post)
                    <x-postCard :post="$post" :accountInfo="$accountInfo"/>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
