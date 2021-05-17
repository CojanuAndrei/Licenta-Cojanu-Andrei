@extends('layouts.app')

@section('content')
@include('users.partials.header', [
    'title' => __('Buna ziua,') . ' '. auth()->user()->name.'!',
    'description' => __('Adauga licitatia incarcand fisa de date'),
    'class' => 'col-lg-7'
])   
    <div class="container-fluid mt--7">
        <div class="row ">
            
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('Adaugare licitatie') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Informatii licitatie') }}</h6>
                            
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-name">{{ __('Nume licitatie') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control" required autofocus>

                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">{{ __('Fisa de date') }}</label>
                                    <div class="dropzone dropzone-single" data-toggle="dropzone" data-dropzone-url="http://">
                                        <div class="fallback">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="dropzoneBasicUpload">
                                                <label class="custom-file-label" for="dropzoneBasicUpload">Incarca fisierul...</label>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Incarca') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection
