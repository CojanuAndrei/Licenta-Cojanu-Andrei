@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        
        <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
        </div>
        <div class=" mt-5">
            <div class="mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                 <h3 class="mb-0">Licitatii</h3>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class=" mt-5">
            <div class="mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                 <h3 class="mb-0">Imputerniciti</h3>
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
                                @foreach ($imps as $row)
                                    <tr>
                                        <td scope="row">
                                            {{$row->name}}
                                        </td>
                                        <td>
                                            {{$row->email}}
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
