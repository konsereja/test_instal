@extends('app')

@section('content')

<div>
    {!! link_to_route('posts', 'published') !!} &nbsp; &nbsp; &nbsp;
     {!! link_to_route('posts.unpublished', 'unpublished') !!}&nbsp; &nbsp; &nbsp;
     {!! link_to_route('post.create', 'new') !!}&nbsp; &nbsp; &nbsp;
</div>
    @foreach($posts as $post)
        <article>
            <b ><h2>{{ $post->title }}</h2></b>
            <p>
           <b> {{ $post->excerpt }}</b>
            </p>
            <p>
                published: {{ $post->published_at }}
            </p>
        </article>
    @endforeach
@stop
