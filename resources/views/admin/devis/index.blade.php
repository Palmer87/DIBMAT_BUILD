@extends('base')

@section('title', 'Gestion des devis')

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
    <h1 class="h4 mb-4 text-white bg-dark p-3 rounded">Gestion des devis</h1>

    <div class="table-responsive">
        <table class="table table-dark table-hover table-bordered align-middle rounded overflow-hidden">
            <thead class="orange-theme">
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($devis as $devi)
                    <tr>
                        <td>{{ $devi->nom }}</td>
                        <td>{{ $devi->email }}</td>
                        <td>{{ $devi->telephone }}</td>
                        <td>{{ $devi->created_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('devis.show', $devi) }}" class="btn btn-sm btn-orange me-1">
                                <i class="bi bi-eye"></i> Voir
                            </a>
                            <form action="{{ route('devis.destroy', $devi) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Supprimer ce devis ?')">
                                    <i class="bi bi-trash"></i> Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-white">Aucun devis disponible</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
