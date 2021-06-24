@extends('layouts.app')

@section('content')
@include('users.partials.header', [
    'title' => __('Buna ziua,') . ' '. auth()->user()->name.'!',
    'description' => __('Trebuie sa alegeti o licitatie careia sa ii generati formularele.'),
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
                                    <th scope="col">Contact</th>
                                    <th scope="col"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($licitatii as $licitatie)
                                    <tr>
                                        <td scope="row">
                                            {{$licitatie->nume_personalizat}}
                                        </td>
                                        <td>
                                            {{$licitatie->beneficiar}}
                                        </td>
                                        <td>
                                            {{$licitatie->adresa}},{{$licitatie->localitate}},{{$licitatie->tara}}
                                        </td>
                                        <td>
                                            {{$licitatie->email}}, {{$licitatie->persoana_contact}}, {{$licitatie->telefon}}
                                        </td>
                                        <td>
                                            <form  method="post" action="{{route('ales_licitatie')}}">
                                                @csrf
                                                <input type="hidden" id="id_lic" name="id_lic" value="{{$licitatie->id}}">
                                                <button type="submit" class="btn btn-info p-1">{{ __('Alege') }}</button>
                                            </form>
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

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush