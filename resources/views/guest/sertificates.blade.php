@extends('layouts.app')

@section('container')
    <section class="membership-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4">
                    <h2><span>Sertifikasi</span></h2>
                </div>
                <div class="row align-items-center">
                    @foreach($sertificates as $sertificate)
                    <div class="col-4 text-center">
                        <img src="{{ asset('storage') }}/{{ $sertificate->logo }}" onClick="popImage('{{ $sertificate->name }}', '{{ asset('storage') }}/', '{{ $sertificate->document }}', '{{ $sertificate->document2 }}')" class="clients-image max-image" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
            <div style="padding:60px;"></div>
            <div class="row">
                <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4">
                    <h2><span>Kerja Sama Perusahaan</span></h2>
                </div>
            </div>

            <div class="row d-flex mt-6 mx-auto">
                @foreach($companies as $company)
                <div class="col-4 col-sm-4 text-center">
                    <img src="{{ asset('storage') }}/{{ $company->logo }}" class="clients-image max-image" alt="">
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection