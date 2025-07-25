@extends('layouts.backend.base')

@section('title', 'Créer un article')

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
</style>
@if ($errors->any())
    <div class="alert alert-danger">
        <h5>Des erreurs ont été trouvées :</h5>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header text-white fw-bold" style="background-color: #EC7100;">
            Créer un nouvel article
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="titre" class="form-label">Titre</label>
                        <input type="text" class="form-control @error('titre') is-invalid @enderror"
                            id="titre" name="titre" value="{{ old('titre') }}" required>
                        @error('titre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="image" class="form-label">Image</label>
                        <input class="form-control @error('image') is-invalid @enderror"
                            type="file" id="image" name="image" required>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Image -->
                <div class="mb-3">
                    <label for="contenu" class="form-label">Categorie</label>
                    <select class="form-control" name="categorie" id="categorie">
                        <option disabled selected>Choisir une categorie</option>
                        <option value="Evènement">Evènement</option>
                        <option value="Construction">Construction</option>
                        <option value="Batiment">Bâtiment</option>
                        <option value="Climatisation">Climatisation</option>
                        <option value="Electricité">Electricité</option>
                    </select>
                </div>

                <!-- Contenu -->
                <div class="mb-3">
                    <label for="contenu" class="form-label">Contenu</label>
                    <div id="editor" style="height: 300px;"></div>
                    <input type="hidden" name="content" id="content">

                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
        

                <!-- Submit -->
                <div class="text-end">
                    <button type="submit" class="btn btn-orange">
                        <i class="bi bi-check-circle"></i> Créer l'article
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
