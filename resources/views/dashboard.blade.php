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

    

</div>
@endsection
