@extends('layouts.backend.base')

@section('title', 'Gestion des utilisateurs')

@section('content')
<style>
    .btn-orange {
        background-color: #EC7100;
        color: white;
        border: none;
    }

    .btn-danger {
        background-color: #a60000;
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
    <h1 class="h4 mb-4 text-dark">Gestion des utilisateurs</h1>

    <div class="mb-4 text-end">
        <a href="{{ route('register') }}" class="btn btn-orange">
            <i class="bi bi-plus-circle"></i> Nouveau utlisateur
        </a>
    </div>

    <div class="table-responsive shadow-sm">
        <table class="table table-bordered table-hover bg-white rounded">
            <thead class="table-dark">
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('d/m/Y') }}</td>
                        <td>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?')">
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
