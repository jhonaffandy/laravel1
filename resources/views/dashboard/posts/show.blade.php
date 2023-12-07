@extends('dashboard.layout.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-sm btn-success"><span data-feather="arrow-left"></span> Back to my
                posts</a>
            <a href="" class="btn btn-sm btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-sm bg-danger" onclick="return confirm('Are you sure?')"><span
                        data-feather='x-circle'></span>Delete</button>
            </form>

            <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" class="img-fluid mt-3"
                alt="{{ $post->category->name }}">

            <article class="my-4 fs-6">

                {!! $post->body !!}
            </article>

        </div>
    </div>
</div>

@endsection