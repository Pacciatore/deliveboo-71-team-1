<h1>INDEX</h1>
<h2>Ordini:</h2>

@foreach ($orders as $order)
    <div style="border: 1px solid black;">
        <div>Ordine numero: 
            <strong>{{ $order->id }}</strong>
        </div>
        <div>Ordine effettuato da: 
            <strong>{{ $order->ui_name }}</strong>
        </div>
        <div>Indirizzo email associata all'ordine: 
            <strong>{{ $order->ui_email }}</strong>
        </div>
        <div>Indirizzo di consegna dell'ordine: 
            <strong>{{ $order->address }}</strong>
        </div>
        <div>Pagamento: 
            <strong>
                @if( $order->payment )
                Pagamento effettuato!
                @else
                In attesa di pagamento!
                @endif
            </strong>
        </div>
        <div>Totale dell'ordine: 
            <strong>{{ $order->order_price }} &euro;</strong> 
        </div>
    </div>
@endforeach

<a href="{{ route('orders.create') }}">Crea un nuovo ordine!</a>