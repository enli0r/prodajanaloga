@props(['post', 'accountInfo'])

<div class="card {{$post->game->slug}}">

    <img class="card-img-top" src="{{$post->game->image}}"  alt="game_img">

    <div class="card-body">
        <a href="{{route('posts.show', $post->id)}}"><h4 class="post-title">{{$post->title}}</h4></a>

        @foreach ($accountInfo[$post->id] as $attribute=>$value)
            @if (!($attribute == 'title'))
                <p class="card-text {{ $attribute == 'price' ? 'price' : '' }}">{{ $attribute }}: {{ $value }}</p>
            @endif
        @endforeach


    </div>
</div>

