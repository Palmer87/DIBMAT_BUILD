@extends('layouts.backend.base')

@section('title', $article->titre ?? 'Article')

@section('content')
<style>
    .text-orange {
    color: #EC7100;
}
.btn-orange {
    background-color: #EC7100;
    color: white;
}
.btn-orange:hover {
    background-color: #cf5d00;
}

</style>
<div class="container py-4">

    <a href="{{ route('articles.index') }}" class="btn btn-orange mb-3">
        &larr; Retour aux articles
    </a>

    <div class="card shadow-sm border-0">
        <img src="{{ url($article->image) }}" class="card-img-top" alt="Image de l'article" height="50" width="50">
    
        <div class="card-body">
            <h1 class="card-title h3 fw-bold text-orange">
                {{ $article->titre }}
            </h1>

            <hr>

            <div class="card-text text-dark" style="white-space: pre-line;">
                {!! $article->contenu !!}
            </div>
        </div>
    </div>

</div>
@endsection
