@extends('base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Répondre au message</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('messages.repondre', $message->id) }}">
                        @csrf

                        <div class="form-group">
                            <label for="message">Message original:</label>
                            <div class="alert alert-secondary">
                                {{ $message->message }}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="response">Votre réponse:</label>
                            <textarea class="form-control @error('response') is-invalid @enderror"
                                id="response"
                                name="response"
                                rows="5"
                                required>{{ old('response') }}</textarea>
                            @error('response')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">
                                Envoyer la réponse
                            </button>
                            <a href="{{ route('messages.index') }}" class="btn btn-secondary">
                                Retour
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
