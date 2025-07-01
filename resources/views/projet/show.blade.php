@extends('public.base')

@section('content')
<div class="container">
    <h1>Détails du Projet</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $projet->name }}</h5>
            <p class="card-text"><strong>Description:</strong> {{ $projet->description }}</p>
            <p class="card-text"><strong>Date de début:</strong> {{ \Carbon\Carbon::parse($projet->date)->format('d/m/Y') }}</p>
            <p class="card-text"><strong>Date de fin:</strong> {{ $projet->lieu }}</p>
            <p class="card-text"><strong>Status:</strong> {{ $projet->client }}</p>
            <p class="card-text"><strong>Image:</strong></p>
            @if($projet->image)
                <img src="{{ asset('storage/' . $projet->image) }}" class="img-fluid" alt="{{ $projet->name }}">
            @else
                <img src="{{ asset('images/default-project.jpg') }}" class="img-fluid" alt="Projet par défaut">
            @endif

        </div>
    </div>

    <a href="{{ route('public.projets.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>

</div>
@endsection
