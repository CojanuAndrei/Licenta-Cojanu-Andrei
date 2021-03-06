@extends('layouts.app')

@section('content')
@include('users.partials.header', [
    'title' => __('Buna ziua,') . ' '. auth()->user()->name.'!',
    'description' => __('Aici puteti vedea detaliile licitatiilor la care participa firma'),
    'class' => 'col-lg-7'
])   
    <div class="container-fluid mt--7">
        <form  method="post" action="{{route('editare_licitatie')}}" autocomplete="off">
            @csrf
            <div class=" mt-5">
                <div class="mb-5 mb-xl-0">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <label class="form-control-label" for="nume_personalizat">{{ __('Nume personalizat') }}</label>

                                    <input type="text" name="nume_personalizat" id="nume_personalizat" class="form-control" value="{{$licitatie[0]->nume_personalizat}}">
                                </div>



                            </div>
                        </div>
                        <div class="table-responsive">

                            <table class="table align-items-center table-flush">
                                <tbody>

                                        <tr class="thead-light">
                                            <td colspan="2">
                                                <h6 class="heading-small text-muted mb-4">{{ __('Informatii licitatie') }}</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('Beneficiar') }}
                                            </td>
                                            <td>
                                                <input type="text" name="beneficiar" id="beneficiar" class="form-control" value="{{ $licitatie[0]->beneficiar }}" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('Cod de identificare fiscala') }}
                                            </td>
                                            <td>
                                                <input type="text" name="cod_fiscal" id="cod_fiscal" class="form-control" value="{{ $licitatie[0]->cod_fiscal }}" >
                                            </td>
                                        </tr>


                                        <tr class="thead-light">
                                            <td colspan="2">
                                                <h6 class="heading-small text-muted mb-4">{{ __('Adresa autoritatii') }}</h6>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('Adresa locala') }}
                                            </td>
                                            <td>
                                                <input type="text" name="adresa" id="adresa" class="form-control" value="{{ $licitatie[0]->adresa }}" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('Localitate') }}
                                            </td>
                                            <td>
                                                <input type="text" name="localitate" id="localitate" class="form-control" value="{{ $licitatie[0]->localitate }}" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('Tara') }}
                                            </td>
                                            <td>
                                                <input type="text" name="tara" id="tara" class="form-control" value="{{ $licitatie[0]->tara }}" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('Cod Postal') }}
                                            </td>
                                            <td>
                                                <input type="text" name="cod_postal" id="cod_postal" class="form-control" value="{{ $licitatie[0]->cod_postal }}" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('Codul NUTS') }}
                                            </td>
                                            <td>
                                                <input type="text" name="cod_nuts" id="cod_nuts" class="form-control" value="{{ $licitatie[0]->cod_nuts }}" >
                                            </td>
                                        </tr>
                                    

                                        <tr class="thead-light">
                                            <td colspan="2">
                                                <h6 class="heading-small text-muted mb-4">{{ __('Date de contact') }}</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('E-mail') }}
                                            </td>
                                            <td>
                                                <input type="text" name="email" id="email" class="form-control" value="{{ $licitatie[0]->email }}" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('Telefon') }}
                                            </td>
                                            <td>
                                                <input type="text" name="telefon" id="telefon" class="form-control" value="{{ $licitatie[0]->telefon }}" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('Fax') }}
                                            </td>
                                            <td>
                                                <input type="text" name="fax" id="fax" class="form-control" value="{{ $licitatie[0]->fax }}" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('Persoana de contact') }}
                                            </td>
                                            <td>
                                                <input type="text" name="persoana_contact" id="persoana_contact" class="form-control" value="{{ $licitatie[0]->persoana_contact }}" >
                                            </td>
                                        </tr>


                                        <tr class="thead-light">
                                            <td colspan="2">
                                                <h6 class="heading-small text-muted mb-4">{{ __('Date achizitie') }}</h6>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('Titlu') }}
                                            </td>
                                            <td>
                                                <input type="text" name="titlu" id="titlu" class="form-control" value="{{ $licitatie[0]->titlu }}" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('Tip contract') }}
                                            </td>
                                            <td>
                                                <input type="text" name="tip_contract" id="tip_contract" class="form-control" value="{{ $licitatie[0]->tip_contract }}" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('Descriere succinta') }}
                                            </td>
                                            <td>
                                                <textarea rows="20" type="text" name="descriere_succinta" id="descriere_succinta" class="form-control" >{{ $licitatie[0]->descriere_succinta }}</textarea>
                                            </td>
                                        </tr>

                                    
                                        <tr class="thead-light">
                                            <td colspan="2">
                                                <h6 class="heading-small text-muted mb-4">{{ __('Valori achizitie') }}</h6>
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('Valoarea totala estimata fara TVA') }}
                                            </td>
                                            <td>
                                                <input type="text" name="valoare_totala_ftva" id="valoare_totala_ftva" class="form-control" value="{{ $licitatie[0]->valoare_totala_ftva }}" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('Moneda') }}
                                            </td>
                                            <td>
                                                <input type="text" name="moneda" id="moneda" class="form-control" value="{{ $licitatie[0]->moneda }}" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('Informatii suplimentare') }}
                                            </td>
                                            <td>
                                                <textarea rows="20" type="text" name="informatii_suplimentare" id="informatii_suplimentare" class="form-control"  >{{ $licitatie[0]->informatii_suplimentare }}</textarea>
                                            </td>
                                        </tr>


                                        <tr class="thead-light">
                                            <td colspan="2">
                                                <h6 class="heading-small text-muted mb-4">{{ __('Loturi achizitie') }}</h6>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="form-control-label">
                                                {{ __('Numarul de loturi') }}
                                            </td>
                                            <td>
                                                <input type="text" name="nr_loturi" id="nr_loturi" class="form-control" value="{{ $licitatie[0]->nr_loturi }}" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-center">
                                                <div class="text-center">
                                                    <input type="hidden" id="id_lic" name="id_lic" value="{{$licitatie[0]->id}}">
                                                    <button type="submit" class="btn btn-info p-1">{{ __('Salveaza') }}</button>
                                                </div>
                                            </td>
                                        </tr>
                                        

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
            </div>
        </form>
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush