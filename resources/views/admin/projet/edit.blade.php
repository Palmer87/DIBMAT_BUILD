@extends('layouts.backend.base')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header text-white fw-bold" style="background-color: #EC7100;">
            <h2>Modifier le projet</h2>
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
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

            <form action="{{ route('projets.update', $projet->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nom du projet</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $projet->name) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="client" class="form-label">Client</label>
                    <input type="text" class="form-control" id="client" name="client" value="{{ old('client', $projet->client) }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="lieu" class="form-label">Lieu</label>
                    <input type="text" name="lieu" id="lieu" value="{{ old('lieu', $projet->lieu) }}" required class="form-control">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $projet->description) }}</textarea>
                </div>


                <div class="mb-3 row">
                    
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date </label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $projet->date) }}">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @if ($projet->image)
                        <img src="{{ asset('storage/' . $projet->image) }}" alt="Image du projet" class="img-thumbnail mt-2" style="max-width: 200px;">
                    @endif
                </div>
                <div class="mb-3">
                    <label for="categorie" class="form-label">Catégorie</label>
                    <input type="text" name="categorie" id="categorie" value="{{ old('categorie', $projet->categorie) }}" required class="form-control">
                </div>
                

                <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                <a href="{{ route('projets.index') }}" class="btn btn-secondary">Annuler</a>
            </form>
        </div>
    </div>
</div>
@endsection
