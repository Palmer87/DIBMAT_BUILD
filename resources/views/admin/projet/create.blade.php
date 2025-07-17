@extends('layouts.backend.base')

@section('title', 'Créer un projet')

@section('content')
<style>
    .btn-orange {
        background-color: #EC7100;
        color: white;
        border: none;
        font-weight: bold;
    }
    .btn-orange:hover {
        background-color: #cf5d00;
    }
</style>

<div class="container py-5">
    <div class="card shadow-sm">
        <div class="card-header fw-bold text-white" style="background-color: #EC7100;">
            Nouveau Projet
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <h6>Veuillez corriger les erreurs suivantes :</h6>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            @endif
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('projets.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nom du projet</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="client" class="form-label">Nom Client</label>
                        <input type="text" name="client" id="client" class="form-control @error('client') is-invalid @enderror" value="{{ old('client') }}" required>
                        @error('client')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="mb-3">
                    <label for="lieu" class="form-label">Lieu</label>
                    <input type="text" name="lieu" id="lieu" class="form-control @error('lieu') is-invalid @enderror" value="{{ old('lieu') }}" required>
                    @error('lieu')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="categorie" class="form-label">Catégorie</label>
                        <select class="form-control" name="categorie" id="categorie">
                            <option disabled selected>Choisir la categorie</option>
                            <option value="construction metallique">Construction metallique</option>
                            <option value="electricité et energie">Electricité et energie</option>
                            <option value="travaux de climatisation">Travaux de climatisation</option>
                            <option value="batiment">Bâtiment</option>
                        </select>
                        {{-- <input type="text" name="categorie" id="categorie" class="form-control @error('categorie') is-invalid @enderror" value="{{ old('categorie') }}" required>
                        @error('categorie')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="col-md-6">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" name="date" id="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}" required>
                        @error('date')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" rows="4" class="form-control @error('description') is-invalid @enderror" required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="image" class="form-label">Cliches du projet</label>
                        <input type="file" name="imagecliche[]" id="image" class="form-control @error('imagecliche') is-invalid @enderror" accept="image/*" multiple>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-orange">
                        <i class="bi bi-check-circle"></i> Enregistrer le projet
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
