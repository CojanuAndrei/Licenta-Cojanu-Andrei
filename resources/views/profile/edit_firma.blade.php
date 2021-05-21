@extends('layouts.app', ['title' => __('User Profile')])
@section('navtitle')

@endsection
@section('content')
    @include('users.partials.header', [
        'title' => __('Buna ziua,') . ' '. auth()->user()->name.'!',
        'description' => __('Aici va puteti modifica sau actualiza datele firmei'),
        'class' => 'col-lg-7'
    ])   

    <div class="container-fluid mt--7">
        <div class="row ">
            
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('Datele Firmei') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('profile.update_firma') }}" autocomplete="off">
                            @csrf
                            @method('put')
                            
                            
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                                
                            <div class="pl-lg-4">
                                <h6 class="heading-small text-muted mb-4">{{ __('Date generale') }}</h6>
                                <!--Nume firma-->
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Numele firmei') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control" required autofocus>
                                </div>
                                <!--Nume administrator-->
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Numele administratorului') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control" required autofocus>

                                    
                                </div>
                                <hr class="my-4" />

                                <h6 class="heading-small text-muted mb-4">{{ __('Date de contact ') }}</h6>
                                <!--Adresa firmei-->
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Adresa firmei') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control " required autofocus>
                                </div>
                                <!--E-mail-->
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('E-mail') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control" required autofocus>
                                </div>
                                <!--Telefon firma-->
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Telefon') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control"required autofocus>
                                </div>
                                <hr class="my-4" />

                                <h6 class="heading-small text-muted mb-4">{{ __('Date fiscale ') }}</h6>
                                <!--Cod fiscal-->
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Cod fiscal') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control"  required autofocus>
                                </div>
                                <!--Numar de inregistrare-->
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Numar de inregistrare') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control"  required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <!--Data inregistrarii-->
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Data inregistrarii') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control"  required autofocus>
                                </div>
                                <!--Incadrare legala-->
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Incadrare legala') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control" required autofocus>
                                </div>

                                <!--Cifra de afaceri din anul precedent-->
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Cifra de afaceri (anul precedent)') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <!--Cifra de afaceri 2 ani precedenti-->
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Cifra de afaceri (cu 2 ani in urma)') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control" required autofocus>
                                </div>

                                <!--Cifra de afaceri 3 ani precedenti-->
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Cifra de afaceri (cu 3 ani in urma)') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control" required autofocus>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Salveaza') }}</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection
