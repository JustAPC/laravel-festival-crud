@extends('layouts.layout')


@section('content')
    <div class="container text-center mt-5">
        <div class="card text-bg-primary mb-3 text-center mx-auto" style="max-width: 18rem;">
            <div class="card-header">
                <h5 class="text-primary">Nome: </h5>{{ $band->name }}
            </div>
            <div class="card-body">
                <p class="card-title"><span class="text-primary">Componenti: </span> {{ $band->components }}</p>
                <p class="card-text"><span class="text-primary">Genere: </span> {{ $band->genre }}</p>
                <p class="card-text"><span class="text-primary">Data e ora:</span> {{ $band->live_on_stage }}</p>
                <p class="card-text"><span class="text-primary">Descrizione: </span> {{ $band->bio }}</p>
                <p class="card-text"><span class="text-primary">Numero dello stage: </span>
                    {{ $band->stage_number }}</p>
            </div>
        </div>

        <div>
            <a href="{{ route('bands.edit', $band->id) }}" class="btn btn-warning mb-3">edit </a>
            <form action="{{ route('bands.destroy', $band->id) }} method=" POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="elimina">
            </form>
        </div>
    </div>
@endsection
