@extends('post.layout')

@section('content')
    <h1 class="my-3">Hello, {{ auth()->user()->name }}</h1>
    @foreach ($posts as $post)
    <div class ="py-3 border-bottom">
        <h5 class="mt-auto">{{$post->title}}</h5>
        <p class="text-truncate">{{ $post->content }}</p>
        <br>
        <a href="/posts/{{ $post->id }}" class="icon-link icon-link-hover">Selanjutnya</a>
    </div>
        <!-- <li>
            <a href="/posts/{{ $post->id }}">{{$post->title}}</a>
        </li> -->
    @endforeach
@endsection

