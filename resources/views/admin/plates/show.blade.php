{{-- Nome del piatto --}}
<h1>{{ $plate->name }}</h1>

{{-- Mostra l'immagine se presente --}}
@if ($plate->imgPath)
    <div class="img-container">
        <img src="{{ asset('storage/' . $plate->imgPath) }}" alt="{{ $plate->name }}">
    </div>
@endif

{{-- Descrizione/Ingredienti --}}
<div class="plate-info">
    <h4>Descrizione: </h4>
    <p>{{ $plate->description }}</p>
</div>

{{-- Prezzo --}}
<p>€ {{ $plate->price }}</p>

{{-- Disponibilità piatto --}}
@if ($plate->available)
    <p>Piatto disponibile</p>
@else
    <p>Piatto non disponibile</p>
@endif


<div class="nav-buttons">
    <a href="{{ route('admin.plates.index') }}">Back to index</a>
    <a href="{{ route('admin.plates.edit', $plate->id) }}">Edit</a>
</div>
