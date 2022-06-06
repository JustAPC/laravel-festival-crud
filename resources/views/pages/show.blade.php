@extends('layouts.layout')


@section('content')

    <div>
        <h2>NOME:
            <span>
                {{ $band->name }}
            </span>
        </h2>
        <h4>QUANTITÀ:
            <span>
                {{ $band->components }}
            </span>
        </h4>
        <h4>GENERE:
            <span>
                {{ $band->genre }}
            </span>
        </h4>
        <h4>DATA E ORA:
            <span>
                {{ $band->live_on_stage }}
            </span>
        </h4>
        <h4>DESCRIZIONE:
            <span>
                {{ $band->bio }}
            </span>
        </h4>
        <h4>NUMERO DELLO STAGE:
            <span>
                {{ $band->stage_number }}
            </span>
        </h4>
    </div>

@endsection