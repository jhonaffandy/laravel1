{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')

<h1 class="mb-5">{{ $title }}</h1>

@if ($posts->count())

<div class="card mb-3">
  <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
    alt="{{ $posts[0]->category->name }}">
  <div class="card-body text-center">
    <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{
        $posts[0]->title
        }}</a></h3>
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


<div class="container">
  <div class="row">
    @foreach ($posts->skip(1) as $item)
    <div class="col-sm-4 mb-3">
      <div class="card">
        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, .5)">
          <a href="/categories/{{ $item->category->slug }}"
            class="text-decoration-none text-white">{{$item->category->name }}</a>
        </div>
        <img src="https://source.unsplash.com/500x500?{{ $item->category->name }}" class="card-img-top"
          alt="{{ $item->category->name }}">
        <div class="card-body">
          <h5 class="card-title">{{ $item->title }}</h5>
          <p>By. <a href="/authors/{{ $item->author->username }}" class="text-decoration-none">{{ $item->author->name
              }}</a>
          </p>
          <p class="card-text">{{ $item->excerpt }}</p>
          <a href="/posts/{{ $item->slug }}" class="btn btn-primary">Read More..</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>



@endsection