<h1>Elenco piatti</h1>

@foreach ($plates as $plate)
    <p> <a href="{{ route('admin.plates.show', $plate->id) }}"> {{ $plate->name }}</a></p>
@endforeach
