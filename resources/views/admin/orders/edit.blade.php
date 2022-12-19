@extends('layouts.app')

@section('content')
    <div>
        <form action="{{ route('admin.orders.update', ['order' => $order->id]) }}" method="POST">
            @csrf
            @method('PATCH')

            <div>EDIT</div>
            <div>
                <label for="ui_name">Inserisci il tuo nome:</label>
                <input type="text" name="ui_name" value="{{ old('order', $order->ui_name) }}">
            </div>
            <div>
                <label for="ui_email">Inserisci email:</label>
                <input type="email" name="ui_email" value="{{ old('order', $order->ui_email) }}">
            </div>
            <div>
                <label for="address">Inserisci indirizzo di consegna</label>
                <input type="text" name="address" value="{{ old('order', $order->address) }}">
            </div>
            <div>
                <label for="payment">Pagamento effettuato?</label>
                <input type="checkbox" name="payment" {{ old('order', $order->payment) ? 'checked value=0' : 'value=1' }}>
            </div>
            <div>
                <label for="order_price">Prezzo totale dell'ordine</label>
                <input type="number" name="order_price" value="{{ old('order', $order->order_price) }}">
            </div>
            <input value="Save" type="submit">
            <a class="btn btn-primary" href="{{ route('admin.orders.index') }}">Back to orders</a>
        </form>

    </div>
@endsection
