<!-- liat, hapus -->
@extends('post.layout')

@section('content')
<div class="container-sm">
    <div class="dropdwon d-flex justify-content-end">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kelola Artikel</button>
        <ul class="dropdown-menu">
            <li>
                <form action="/posts/{{$post->id}}/edit">
                    @csrf
                    <button class="dropdown-item">Edit</button>
                </form>
            </li>
            <li>
                <form action="/posts/{{$post->id}}" method="post" id="post">
                    @csrf
                    <button class="dropdown-item">Hapus</button>
                </form>
            </li>
        </ulc>
    </div>
    <h1>{{ $post -> title }}</h1>
    <p>{{$post -> content}}</p>
</div>
@endsection

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/posts/{{$post->id}}/edit"><button>edit</button></form>
    <form action="/posts/{{$post->id}}" method="post" id="post">
        @csrf
        <button>hapus</button>
    </form>
    <h1>{{ $post -> title }}</h1>
    <p>{{$post -> content}}</p>

</body>
</html> -->