{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row mb-3 justify-content-center">
  <div class="col-md-6">
    <form action="/blog">
      @if (request('category'))
      <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
        <button class="btn btn-danger" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

@if ($posts->count())

<div class="card mb-3">
  @if ($posts[0]->image)
  <div style="max-height: 350px;overflow:hidden;margin:auto">
    <img src="{{ asset('storage/'. $posts[0]->image) }}" class="img-fluid" alt="{{ $posts[0]->category->name }}">
  </div>
  @else
  <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
    alt="{{ $posts[0]->category->name }}">
  @endif
  <div class="card-body text-center">
    <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{
        $posts[0]->title
        }}</a></h3>
    <p>
      <small class="text-muted">
        By. <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{
          $posts[0]->author->name
          }}</a> in
        <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{
          $posts[0]->category->name
          }}</a> {{ $posts[0]->created_at->diffForHumans() }}
      </small>
    </p>
    <p class="card-text">{{$posts[0]->excerpt}}</p>
    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-sm btn-primary">Read More..</a>
  </div>
</div>

<div class="container">
  <div class="row">
    @foreach ($posts->skip(1) as $item)
    <div class="col-sm-4 mb-3">
      <div class="card">
        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, .5)">
          <a href="/blog?category={{ $item->category->slug }}"
            class="text-decoration-none text-white">{{$item->category->name }}</a>
        </div>

        @if ($item->image)
        <img src="{{ asset('storage/'. $item->image) }}" class="img-fluid" alt="{{ $item->category->name }}">
        @else
        <img src="https://source.unsplash.com/500x500?{{ $item->category->name }}" class="card-img-top"
          alt="{{ $item->category->name }}">
        @endif

        <div class="card-body">
          <h5 class="card-title">{{ $item->title }}</h5>
          <p>By. <a href="/blog?author={{ $item->author->username }}" class="text-decoration-none">{{
              $item->author->name
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

@else
<p class="text-center fs-4">No post found.</p>
@endif

<div class="d-flex justify-content-end">
  {{ $posts->links() }}
</div>
@endsection