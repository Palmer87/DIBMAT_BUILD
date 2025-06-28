@extends('base')

@section('title', 'Nos Articles')

@section('content')
<style>
    .orange-btn {
        background-color: #EC7100;
        color: white;
        border: none;
    }
    .orange-btn:hover {
        background-color: #cf5d00;
        color: white;
    }

    .card-header-orange {
        background-color: #EC7100;
        color: white;
    }
</style>

<div class="container py-4">
    <h1 class="h4 mb-4 text-white bg-dark p-3 rounded">Nos Articles</h1>

    <div class="row g-4">
        @forelse ($articles as $article)
           <div class="col-md-6 col-lg-4">
    <div class="card h-100 shadow-sm border-0">
        <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <span class="badge bg-warning text-white fw-bold mb-2">
                Publié le {{ $article->created_at->format('d/m/Y') }}
            </span>
            <h5 class="card-title fw-bold text-dark">
                {{ Str::limit($article->titre, 60) }}
            </h5>
            <p class="card-text text-muted">
                {{ Str::limit($article->contenu, 100) }}
            </p>
            <a href="{{ route('articles.show', $article) }}" class="text-orange fw-bold text-decoration-none">
                Lire plus <i class="bi bi-arrow-right-short"></i>
            </a>
        </div>
    </div>
</div>

        @empty
            <div class="col-12">
                <div class="alert alert-warning text-center">
                    Il n'y a pas d'articles pour le moment.
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection
