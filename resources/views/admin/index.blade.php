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

        {{-- Image --}}
        @if (Auth::user()->imgPath)
            <div class="img-container img-thumbnail float-left mr-2">
                <img class="img-fluid" src="{{ asset('storage/' . Auth::user()->imgPath) }}" alt="Registered User Image">
            </div>
        @endif

        {{-- Profile info --}}
        <div class="profile-info card">

            <div>{{ __('Nome: ') }} {{ Auth::user()->name }}</div>
            <div>{{ __('Nome attività: ') }} {{ Auth::user()->activity_name }}</div>
            <div>{{ __('Slug: ') }} {{ Auth::user()->slug }}</div>
            <div>{{ __('Tipologia risorante: ') }} {{ Auth::user()->type }}</div>
            <div>{{ __('Email: ') }} {{ Auth::user()->email }}</div>
            <div>{{ __('Indirizzo: ') }} {{ Auth::user()->address }}</div>
            <div>{{ __('Partita IVA: ') }} {{ Auth::user()->vat_number }}</div>

        </div>

        {{-- Nav buttons --}}
        <div class="nav-buttons">
            {{-- Modifica profilo --}}
            <a class="btn boo-btn-green mr-2" href="{{ route('admin.profile.edit', Auth::user()->id) }}">Modifica
                profilo</a>

            {{-- Ritorno alla vista dei post --}}
            <a class="btn boo-btn-cyan" href="{{ route('admin.plates.index') }}">Visualizza piatti</a>
        </div>

    </div>
@endsection
