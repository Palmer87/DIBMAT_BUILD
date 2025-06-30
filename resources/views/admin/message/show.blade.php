@extends('base')

@section('title', 'Détails du message')

@section('content')
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

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm border-0">
                <div class="card-header bg-dark text-white fw-bold">
                    Détail du message reçu
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <p><strong>Nom :</strong> {{ $message->nom }}</p>
                        <p><strong>Email :</strong> {{ $message->email }}</p>
                        <p><strong>Date :</strong> {{ $message->created_at->format('d/m/Y H:i') }}</p>
                    </div>

                    <div class="mb-4">
                        <h5 class="fw-bold">Message :</h5>
                        <div class="p-3 bg-light rounded border">
                            {!! nl2br(e($message->message)) !!}
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('messages.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left-circle"></i> Retour
                        </a>

                        <a href="{{ route('messages.reponse', $message->id) }}" class="btn btn-orange">
                            <i class="bi bi-reply"></i> Répondre
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
