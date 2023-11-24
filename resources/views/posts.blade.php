{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')

<h1 class="mb-5">Halaman Blog Posts</h1>

    @foreach ($posts as $item)
        <article class="mb-5 border-bottom pb-4">
            <h2><a href="/posts/{{ $item->slug }}" class="text-decoration-none">{{ $item->title }}</a></h2>

            <p>By. <a href="#" class="text-decoration-none">{{ $item->user->name }}</a> in <a href="/categories/{{ $item->category->slug }}" class="text-decoration-none">{{ $item->category->name }}</a></p>
            {{-- {!! $item->body !!} --}}

            <p>{{ $item->excerpt }}</p>

            <a href="/posts/{{ $item->slug }}" class="text-decoration-none">Read More..</a>
        </article>
    @endforeach

@endsection