@extends('shopping.layout')

@section('title', 'Products')

@section('content')

    <div class="container products">

        <div class="row">

            @foreach($plates as $plate)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4>{{ $plate->name }}</h4>
                            <p> Some Description</p>
                            <p><strong>Price: </strong> {{ $plate->price }}$</p>
                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$plate->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- End row -->

    </div>

@endsection