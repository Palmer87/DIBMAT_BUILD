@extends('base')
@section('title', 'Projets')

@section('content')
<style>
    .btn-orange {
        background-color: #EC7100;
        color: white;
        font-weight: 600;
        border: none;
    }
    .btn-orange:hover {
        background-color: #cf5d00;
    }
    .table thead {
        background-color: #222;
        color: white;
    }
</style>

<div class="container py-5">
    <h1 class="h3 mb-4 fw-bold text-dark">Liste des Projets</h1>

    <div class="mb-4 text-end">
        <a href="{{ route('projets.create') }}" class="btn btn-orange">
            <i class="bi bi-plus-circle"></i> Nouveau projet
        </a>
    </div>

    @if($projets->isEmpty())
        <div class="alert alert-info">Aucun projet trouvé.</div>
    @else
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Client</th>
                        <th>Catégorie</th>
                        <th>slug</th>
                        <th>Date</th>
                        <th>Image</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projets as $projet)
                        <tr>
                            <td>{{ $projet->name }}</td>
                            <td>{{ Str::limit($projet->description, 10) }}</td>
                            <td>{{ $projet->client }}</td>
                            <td>{{ $projet->categorie }}</td>
                            <td>{{ $projet->slug }}</td>
                            <td>{{ $projet->date }}</td>
                            <td>
                                <img src="{{ asset('storage/'.$projet->image) }}" alt="Image du projet" class="img-thumbnail" style="max-width: 100px;">
                            </td>
                            <td class="text-center">
                                <a href="{{ route('projets.show', $projet->id) }}" class="btn btn-sm btn-outline-dark me-1">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('projets.edit', $projet->id) }}" class="btn btn-sm btn-outline-primary me-1">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form method="POST" action="{{ route('projets.destroy', $projet->id) }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Supprimer ce projet ?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $projets->links() }}
        </div>
    @endif
</div>
@endsection
