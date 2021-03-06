@extends('layouts.app', ['class' => 'bg-default'])

@section('content')

    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                            <h1 class="text-white">{{ __('Contul tau este verificat.') }}</h1>
                            <h2 class="text-white">{{ __('Trebuie sa completezi datele firmei pentru a facilita procesul de generare al formularelor.') }}</h2>
                            <h2 class="text-white">{{ __('') }}</h2>
                        </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" method="GET" action="{{ route('login') }}">
                            @csrf
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Ok!') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
