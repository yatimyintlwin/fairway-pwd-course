@extends('layouts.app')

@section('content')
    <div class="container" style="max-width: 800px">

        {{ $articles->links() }}

        @if (session('info'))
            <div class="alert alert-info">
                {{ session('info') }}
            </div>
        @endif

        @foreach ($articles as $article)
            <div class="card mb-2">
                <div class="card-body">
                    <h3 class="card-title h4">{{ $article->title }}</h3>
                    <div class="text-muted" style="font-size: 0.8em">
                        <b class="text-success">
                            {{ $article->user->name }},
                        </b>
                        {{ $article->created_at->diffForHumans() }},
                        Category: <b>{{ $article->category->name }}</b>
                        {{ count($article->comments) }} Comments
                    </div>
                    <div class="mb-2">
                        {{ $article->body }}
                    </div>

                    <a href="{{ url("/articles/detail/$article->id") }}" class="card-link">View Detail</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
