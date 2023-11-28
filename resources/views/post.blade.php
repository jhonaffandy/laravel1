@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>

            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name
                    }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{
                    $post->category->name }}</a></p>

            {!! $post->body !!}

            <a href="/blog" class="d-block">Back to Posts</a>

        </div>
    </div>
</div>
{{-- <article>
    <h2>{{ $post->title }}</h2>
    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
        in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name
            }}</a></p>
    {!! $post->body !!}
</article>

<a href="/blog" class="d-block">Back to Posts</a> --}}

@endsection