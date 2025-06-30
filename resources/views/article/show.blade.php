@extends('public.base')

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

    <a href="{{ route('public.home') }}" class="btn btn-orange mb-3">
        &larr; Retour aux articles
    </a>

    <div class="card shadow-sm border-0">
        @if ($article->image)
            <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top" alt="Image de l'article">
        @endif

        <div class="card-body">
            <h1 class="card-title h3 fw-bold text-orange">
                {{ $article->titre ?? 'Titre de l\'article' }}
            </h1>

            <hr>

            <div class="card-text text-dark" style="white-space: pre-line;">
                {!! nl2br(e($article->contenu ?? 'Contenu de l\'article.')) !!}
            </div>
        </div>
    </div>

</div>
@endsection
