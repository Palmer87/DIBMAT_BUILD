@extends('public.base')

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

    .card-header {
        background-color: #EC7100;
        color: white;
        font-weight: bold;
        font-size: 1.2rem;
    }

    label {
        font-weight: 500;
        color: #333;
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header">Contactez-Nous</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('public.contact.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required>
                            @error('nom')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse e-mail</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Votre message</label>
                            <textarea id="message" class="form-control @error('message') is-invalid @enderror" name="message" rows="5" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-orange">
                                Envoyer le message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
