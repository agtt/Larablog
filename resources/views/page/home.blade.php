@extends('layout.bootstrap3.main')

@section('content')

    @foreach ($posts as $post)
        <div class="post-preview">
            <a href="{{ URL::route('post.show', $post->slug) }}">
                <h2 class="post-title">
                    {{ $post->title }}
                </h2>
                <h3 class="post-subtitle">
                    {{ strip_tags($post->content) }}
                </h3>
            </a>
            <p class="post-meta">Posted by {!! link_to_route('user.show', $post->user->username, $post->user->username) !!} on {{ date('M d Y', strtotime($post->created_at)) }}</p>
        </div>
    @endforeach

@stop