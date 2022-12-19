@extends('layouts.app')

@section('content')
    <div class="container clearfix">
        <h1>GESTIONE DEGLI ORDINI</h1>

        @foreach ($orders as $order)
            <div class="my-2 border rounded p-2">
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
                        @if ($order->payment)
                            Pagamento effettuato!
                        @else
                            In attesa di pagamento!
                        @endif
                    </strong>
                </div>
                <div>Totale dell'ordine:
                    <strong>{{ $order->order_price }} &euro;</strong>
                </div>
                <div class="d-flex ">
                    <a class="btn btn-primary mr-2" href="{{ route('admin.orders.edit', $order->id) }}">EDIT</a>
                    <form action="{{ route('admin.orders.destroy', ['order' => $order->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <input class="btn btn-danger" type="submit" value="Delete" 
                        onclick="return confirm('{{ __('Are you sure for delete? ') }}')">
                    </form>
                </div>
                
            </div>
            
        @endforeach

        {{-- <a href="{{ route('admin.orders.create') }}">Crea un nuovo ordine!</a> --}}
    </div>
@endsection
