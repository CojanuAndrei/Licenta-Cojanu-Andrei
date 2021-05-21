@extends('layouts.app')

@section('content')
@include('users.partials.header', [
    'title' => __('Buna ziua,') . ' '. auth()->user()->name.'!',
    'description' => __('Aici puteti vedea angajatii si imputernicitii firmei'),
    'class' => 'col-lg-7'
])   
    <div class="container-fluid mt--7">
        
        <div class=" mt-5">
            <div class="mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                 <h3 class="mb-0">Licitatii</h3>
                            </div>
                           <div class="col text-right">
                                <div class="input-group mb-1">
                                    <input type="text" class="form-control border-primary col-12 " placeholder="Scrie aici..." aria-label="search">
                                    <select class="form-control border-primary col-4" data-toggle="select" data-minimum-results-for-search="Infinity">
                                        <option>Nume imputernicit</option>
                                        <option>E-mail</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="button" id="button-addon2">Cauta</button>
                                    </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nume imputernicit</th>
                                    <th scope="col">E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        Imputernicit1
                                    </th>
                                    <td>
                                        email1
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Imputernicit2
                                    </th>
                                    <td>
                                        email2
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Imputernicit3
                                    </th>
                                    <td>
                                        email3
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Imputernicit4
                                    </th>
                                    <td>
                                        email4
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Imputernicit5
                                    </th>
                                    <td>
                                        email5
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush