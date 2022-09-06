@extends("layouts/main")

@section("title")
    {{ $post->title }}
@endsection

@section("content")
    <a href="/" class="btn btn-outline-primary mb-4">Назад</a>
    <article style="display: inline-block;">
        <p><b>Категория:</b> {{ $post->category["title"] }}</p>
        <p>{{ $post->description }}</p>
        <p>{{ $post->text }}</p>
    </article>
@endsection
