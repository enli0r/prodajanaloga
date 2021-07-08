@props(['post'])

<div class="card {{$post->game->slug}}">
    <img class="card-img-top" src="{{$post->game->image}}"  alt="game_img">

    <div class="card-body">
        <a href="{{route('posts.show', $post->id)}}"><h4 class="post-title">{{$post->title}}</h4></a>
        <p class="card-text">Username: {{$post->username}}</p>

        <p class="card-text price">Price : ${{$post->price}}</>
    </div>
</div>

