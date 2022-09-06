@extends("layouts/main")

@section("title")
    Главная
@endsection


@section("content")
    <div class="btn-group mb-4" role="group" aria-label="Basic outlined example">
        @foreach($categories as $category)

            <a
                href="{{ route("getCategory", $category->article) }}"
                class="btn btn-outline-primary"
            >{{ $category->title }}</a>
        @endforeach
    </div>
    @foreach($posts as $post)
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{ route("getCategory", $post->category->article) }}">{{ $post->category->title }}</a>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->description }}</p>
                <a href="{{ Route("getPost", ["article" => $post->article]) }}" class="btn btn-primary">Читать далее</a>
            </div>
        </div>
    @endforeach

    {{ $posts->links('vendor.pagination.bootstrap-4') }}
{{--    <nav aria-label="Page navigation example">--}}
{{--        <ul class="pagination">--}}
{{--            <li class="page-item"><a class="page-link" href="#">Previous</a></li>--}}
{{--            <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--            <li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
{{--        </ul>--}}
{{--    </nav>--}}
@endsection
