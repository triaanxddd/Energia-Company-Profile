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
    d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0">
</path><path fill="#487cfc" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0">
    </path><path fill="#487cfc" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>

<div class="container">
    <div class="row">

        <div class="col-lg-6 col-12">

            <h1 class="text-white mb-4 pb-2">Gallery</h1>

        </div>

    </div>
</div>

<svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#ffffff" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>
</section>


<section class="events-section section-padding" >
<div class="container">
    <div class="row align-items-center img-container">
        
        <div class="col-lg-12 col-12 text-center">
            <h2 class="mb-lg-5 mb-4">Gallery Foto</h2>
        </div>
        @foreach($portfolios as $portfolio)
        <div class="col-4 mb-3">
            <div class="image-container">
                <img src="{{ asset('storage') }}/{{ $portfolio->picture }}" onClick="popImage('{{ $portfolio->name }}', '{{ asset('storage') }}/', '{{ $portfolio->picture }}')" id="myImg" class="w-100" alt="...">
            </div>
        </div>
        @endforeach
    </div>
</div>

</section>


@endsection