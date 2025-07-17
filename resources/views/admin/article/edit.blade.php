@extends('layouts.backend.base')

@section('title', 'Modifier un article')

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
            Modifier l'article
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('articles.update', $article) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Titre -->
                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="titre" class="form-label">Titre</label>
                        <input type="text" class="form-control @error('titre') is-invalid @enderror"
                            id="titre" name="titre" value="{{ old('titre', $article->titre) }}" required>
                        @error('titre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                    
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
                </div>

                <!-- Contenu -->
                <div class="mb-3">
                    <label for="contenu" class="form-label">Contenu</label>
                    <div id="editor" style="height: 300px;">{!! old('content', $article->contenu) !!}</div>
                    <input type="hidden" name="content" id="content" value="{!! old('content', $article->contenu) !!}">

                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image -->
                <div class="mb-3">
                    <label for="image" class="form-label">Changer l’image (optionnel)</label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    @if ($article->image)
                        <div class="mt-2">
                            <p class="text-muted">Image actuelle :</p>
                            <img src="{{ url($article->image) }}" alt="Image actuelle" class="img-fluid rounded shadow-sm" style="max-height: 200px;">
                        </div>
                    @endif
                </div>

                <!-- Submit -->
                <div class="text-end">
                    <button type="submit" class="btn btn-orange">
                        <i class="bi bi-check-circle"></i> Enregistrer les modifications
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
