@extends('layouts.backend.base')

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

    <div class="mb-4 text-end">
        <a href="{{ route('articles.create') }}" class="btn btn-orange">
            <i class="bi bi-plus-circle"></i> Nouvel Articles
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover bg-white rounded">
            <thead class="table-dark">
                <tr>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date de creation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td><img src="{{ url($article->image) }}" alt="" width="50" height="50"></td>
                        <td>{{ $article->titre }}</td>
                        <td>{!! Str::limit(strip_tags( $article->contenu), 150) !!}</td>
                        <td>{{ $article->created_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-eye"></i> Voir
                            </a>

                            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-outline-success me-1">
                                <i class="bi bi-pen"></i> Editer
                            </a>

                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Supprimer cet article ?')">
                                    <i class="bi bi-trash"></i> Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>

    </div>
</div>
@endsection
