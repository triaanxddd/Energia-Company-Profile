@extends('layouts.app')

@section('container')
<?php
    use Carbon\Carbon;
?>
<section class="hero-section hero-50 d-flex justify-content-center align-items-center" >

<div class="section-overlay"></div>

<svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#487cfc" 
    d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#487cfc" 
    d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#487cfc" 
    d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#487cfc" 
    d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#487cfc" 
    d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#487cfc" 
    d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#487cfc" 
    d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>

<div class="container">
    <div class="row">

        <div class="col-lg-6 col-12">

            <h1 class="text-white mb-4 pb-2">Service Detail</h1>
        </div>

    </div>
</div>

<svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#ffffff" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>
</section>
<section class="events-section events-detail-section section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-8 col-12 mx-auto">
                
                <div class="custom-block-info">
                    <h1 class="mb-lg-5 mb-4" style="color: var(--p-color)">{{ $service->name }}</h1>

                    <div class="custom-block-image-wrap d-flex align-items-center justify-content-center">
                        <img src="{{ asset('storage') }}/{{ $service->picture }}" class="custom-block-image img-fluid" alt="">
                    </div>
                    <div class="mt-5 mb-5 about-text">
                        {!! $service->description !!}
                    </div>

                    <div class="contact-info">
                        <div class="contact-info-item mt-5">
                            <div class="contact-info-body">
                                <strong>Kota Bekasi, Indonesia</strong>

                                <p class="mt-2 mb-1">
                                    <a href="tel: 010-020-0340" class="contact-link">
                                        +62-21 84982447
                                    </a>
                                </p>

                                <p class="mb-0">
                                    <a href="mailto:info@energiatransmedia.co.id" class="contact-link">
                                    info@energiatransmedia.co.id
                                    </a>
                                </p>
                            </div>

                            <div class="contact-info-footer">
                                <a href="#">Directions</a>
                            </div>
                        </div>

                        <img src="{{ asset('template-company') }}/images/WorldMap.svg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection