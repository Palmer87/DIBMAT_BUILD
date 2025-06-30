@extends('public.base')

@section('content')
<div class="container">
    <h1>Projets Publics</h1>
    <div class="row">
        @forelse($projets as $projet)

                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if($projet->image)
                            <img src="{{ asset('storage/' . $projet->image) }}" class="card-img-top" alt="{{ $projet->titre }}">
                        @else
                            <img src="{{ asset('images/default-project.jpg') }}" class="card-img-top" alt="Projet par défaut">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $projet->titre }}</h5>
                            <p class="card-text">{{ Str::limit($projet->description, 100) }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('public.projets.show', $projet->id) }}" class="btn btn-primary">Voir le projet</a>
                        </div>
                    </div>
                </div>

        @empty
            <p>Aucun projet public disponible.</p>
        @endforelse
    </div>
</div>
@endsection
