@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Aggiungi piatto al ristorante</h1>

        @if ($errors->any())
            <div class="row">
                <div class="col-12 bg-danger">
                    Ci sono errori...
                </div>
            </div>
        @endif


        <form action="{{ route('admin.plates.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Nome piatto --}}
            <div @error('name') class="is-invalid" @enderror>

                <label for="name">Nome piatto:</label>
                <input type="text" name="name" value="{{ old('name', '') }}">

            </div>

            {{-- Descrizione piatto --}}
            <div @error('description') class="is-invalid" @enderror>

                <label for="description">Descrizione/Ingredienti piatto:</label>
                <textarea name="description" required cols="30" rows="10">{{ old('description', '') }}</textarea>

            </div>

            {{-- Disponibilità piatto --}}
            <div @error('available') class="is-invalid" @enderror>

                <label for="available">Disponibilità piatto:</label>
                <input type="radio" name="available" value="1" checked>
                <label for="1">Disponibile</label>
                <input type="radio" name="available" value="0">
                <label for="0">Non disponibile</label>

            </div>

            {{-- Prezzo del piatto --}}
            <div @error('price') class="is-invalid" @enderror>

                <label for="price">Prezzo piatto:</label>
                <input type="number" name="price" step=".01" min="0" max="99.99"
                    value="{{ old('price', '') }}">

            </div>

            {{-- TODO: Caricamento immagine --}}

            {{-- Invio form --}}
            <div>
                <input type="submit" value="Crea">
            </div>

            {{-- Ritorno alla vista dei post --}}
            <div>
                <a href="{{ route('admin.plates.index') }}">Back to index</a>
            </div>



        </form>
    </div>
@endsection