<h1>Elenco piatti</h1>

<a href="{{ route('admin.plates.create') }}">Aggiungi piatto</a>

@foreach ($plates as $plate)
    <p> <a href="{{ route('admin.plates.show', $plate->id) }}"> {{ $plate->name }}</a></p>
@endforeach
