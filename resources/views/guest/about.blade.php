@extends('layouts.app')

@section('container')
<style>
    .carousel-inner .carousel-item img {
        border-radius: 15px; /* Adjust the value as needed */
        max-height: 400px;    /* Adjust the height as needed */
        width: auto;          /* Maintain aspect ratio */
        object-fit: cover;    /* Ensure the image fits within the container */
        overflow: hidden;
    }
</style>
    <section class="about-section section-padding" id="section_2">
        <div class="container">
            <div class="row d-flex align-item-center justify-content-center">

                <div class="col-lg-12 col-12 text-center">
                    <h2 class="mb-lg-5 mb-4">Tentang Energia</h2>
                </div>

                <div class="col-lg-5 col-12 me-auto mb-4 mb-lg-0" >
                    <div class="about-text">
                        <h1 >{{ $about->title }}</h1>
                    </div>
                    <div class="about-text">
                        {!! $about->description !!}
                    </div>
                </div>
                <div class="col">
                    <div class="about-container">
                        <img src="{{ asset('template-company') }}/images/8040814.svg" class="img-fluid" alt="">
                    </div>
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="{{ asset('template-company') }}/images/mini-banner (1).jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="{{ asset('template-company') }}/images/mini-banner (2).jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="{{ asset('template-company') }}/images/mini-banner (3).jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="{{ asset('template-company') }}/images/mini-banner (4).jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    
                </div>

            </div>
        </div>
    </section>
@endsection