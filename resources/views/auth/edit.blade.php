@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="boo-cyan">Modifica il tuo profilo</h1>

        {{-- Email --}}
        <div class="email-info">
            <span>La tua email: </span> <span class="pl-2">{{ Auth::user()->email }}</span>
        </div>


        <form action="{{ route('admin.profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data"
            class="pt-5 d-flex flex-column">
            @csrf
            @method('PATCH')

            {{-- Nome --}}
            <div class="form-group row">
                <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name (Accountholder)') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name', Auth::user()->name) }}" required autocomplete="name">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <!-- Activity Name -->
            <div class="form-group row">
                <label for="activity_name" class="col-md-2 col-form-label text-md-right">{{ __('Activity name') }}</label>

                <div class="col-md-6">
                    <input id="activity_name" type="text"
                        class="form-control @error('activity_name') is-invalid @enderror" name="activity_name"
                        value="{{ old('activity_name', Auth::user()->activity_name) }}" required
                        autocomplete="activity_name">

                    @error('activity_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- Checkbox dei type --}}
            {{-- TODO: validation  --}}
            @if ($errors->any())
                <div class="form-group row">
                    <label for="type"
                        class="col-md-2 col-form-label text-md-right">{{ __('Tipologie ristorante') }}</label>

                    {{-- Elenco checkbox --}}
                    <div class="col-md-6">
                        {{-- Qua trattiamo i dati presenti nel form rimbalzato --}}
                        <div @error('types') class="is-invalid" @enderror>

                            @foreach ($types as $type)
                                <div class="type-info">
                                    <input type="checkbox" name="types[]" value="{{ $type->id }}"
                                        {{ in_array($type->id, old('types', [])) ? 'checked' : '' }}>
                                    <label>{{ $type->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    @error('types')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
            @else
                {{-- Qua trattiamo i dati presenti nella tabella Tags --}}
                <div class="form-group row">

                    <label for="type"
                        class="col-md-2 col-form-label text-md-right">{{ __('Tipologie ristorante') }}</label>

                    {{-- Elenco checkbox --}}
                    <div class="col-md-6">

                        @foreach ($types as $type)
                            <div class="type-info">
                                <input type="checkbox" @error('types') class="is-invalid" @enderror name="types[]"
                                    value="{{ $type->id }}" {{ $user->types->contains($type) ? 'checked' : '' }}>
                                <label>{{ $type->name }}</label>
                            </div>
                        @endforeach

                    </div>

                    @error('types')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                </div>
            @endif


            <!-- Address -->
            <div class="form-group row">
                <label for="address" class="col-md-2 col-form-label text-md-right">{{ __('Address') }}</label>

                <div class="col-md-6">
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                        name="address" value="{{ old('address', Auth::user()->address) }}" required autocomplete="address">

                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <!-- VAT Number -->
            <div class="form-group row">
                <label for="vat_number" class="col-md-2 col-form-label text-md-right">{{ __('VAT Number') }}</label>

                <div class="col-md-6">
                    <input id="vat_number" type="number" class="form-control @error('vat_number') is-invalid @enderror"
                        name="vat_number" value="{{ old('vat_number', Auth::user()->vat_number) }}" required
                        autocomplete="vat_number">

                    @error('vat_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <!-- Image -->
            <div class="form-group row">
                <label for="image"
                    class="col-md-2 col-form-label text-md-right">{{ __('Choose an image (optional)') }}</label>

                <div class="col-md-6">
                    <input id="image" type="file" class=" @error('image') is-invalid @enderror" name="image"
                        value="{{ old('image') }}" autocomplete="image">

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- Password --}}
            <div class="form-group row">
                <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <a href="{{ route('password.update') }}" class="btn btn-danger">Cambia password</a>
                </div>
            </div>

            {{-- Nav buttons --}}
            <div class="nav-buttons">
                {{-- Invio form --}}

                <input class="btn boo-btn-green mr-2" type="submit" value="Invia modifiche">

                {{-- Ritorno alla vista dell'utente --}}
                <a class="btn boo-btn-cyan" href="{{ route('admin.profile.index') }}">Indietro</a>
            </div>




        </form>

    </div>
@endsection
