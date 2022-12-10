@extends('layouts.app')

@section('content')
    <div id="plates-index" class="container">

        <div class="top d-flex justify-content-between flex-wrap">

            <h1>Elenco piatti</h1>

            <a class="btn boo-btn-orange d-flex align-items-center" href="{{ route('admin.plates.create') }}">Aggiungi
                piatto</a>

        </div>

        <div class="mt-4">
            @foreach ($plates as $plate)
                <p> <a href="{{ route('admin.plates.show', $plate->id) }}"> {{ $plate->name }}</a></p>
            @endforeach
        </div>

    </div>
@endsection
