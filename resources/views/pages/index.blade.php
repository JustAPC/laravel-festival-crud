@extends('layouts.layout')

@section('title', 'Bands')

@section('content')

<h1 class="text-center text-primary">Bands List</h1>

<table class="table mt-5">
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
        </tr>
        @empty

        @endforelse

@endsection
