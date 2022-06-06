@extends('layouts.layout')

@section('content')

<div class="container-fluid">
    <h3 class="fw-bold fs-3 text-center p-5 mt-5">Inserisci un nuovo record nel database</h3>

    <div class="m-4">

        {{-- Form per inserire i dati nell'entità --}}
        <form action="{{route('bands.store')}}" method="POST">
            @csrf

            
            <input type="submit" value="submit">
        </form>

    </div>

</div>

@endsection