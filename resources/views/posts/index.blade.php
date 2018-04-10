@extends('layouts.app')

@section('content')
    <h1 class="mb-3">Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="alert alert-info mb-5">
                <img style="" src="/storage/cover_images/{{$post->cover_image}}">
                <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                {{ $post->price }}
                <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
    <p>No posts found</p>
    @endif
@endsection