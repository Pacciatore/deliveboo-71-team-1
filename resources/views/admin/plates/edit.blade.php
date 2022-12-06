@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Edit {{ $plate->name }}</h1>

        <form action="{{ route('admin.plates.update', $plate->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            {{-- Nome piatto --}}
            <div @error('name') class="is-invalid" @enderror>

                <label for="name">Nome piatto:</label>
                <input type="text" name="name" value="{{ old('name', $plate->name) }}">

            </div>

            {{-- Descrizione piatto --}}
            <div @error('description') class="is-invalid" @enderror>

                <label for="description">Descrizione/Ingredienti piatto:</label>
                <textarea name="description" required cols="30" rows="10">{{ old('description', $plate->description) }}</textarea>

            </div>

            {{-- Disponibilità piatto --}}
            <div @error('available') class="is-invalid" @enderror>

                <label for="available">Disponibilità piatto:</label>
                <input type="radio" name="available" value="1" @if ($plate->available) checked @endif>
                <label for="1">Disponibile</label>
                <input type="radio" name="available" value="0" @if (!$plate->available) checked @endif>
                <label for="0">Non disponibile</label>

            </div>

            {{-- Prezzo del piatto --}}
            <div @error('price') class="is-invalid" @enderror>

                <label for="price">Prezzo piatto:</label>
                <input type="number" name="price" step=".01" min="0" max="99.99"
                    value="{{ old('price', $plate->price) }}">

            </div>

            {{-- TODO: Caricamento immagine --}}

            {{-- Invio form --}}
            <div>
                <input type="submit" value="Aggiorna">
            </div>

            {{-- Ritorno alla vista dei post --}}
            <div>
                <a href="{{ route('admin.plates.show', $plate->id) }}">Back to Plate</a>
            </div>

        </form>
    </div>
@endsection
