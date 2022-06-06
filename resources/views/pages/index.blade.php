@extends('layouts.layout')

@section('title', 'Bands')

@section('content')

<h1 class="text-center text-primary">Bands List</h1>

<div class="text-center my-5">
    <a href="{{ route('bands.create') }}" class="btn btn-success">Aggiungi Band</a>
</div>

<table class="table">
    <thead>
        <tr class="text-uppercase text-danger">
            <th scope="col">name</th>
            <th scope="col">components number</th>
            <th scope="col">genre</th>
            <th scope="col">live on stage at</th>
            <th scope="col">bio</th>
            <th scope="col">stage number</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($bands as $band )
        <tr>
            <td>{{ $band->name }}</td>
            <td>{{ $band->components }}</td>
            <td>{{ $band->genre }}</td>
            <td>{{ $band->live_on_stage }}</td>
            <td>{{ $band->bio }}</td>
            <td>{{ $band->stage_number }}</td>
            <td>
                 <a href=" {{route('bands.show', $band->id )}} " class="btn btn-primary" style="width: 78px;">
                    View
                </a>
                <a href=" {{route('bands.edit', $band->id )}} " class="btn btn-warning my-1" style="width: 78px;">
                    Edit
                </a>
                <form action=" {{ route('bands.destroy', $band->id) }} " method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger" style="width: 78px;">Elimina</button>

                </form>
            </td>
        </tr>
        @empty

        @endforelse

@endsection
