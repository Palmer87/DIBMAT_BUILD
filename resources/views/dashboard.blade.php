@extends('base')

@section('title', 'Dashboard')

@section('content')
<style>
    .card-orange {
        background-color: #EC7100;
        color: white;
    }
    .card-dark {
        background-color: #2c2c2c;
        color: white;
    }
    .dashboard-icon {
        font-size: 3rem;
    }
</style>

<div class="container py-4">
    <h1 class="h3 mb-4 fw-bold text-dark">Tableau de bord</h1>



    <div class="row g-4">
        <!-- Articles -->
        <div class="col-md-4">
            <a href="{{ route('admin.articles.index') }}" class="text-decoration-none">
            <div class="card shadow-sm border-0 h-100 card-dark">
                <div class="card-body text-center">
                    <i class="bi bi-journal-text dashboard-icon mb-3 text-warning"></i>
                    <h2 class="card-title display-6">{{ $nbArticles ?? 0 }}</h2>
                    <p class="card-text">Articles</p>
                </div>
            </div>
            </a>
        </div>

        <!-- Devis -->
        <div class="col-md-4">
            <a href="{{ route('devis.index') }}" class="text-decoration-none">
            <div class="card shadow-sm border-0 h-100 card-orange">
                <div class="card-body text-center">
                    <i class="bi bi-file-earmark-text dashboard-icon mb-3 text-white"></i>
                    <h2 class="card-title display-6">{{ $nbDevis ?? 0 }}</h2>
                    <p class="card-text">Devis</p>
                </div>
            </div>
            </a>
        </div>

        <!-- Messages -->
        <div class="col-md-4">
            <a href="{{ route('messages.index') }}" class="text-decoration-none">
                <div class="card shadow-sm border-0 h-100 card-dark">
                    <div class="card-body text-center">
                        <i class="bi bi-envelope-paper dashboard-icon mb-3 text-warning"></i>
                        <h2 class="card-title display-6">{{ $nbMessages ?? 0 }}</h2>
                        <p class="card-text">Messages</p>
                </div>
            </div>
        </div>
       <!-- Projets -->
        <div class="col-md-4">
            <a href="{{ route('projets.index') }}" class="text-decoration-none">
                <div class="card shadow-sm border-0 h-100 card-orange">
                    <div class="card-body text-center">
                        <i class="bi bi-briefcase dashboard-icon mb-3 text-white"></i>
                        <h2 class="card-title display-6">{{ $nbProjets ?? 0 }}</h2>
                        <p class="card-text">Projets</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!--les deux derniers devis -->
    <div class="row g-4 mt-4">
    <div class="col-md-6">
        <div class="card shadow border-0 h-100">
            <div class="card-header text-white fw-bold" style="background-color: #000;">
                <h5 class="mb-0">📄 Derniers Devis</h5>
            </div>
            <div class="card-body bg-white">
                @if($devis->count())
                    <ul class="list-group list-group-flush">
                        @foreach($devis as $item)
                            <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #fdfdfd;">
                                <div>
                                    <span class="fw-semibold text-dark">{{ $item->nom }}</span><br>
                                    <small class="text-muted">{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</small>
                                    <div class="mt-1 text-secondary">
                                        {{ Str::limit($item->message, 60, '...') }}
                                    </div>
                                </div>
                                <span class="badge rounded-pill px-3 py-2" style="background-color: #EC7100; color: white;">
                                    {{ $item->numero }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted mb-0">Aucun devis trouvé.</p>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow border-0 h-100">
            <div class="card-header text-white fw-bold" style="background-color: #000;">
                <h5 class="mb-0">📬 Derniers Messages</h5>
            </div>
            <div class="card-body bg-white">
                @if($messages->count())
                    <ul class="list-group list-group-flush">
                        @foreach($messages->take(5) as $message)
                            <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: #fdfdfd;">
                                <div>
                                    <strong class="text-dark">{{ $message->nom }}</strong><br>
                                    <small class="text-muted">{{ \Carbon\Carbon::parse($message->created_at)->format('d/m/Y H:i') }}</small>
                                    <div class="mt-1 text-secondary">
                                        {{ Str::limit($message->message, 60, '...') }}
                                    </div>
                                </div>

                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted mb-0">Aucun message trouvé.</p>
                @endif
            </div>
        </div>
    </div>
</div>


</div>

</div>

    </div>
@endsection
