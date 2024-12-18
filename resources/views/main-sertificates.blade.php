<style>
    .square {
        /* padding: 40px; */
        background-color: var(--primary-color);
        border-radius: 20px;
        align-items: center;
    }

    .sertificate-image {
        width: 15px;
    }
</style>
<section class="membership-section section-padding">
    <div class="container">
        {{-- <div class="row">
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
        </div> --}}

        <div class="row">
            <div class="col-lg-6 col-12">
                <a href="{{ route('sertificates') }}">
                    <div class="section-service service-card m-4 square">
                        <h2 class="mb-lg-3 title-text text-center text-white">Sertifikasi</h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-12">
                <a href="{{ route('sertificates') }}">
                    <div class="section-service service-card m-4 square">
                        <h2 class="mb-lg-3 title-text text-center text-white">Kerja Sama Perusahaan</h2>
                    </div>
                </a>
            </div>
        </div>
        <div class="row d-flex mt-6 mx-auto">
            @foreach($companies as $company)
            <div class="col-4 col-sm-4 text-center">
                <img src="{{ asset('storage') }}/{{ $company->logo }}" class="clients-image max-image" alt="">
            </div>
            @endforeach
        </div>
        <div class="row d-flex mt-6 mx-auto">
            @foreach($sertificates as $sertificate)
            <div class="col-4 col-sm-4 text-center">
                <img src="{{ asset('storage') }}/{{ $sertificate->logo }}" class="clients-image max-image" alt="">
            </div>
            @endforeach
        </div>
    </div>
</section>