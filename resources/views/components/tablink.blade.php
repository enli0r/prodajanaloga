@props(['gameName'])

<span {{ $attributes->merge(['class' => 'tablinks'])}}>{{$gameName}}</span>
