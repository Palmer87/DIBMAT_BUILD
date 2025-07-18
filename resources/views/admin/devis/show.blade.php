@extends('layouts.backend.base')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Détail du Devis</h1>

    <div class="card mb-4">
        <div class="card-header">
            Informations du Devis
        </div>
        <div class="card-body">
            <p><strong>ID :</strong> {{ $devis->id }}</p>
            <p><strong>Client :</strong> {{ $devis->nom }} {{ $devis->prenom }}</p>
            <p><strong>Date :</strong> {{ $devis->created_at}}</p>
            <p><strong>Numero :</strong> {{ $devis->numero}}</p>
            <p><strong>Email :</strong> {{ $devis->email}}</p>
            <p><strong>Message :</strong> {{ $devis->message }}</p>
        </div>
    </div>

    <a href="{{ route('devis.index') }}" class="btn btn-secondary">Retour à la liste</a>

</div>
@endsection
