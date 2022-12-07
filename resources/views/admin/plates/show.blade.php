@extends('layouts.dashboard')

@section('content')
    <div id="show-plate" class="container">
        {{-- Nome del piatto --}}
        <h1>{{ $plate->name }}</h1>

        {{-- Mostra l'immagine se presente --}}
        @if ($plate->imgPath)
            <div class="img-container col-md-6 px-0">
                <img class="img-fluid" src="{{ asset('storage/' . $plate->imgPath) }}" alt="{{ $plate->name }}">
            </div>
        @endif

        {{-- Descrizione/Ingredienti --}}
        <div class="plate-info my-3">
            <h4>Descrizione: </h4>
            <p>{{ $plate->description }}</p>
        </div>

        {{-- Prezzo --}}
        <p>€ {{ $plate->price }}</p>

        {{-- Disponibilità piatto --}}
        @if ($plate->available)
            <p class="available">Piatto disponibile</p>
        @else
            <p class="not-available">Piatto non disponibile</p>
        @endif


        <div class="nav-buttons">

            <a class="btn boo-btn-cyan d-flex align-items-center" href="{{ route('admin.plates.index') }}">Back to
                index</a>

            <a class="btn boo-btn-green d-flex align-items-center mx-2"
                href="{{ route('admin.plates.edit', $plate->id) }}">Edit</a>

            {{-- Pulsante per l'eliminazione di un piatto --}}
            <div>
                <form onsubmit="return confirm('Are you sure?')" action="{{ route('admin.plates.destroy', $plate->id) }}"
                    method="POST">
                    @csrf
                    @method('DELETE')

                    <input class="btn btn-danger" type="submit" value="Delete Plate">
                </form>
            </div>

        </div>
    </div>
@endsection
