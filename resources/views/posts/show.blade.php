<x-layout>
    <div id="showPost">
        <x-navbar />
        <div class="container" id="gameHeader-container">
            @auth
                @if (Auth::id() == $post->user_id)
                    <div class="crud">
                        <a href="{{route('posts.edit', $post->title)}}">Edit</a>

                        {{-- DELETE --}}
                        <form action="{{route('posts.destroy', $post->id)}}" method="POST"> 
                            @csrf
                            @method('DELETE')

                            <button type="submit" name="delete" class="btn">Delete</button>
                        </form>

                    </div>
                @endif
            @endauth

            <div class="row" id="gameHeader">
                <div class="col" id="{{$post->game->slug}}_col">
                    <h1>{{$post->game->name}}</h1>
                </div>
            </div>


            {{-- Post info --}}
            <div class="postInfo ">
                <div class="account-col coll">
                    <h2>account info</h2>
                    <div class="info accountInfo">
                        @foreach ($accountInfo as 
                        $name=>$value)
                            <h4>{{$name}} : <span>{{$value}}</span></h4>
                        @endforeach
                    </div>
                </div>


                {{-- User info --}}
                <div class="user-col coll">
                    <h2>user info</h2>
                    <div class="info userInfo">
                        <h4>Name : <span>{{$post->user->name}}</span></h4>
                        <h4>E-mail : <span>{{$post->user->email}}</span></h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>
    