@extends('layouts.app')

@section('container')
<div class="about-section section-paddin" id="section_3">
    <div class="container">
        
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <h2 class="mb-lg-5 mb-4">Layanan</h2>
                </div>
                @foreach($services as $service)
                    <div class="col-lg-6 col-12">
                            <a href="{{ route('service-view', ['id' => $service->id]) }}">
                            <div class="section-bg-image-block service-card m-4">
                                <h2 class="mb-lg-3 title-text">{{ $service->name }}</h2>
        
                                <p class="about-text">{{ $service->description }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection