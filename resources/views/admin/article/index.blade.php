@extends('base')

@section('title', 'Gestion des articles')

@section('content')
<style>
    /* Couleur orange personnalisée */
    .orange-theme th {
        background-color: #EC7100 !important;
        color: white !important;
    }

    .btn-orange {
        border: 1px solid #EC7100 !important;
        color: #EC7100 !important;
        background-color: transparent;
    }

    .btn-orange:hover {
        background-color: #EC7100 !important;
        color: white !important;
    }
</style>

<div class="container py-4">
    <h1 class="h4 mb-4 text-dark">Gestion des articles</h1>

    <a href="{{ route('articles.create') }}" class="btn btn-orange mb-3">
        <i class="bi bi-plus-lg"></i> Créer un article
    </a>

  <div class="container py-4">
    <h1 class="h4 mb-4 text-white bg-dark p-3 rounded">Gestion des devis</h1>

    <div class="table-responsive">
        <table class="table table-dark table-hover table-bordered align-middle rounded overflow-hidden">
            <thead class="orange-theme">
                <tr>
                    <th>Titre</th>
                    <th>Dtate</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($articles as $article)
                    <tr>
                        <td>{{ $article->titre }}</td>
                        <td>{{ $article->created_at->format('d/m/Y à H:i') }}</td>
                        <td>
                            <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-outline-primary me-2">
                                <i class="bi bi-pencil-square"></i> Modifier
                            </a>
                            <form action="{{ route('articles.destroy', $article) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Supprimer cet article ?')">
                                    <i class="bi bi-trash"></i> Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center text-white">Aucun article</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
