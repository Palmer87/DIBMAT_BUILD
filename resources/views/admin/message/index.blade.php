@extends('base')

@section('title', 'Gestion des messages')

@section('content')
<style>
    .btn-orange {
        background-color: #EC7100;
        color: white;
        border: none;
    }

    .btn-orange:hover {
        background-color: #cf5d00;
    }

    .btn-delete {
        color: #dc3545;
        text-decoration: underline;
        background: none;
        border: none;
        padding: 0;
    }

    .btn-delete:hover {
        color: #a60000;
    }

    .table td, .table th {
        vertical-align: middle;
    }
</style>

<div class="container py-4">
    <h1 class="h4 mb-4 text-dark">Gestion des messages</h1>

    <div class="table-responsive shadow-sm">
        <table class="table table-bordered table-hover bg-white rounded">
            <thead class="table-dark">
                <tr>
                    <th>Nom</th>
                    <th>message</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $message)
                    <tr>
                        <td>{{ $message->nom }}</td>
                        <td>{{ $message->message }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ $message->created_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('messages.show', $message) }}" class="btn btn-sm btn-orange me-2">
                                Voir
                            </a>
                            <form action="{{ route('messages.destroy', $message) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?')">
                                    Supprimer
                                </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Aucun message</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
