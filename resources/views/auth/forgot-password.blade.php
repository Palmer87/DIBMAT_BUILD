<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Admin')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>

       .text-orange {
        color: #EC7100;
    }
    .text-orange:hover {
        color: #cf5d00;}
</style>
</head>
<body class="bg-light">
<style>
    .btn-orange {
        background-color: #EC7100;
        color: white;
        font-weight: 600;
        border: none;
    }
    .btn-orange:hover {
        background-color: #cf5d00;
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card shadow-sm border-0">
                <div class="card-header bg-dark text-white fw-bold">
                    Réinitialiser le mot de passe
                </div>

                <div class="card-body">
                    <p class="text-muted mb-4">
                        Mot de passe oublié ? Pas de souci. Entrez votre adresse e-mail et nous vous enverrons un lien pour en créer un nouveau.
                    </p>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse e-mail</label>
                            <input type="email" id="email" name="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit -->
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-orange">
                                Envoyer le lien de réinitialisation
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

