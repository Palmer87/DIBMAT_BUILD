@extends('base')

@section('content')
<div class="container mt-4">
    <h1>Détail du Devis</h1>

    <div class="card mb-4">
        <div class="card-header">
            Informations du Devis
        </div>
        <div class="card-body">
            <p><strong>ID :</strong> {{ $devis->id }}</p>
            <p><strong>Client :</strong> {{ $devis->nom ?? 'N/A' }}</p>
            <p><strong>Date :</strong> {{ $devis->date ?? 'N/A' }}</p>
            <p><strong>message :</strong> {{ $devis->message ?? 'N/A' }}</p>
            <p><strong>Total :</strong> {{ number_format($devis->total, 2, ',', ' ') }} €</p>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            Articles
        </div>
        <div class="card-body">
            @if($devis->articles && $devis->articles->count())
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Quantité</th>
                            <th>Prix Unitaire</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($devis->articles as $article)
                        <tr>
                            <td>{{ $article->produit->nom ?? 'N/A' }}</td>
                            <td>{{ $article->quantite }}</td>
                            <td>{{ number_format($article->prix_unitaire, 2, ',', ' ') }} €</td>
                            <td>{{ number_format($article->quantite * $article->prix_unitaire, 2, ',', ' ') }} €</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Aucun article dans ce devis.</p>
            @endif
        </div>
    </div>

    <a href="{{ route('devis.index') }}" class="btn btn-secondary">Retour à la liste</a>

</div>
@endsection
