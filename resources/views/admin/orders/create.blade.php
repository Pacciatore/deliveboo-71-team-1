@extends('layouts.app')

@section('content')
    <h1>CREATE</h1>
    <h2>Create a new order</h2>

    <div>
        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            @method('POST')

            <div>
                <label for="ui_name">Inserisci il tuo nome:</label>
                <input type="text" name="ui_name">
            </div>
            <div>
                <label for="ui_email">Inserisci email:</label>
                <input type="email" name="ui_email">
            </div>
            <div>
                <label for="address">Inserisci indirizzo di consegna</label>
                <input type="text" name="address">
            </div>
            <div>
                <label for="payment">Pagamento effettuato?</label>
                <input type="checkbox" name="payment" value="1">
            </div>
            <div>
                <label for="order_price">Prezzo totale dell'ordine</label>
                <input type="number" name="order_price">
            </div>
            <button type="submit">Crea!</button>
        </form>

    </div>
@endsection
