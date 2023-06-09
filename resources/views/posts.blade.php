@extends('layouts.main')

@section('container')

<h1 class="mb-5">Halaman Blog Posts</h1>

    @foreach ($posts as $item)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $item->slug }}">
                    {{ $item->title }}
                </a>
            </h2>
            {{-- <h5>By: {{ $item['author'] }}</h5> --}}
            <p>{{ $item->excerpt }}</p>
        </article>
    @endforeach

@endsection