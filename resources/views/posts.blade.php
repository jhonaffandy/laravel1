{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')

<h1 class="mb-5">{{ $title }}</h1>

@if ($posts->count())

<div class="card mb-3">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h3 class="card-title">{{ $posts[0]->title }}</h3>
    <p>
      <small class="text-muted">
        By. <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{
          $posts[0]->author->name
          }}</a> in
        <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name
          }}</a> {{ $posts[0]->created_at->diffForHumans() }}
      </small>
    </p>
    <p class="card-text">{{$posts[0]->excerpt}}</p>
    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-sm btn-primary">Read More..</a>
  </div>
</div>

@else
<p class="text-center fs-4">No post found.</p>
@endif

@foreach ($posts as $item)
<article class="mb-5 border-bottom pb-4">
  <h2><a href="/posts/{{ $item->slug }}" class="text-decoration-none">{{ $item->title }}</a></h2>

  <p>By. <a href="/authors/{{ $item->author->username }}" class="text-decoration-none">{{ $item->author->name }}</a> in
    <a href="/categories/{{ $item->category->slug }}" class="text-decoration-none">{{ $item->category->name }}</a>
  </p>
  {{-- {!! $item->body !!} --}}

  <p>{{ $item->excerpt }}</p>

  <a href="/posts/{{ $item->slug }}" class="text-decoration-none">Read More..</a>
</article>
@endforeach

@endsection