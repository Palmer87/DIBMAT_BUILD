@extends('layouts.app')

@section('title', $article->titre ?? 'Article')

@section('content')
    <a href="{{ route('home') }}" class="text-blue-500 hover:underline">&larr; Retour aux articles</a>

    <article class="mt-4">
        <h1 class="text-3xl font-bold">{{ $article->titre ?? 'Titre de l\'article' }}</h1>
        <div class="mt-4 text-gray-700">
            {!! nl2br(e($article->contenu ?? 'Contenu de l\'article.')) !!}
        </div>
    </article>
@endsection
