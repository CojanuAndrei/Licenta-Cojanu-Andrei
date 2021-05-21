@extends('layouts.app')

@section('content')
@include('users.partials.header', [
    'title' => __('Buna ziua,') . ' '. auth()->user()->name.'!',
    'description' => __('Aici puteti vedea licitatiile la care participa firma'),
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
                                        <option>Nume licitatie</option>
                                        <option>Beneficiar</option>
                                        <option>Adresa</option>
                                        <option>E-mail</option>
                                        <option>Status</option>
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
                                    <th scope="col">Nume licitatie</th>
                                    <th scope="col">Beneficiar</th>
                                    <th scope="col">Adresa</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Detalii</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        Licitatie1
                                    </th>
                                    <td>
                                        Beneficiar1
                                    </td>
                                    <td>
                                        adresa1
                                    </td>
                                    <td>
                                        email1
                                    </td>
                                    <td>
                                        <i class="ni ni-check-bold text-success mr-3"></i> Completed
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-info p-1">{{ __('Vezi detalii') }}</button>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Licitatie2
                                    </th>
                                    <td>
                                        Beneficiar2
                                    </td>
                                    <td>
                                        adresa2
                                    </td>
                                    <td>
                                        email2
                                    </td>
                                    <td>
                                        <i class="ni ni-check-bold text-success mr-3"></i> Completed
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-info p-1">{{ __('Vezi detalii') }}</button>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Licitatie3
                                    </th>
                                    <td>
                                        Beneficiar3
                                    </td>
                                    <td>
                                        adresa3
                                    </td>
                                    <td>
                                        email3
                                    </td>
                                    <td>
                                        <i class="ni ni-fat-remove text-red mr-3"></i> Neinceput
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-info p-1">{{ __('Vezi detalii') }}</button>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Licitatie4
                                    </th>
                                    <td>
                                        Beneficiar4
                                    </td>
                                    <td>
                                        adresa4
                                    </td>
                                    <td>
                                        email4
                                    </td>
                                    <td>
                                        <i class="ni ni-check-bold text-success mr-3"></i> Completed
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-info p-1">{{ __('Vezi detalii') }}</button>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Licitatie5
                                    </th>
                                    <td>
                                        Beneficiar5
                                    </td>
                                    <td>
                                        adresa5
                                    </td>
                                    <td>
                                        email5
                                    </td>
                                    <td>
                                        <i class="ni ni-fat-delete text-blue mr-3"></i> Incomplet
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-info p-1">{{ __('Vezi detalii') }}</button>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Licitatie6
                                    </th>
                                    <td>
                                        Beneficiar6
                                    </td>
                                    <td>
                                        adresa6
                                    </td>
                                    <td>
                                        email6
                                    </td>
                                    <td>
                                        <i class="ni ni-check-bold text-success mr-3"></i> Completed
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-info p-1">{{ __('Vezi detalii') }}</button>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Licitatie7
                                    </th>
                                    <td>
                                        Beneficiar7
                                    </td>
                                    <td>
                                        adresa7
                                    </td>
                                    <td>
                                        email7
                                    </td>
                                    <td>
                                        <i class="ni ni-fat-remove text-red mr-3"></i> Neinceput
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-info p-1">{{ __('Vezi detalii') }}</button>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Licitatie8
                                    </th>
                                    <td>
                                        Beneficiar8
                                    </td>
                                    <td>
                                        adresa8
                                    </td>
                                    <td>
                                        email8
                                    </td>
                                    <td>
                                        <i class="ni ni-fat-remove text-red mr-3"></i> Neinceput
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-info p-1">{{ __('Vezi detalii') }}</button>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Licitatie9
                                    </th>
                                    <td>
                                        Beneficiar9
                                    </td>
                                    <td>
                                        adresa9
                                    </td>
                                    <td>
                                        email9
                                    </td>
                                    <td>
                                        <i class="ni ni-fat-delete text-blue mr-3"></i> Incomplet
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-info p-1">{{ __('Vezi detalii') }}</button>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Licitatie10
                                    </th>
                                    <td>
                                        Beneficiar10
                                    </td>
                                    <td>
                                        adresa10
                                    </td>
                                    <td>
                                        email10
                                    </td>
                                    <td>
                                        <i class="ni ni-fat-delete text-blue mr-3"></i> Incomplet
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-info p-1">{{ __('Vezi detalii') }}</button>
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