<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Admin')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ url('assets/back/libs/quill/quill.core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/back/libs/quill/quill.bubble.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/back/libs/quill/quill.snow.css') }}" rel="stylesheet" type="text/css" />

    <style>

        .text-orange 
        {
            color: #EC7100;
        }

        .text-orange:hover 
        {
            color: #cf5d00;
        }
    </style>

    <!-- Notify CSS -->
    @notifyCss
    <!-- Custom CSS -->

    @yield('styles')
</head>
<body class="bg-light">
    <!-- Notify -->


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="adminNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active"><a class="nav-link" href="{{ route('articles.index') }}">Articles</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('projets.index') }}">Projets</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('messages.index') }}">Messages</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('devis.index') }}">Devis</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('user.liste') }}">Utilisateurs</a></li>

                </ul>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm">Déconnexion</button>
                </form>
            </div>
        </div>
    </nav>
    
     <x-notify::notify />
    @notifyJs

    <!-- Contenu -->
    <main class="container py-5">
        @yield('content')
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Plugins js -->
        <script src="{{ url('assets/back/libs/quill/quill.min.js') }}"></script>

        <!-- Demo js-->
        <script src="{{ url('assets/back/js/pages/form-quilljs.js') }}"></script>

        <script>
        document.addEventListener('DOMContentLoaded', function () {
                var quill = new Quill('#editor', {
                    theme: 'snow'
                });
        
                // Synchroniser le contenu Quill avec le champ caché
                var contentInput = document.getElementById('content');
                quill.on('text-change', function () {
                    contentInput.value = quill.root.innerHTML;
                });
            });
        </script>
</body>
</html>