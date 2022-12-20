@extends('layouts.app')

@section('content')
    <div class="container clearfix">
        {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}

        <h1>{{ __('Benvenuto nel tuo profilo ' . env('APP_NAME')) }}</h1>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="row justify-content-around gx-3 gy-3">
            {{-- Image --}}
            @if (Auth::user()->imgPath)
                <div class="card col-12 col-sm-12 col-md-6 col-lg-6">
                    <img class="img-fluid" src="{{ asset('storage/' . Auth::user()->imgPath) }}" alt="Registered User Image">
                </div>
            @endif

            {{-- Profile info --}}
            <div class="profile-info card col-12 col-sm-12 col-md-6 col-lg-6">

                <div>{{ __('Nome: ') }} {{ Auth::user()->name }}</div>
                <div>{{ __('Nome attività: ') }} {{ Auth::user()->activity_name }}</div>
                <div>{{ __('Slug: ') }} {{ Auth::user()->slug }}</div>
                <div>{{ __('Tipologia ristorante: ') }}

                    @foreach (Auth::user()->types as $type)
                        <span>{{ $type->name }}</span>
                    @endforeach

                </div>





                <div>{{ __('Email: ') }} {{ Auth::user()->email }}</div>
                <div>{{ __('Indirizzo: ') }} {{ Auth::user()->address }}</div>
                <div>{{ __('Partita IVA: ') }} {{ Auth::user()->vat_number }}</div>

            </div>



        </div>

        {{-- Nav buttons --}}
        <div class="nav-buttons">
            {{-- Modifica profilo --}}
            <a class="btn boo-btn-green" href="{{ route('admin.profile.edit', Auth::user()->id) }}">Modifica
                profilo</a>

            {{-- Ritorno alla vista dei piatti --}}
            <a class="btn boo-btn-cyan mx-2" href="{{ route('admin.plates.index') }}">Visualizza piatti</a>

            {{-- Ritorno alla vista degli ordini --}}
            <a class="btn boo-btn-orange" href="{{ route('admin.orders.index') }}">Visualizza ordini</a>
        </div>
    </div>
@endsection
