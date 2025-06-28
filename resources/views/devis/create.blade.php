@extends('base')

@section('title', 'Demander un devis')

@section('content')
<style>
    .btn-orange {
        background-color: #EC7100;
        color: white;
        border: none;
    }
    .btn-orange:hover {
        background-color: #cf5d00;
        color: white;
    }
</style>

<div class="container py-4">
    <h1 class="h4 mb-4 text-dark">Demander un devis</h1>

    <form action="{{ route('devis.store') }}" method="POST" class="bg-white p-4 rounded shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" id="nom" name="nom" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" id="prenom" name="prenom" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="numero" class="form-label">Téléphone (optionnel)</label>
            <input type="tel" id="numero" name='numero' class="form-control">
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message de votre besoin</label>
            <textarea id="message" name="message" rows="5" class="form-control" required></textarea>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-orange px-4">Envoyer la demande</button>
        </div>
    </form>
</div>
@endsection
