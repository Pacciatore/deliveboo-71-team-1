@extends('layouts.dashboard')

@section('content')
    <div id="edit-plate" class="container">
        <h1>Edit {{ $plate->name }}</h1>

        <form action="{{ route('admin.plates.update', $plate->id) }}" method="POST" enctype="multipart/form-data"
            class="d-flex flex-column">
            @csrf
            @method('PATCH')

            {{-- Nome piatto --}}
            <div class="col-5 my-2 py-2 @error('name') is-invalid @enderror">

                <label for="name">Nome piatto:</label>
                <input type="text" name="name" value="{{ old('name', $plate->name) }}">

                @error('name')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror

            </div>

            {{-- Descrizione piatto --}}
            <div class="col-5 my-2 py-2 @error('description') is-invalid @enderror">

                <label for="description">Descrizione/Ingredienti piatto:</label>
                <textarea name="description" required cols="30" rows="10">{{ old('description', $plate->description) }}</textarea>

                @error('description')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror

            </div>

            {{-- Disponibilità piatto --}}
            <div class="col-5 my-2 py-2 @error('available') is-invalid @enderror">

                <label for="available">Disponibilità piatto:</label>
                <input type="radio" name="available" value="1" @if ($plate->available) checked @endif>
                <label for="1">Disponibile</label>
                <input type="radio" name="available" value="0" @if (!$plate->available) checked @endif>
                <label for="0">Non disponibile</label>

            </div>

            {{-- Prezzo del piatto --}}
            <div class="col-5 my-2 py-2 @error('price') is-invalid @enderror">

                <label for="price">Prezzo piatto:</label>
                <input type="number" name="price" step=".01" min="0" max="99.99"
                    value="{{ old('price', $plate->price) }}">


                @error('price')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror


            </div>

            {{-- Immagine del post --}}
            <div class="col-5 my-2 py-2 @error('price') is-invalid @enderror">

                <div @error('image') class="is-invalid" @enderror>
                    <label for="image">
                        Carica immagine: </label>
                    <input type="file" name="image">
                </div>

                @if ($plate->imgPath)
                    <div class="img-container">
                        <img class="img-fluid" src="{{ asset('storage/' . $plate->imgPath) }}" alt="{{ $plate->name }}">
                    </div>
                @endif

                @error('image')
                    <div class="text-danger"> {{ $message }} </div>
                @enderror

            </div>

            <div class="nav-buttons">
                {{-- Invio form --}}

                <input class="btn boo-btn-green mr-2" type="submit" value="Aggiorna">

                {{-- Ritorno alla vista dei post --}}
                <a class="btn boo-btn-cyan" href="{{ route('admin.plates.show', $plate->id) }}">Back to Plate</a>
            </div>

        </form>
    </div>
@endsection
