<x-layout>
    <header>
        <x-navbar />
        <x-carousel />
    </header>
        <main>
            <div class="container card-container d-flex justify-content-between">
                <a href="{{ route('posts.create') }}">
                    <div class="card flex-row">
                            <img src="https://i.ibb.co/yRcKfqT/3123123.jpg" alt="" class="card-img-top">



                            <div class="card-body">
                                <p class="card-text">
                                    Create new post
                                    <span class="material-icons-outlined">
                                        </span>
                                </p>
                            </div> 
                        
                    </div>
                </a>

                <a href="{{ route('posts') }}">
                    <div class="card flex-row">
                            <img src="https://i.ibb.co/GsMxyRh/55.jpg" alt="" class="card-img-top">

                            <div class="card-body">
                                <p class="card-text">
                                    Look through the posts
                                </p>
                            </div>
                    </div>
                </a> 

            </div>
        </main>
</x-layout>
