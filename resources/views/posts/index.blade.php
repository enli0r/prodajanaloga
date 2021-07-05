<x-layout>
    <div class="background-container">
        <x-navbar />
        <div class="container d-flex justify-content-end" id="search-container">
            <x-search />
        </div>
        <div class="posts-body">
            <div class="container posts-container">
                @foreach ($posts as $post)
                    <x-postCard :post="$post"/>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
