@extends('layouts.layout')

@section('title', 'Edit Page')

@section('content')
    <div class="container-fluid">
        <h3 class="text-primary fw-bold fs-3 text-center p-5 mt-5">Modifica un'esibizione nel database</h3>

        {{-- Visualizzazione errori di validazione --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="m-4">

            {{-- Form per inserire i dati nell'entità --}}
            <form action="{{ route('bands.update', $band->id) }}" method="POST"
                class="w-100 row-cols-2 g-3 d-flex flex-column align-content-center justify-content-center flex-wrap mx-auto"
                novalidate>
                @csrf
                @method('PUT')

                <div class="row g-2">

                    {{-- input nome --}}
                    <div class="w-100">
                        <div class="form-floating">
                            <input type="text" required class="form-control" id="name" placeholder=""
                                value="{{ $band->name }}" name="name">
                            <label for="title">Nome band</label>
                        </div>
                    </div>

                    {{-- input numero componenti band --}}
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="number" required name="components" class="form-control" id="components"
                                placeholder="" value="{{ $band->components }}">
                            <label for="title">Numero di componenti</label>
                        </div>
                    </div>

                    {{-- input genere musicale --}}
                    <div class="w-100">
                        <div class="form-floating">
                            <input type="text" required class="form-control" id="genre" placeholder=""
                                value="{{ $band->genre }}" name="genre">
                            <label for="title">Genere musicale</label>
                        </div>
                    </div>

                    {{-- input data e ora esibizione --}}
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="datetime-local" required class="form-control" name="live_on_stage"
                                id="live_on_stage" placeholder="" value="{{ $band->live_on_stage }}">
                            <label for="title">Data e ora di esibizione</label>
                        </div>
                    </div>

                    {{-- input bio della band --}}
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <textarea class="form-control" required name="bio" placeholder="" style="height: 100px">{{ $band->bio }}</textarea>
                                <label>Bio della band</label>
                            </div>
                        </div>
                    </div>

                    {{-- input palco esibizione --}}
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="number" required name="stage_number" min="1" max="5" class="form-control"
                                id="stage_number" placeholder="" value="{{ $band->stage_number }}">
                            <label>Palco di esibizione</label>
                        </div>
                    </div>

                </div>

                <input type="submit" value="submit" class="btn btn-primary mt-5 w-25 align-self-center">
            </form>

        </div>

    </div>
@endsection
