@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">{{ __('User details') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>{{ __('Name: ') }} {{ Auth::user()->name }}</div>
                    <div>{{ __('Activity Name: ') }} {{ Auth::user()->activity_name }}</div>
                    <div>{{ __('Slug: ') }} {{ Auth::user()->slug }}</div>
                    <div>{{ __('Type: ') }} {{ Auth::user()->type }}</div>
                    <div>{{ __('Email: ') }} {{ Auth::user()->email }}</div>
                    <div>{{ __('Address: ') }} {{ Auth::user()->address }}</div>
                    <div>{{ __('VAT Number: ') }} {{ Auth::user()->vat_number }}</div>
                    <div>
                        @if(Auth::user()->imgPath)
                        <img src="{{ asset('storage/' . Auth::user()->imgPath) }}" alt="Registered User Image">
                        @endif
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
