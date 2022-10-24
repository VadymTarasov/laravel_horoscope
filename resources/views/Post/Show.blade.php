
@extends('Includes.Main')
@section('content')
    <br>
<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Post - {{ $post->id }}</h1>
        <p class="lead">{{ $post->content }}</p>
        <p>Back to <a href="/">main</a>!</p>
    </div>
</main>
@endsection
