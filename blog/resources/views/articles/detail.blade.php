@extends("layouts.app")

@section("content")
    <div class="container" style="max-width: 800px">
        <div class="card mb-2">
            <div class="card-body">
                <h3 class="card-title h4">{{ $article->title }}</h3>
                <div class="text-muted" style="font-size: 0.8em">
                    {{ $article->created_at->diffForHumans() }}
                </div>
                <div class="mb-2">
                    {{$article->body}}
                </div>

                 <a href="{{ url("/articles/delete/$article->id")}}" class="btn btn-sm btn-danger">Delete</a>
                </div>
            </div>
    </div>
@endsection
