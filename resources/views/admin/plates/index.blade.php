@extends('layouts.app')

@section('content')
    <div id="plates-index" class="container">

        <div class="top d-flex justify-content-between flex-wrap">

            {{-- Titolo pagina --}}
            <h1>Elenco piatti</h1>

            {{-- Search Bar
                TODO: Implementazione effettiva della ricerca --}}
            <button class="searchBar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#searchBar"
                aria-controls="searchBar" aria-expanded="false">
                <i class="bi bi-search"></i>
            </button>

            <div class="collapse d-md-flex px-0 col-md-5" id="searchBar">
                <input class="w-100 px-2 my-2 align-middle" type="text" name="searchPlateBar"
                    placeholder="Inserire piatto da ricercare">
            </div>

            {{-- Bottone per aggiunta del piatto --}}
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
