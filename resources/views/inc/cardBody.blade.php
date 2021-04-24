<div class="card-body">
    <a href="posts/{{$post->id}}"><h4 class="post-title">{{$post->title}}</h4></a>
    <p class="card-text">Username: {{$post->username}}</p>
    
    @foreach ($attributes as $attribute)
        @if ($attribute->game_id === $post->game_id)
            @foreach ($attributeValues as $attributeValue)
                @if ($attribute->id === $attributeValue->attribute_id and $attributeValue->post_id === $post->id)
                    <p class="card-text">{{$attribute->name}} : {{$attributeValue->attribute_value}}</p>
                @endif
            @endforeach
        @endif
    
    @endforeach
    <p class="card-text price">Price : ${{$post->price}}</p>
</div>