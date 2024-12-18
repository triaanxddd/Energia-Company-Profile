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
    d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path>
</svg>

<div class="container">
    <div class="row">

        <div class="col-lg-6 col-12">

            <h1 class="text-white mb-4 pb-2">News Listing</h1>

            <a href="/#section_3" class="btn custom-btn smoothscroll me-3">Explore Events</a>
        </div>

    </div>
</div>

<svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#ffffff" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>
</section>


<section class="events-section section-padding" >
<div class="container">
    <div class="row">
        
        <div class="col-lg-12 col-12">
            <h2 class="mb-lg-5 mb-4">Berita Terbaru</h2>
        </div>

        @foreach($latestNewses as $news)
            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <div class="custom-block-image-wrap d-flex align-item-center justify-content-center">
                    <a href="{{ route('news-detail', ['id' => $news->id ]) }}">
                        <img src="{{ asset('storage') }}/{{ $news->picture ? $news->picture : 'default/empty.jpg' }}" class="custom-block-image img-fluid" alt="">

                        <i class="custom-block-icon bi-link"></i>
                    </a>

                    <div class="custom-block-date-wrap">
                        <strong class="text-white">{{ Carbon::parse($news->date_uploaded)->format('d M Y');  }}</strong>
                    </div>

                    <div class="custom-btn-wrap">
                        <a href="{{ route('news-detail', ['id' => $news->id ]) }}" class="btn custom-btn">More Info..</a>
                    </div>
                </div>

                <div class="custom-block-info">
                    <a href="{{ route('news-detail', ['id' => $news->id ]) }}" class="events-title mb-2">{{ $news->title }}</a>

                    <p class="mb-0">{!! $news->excerpt !!}</p>


                </div>
            </div>
        @endforeach

    </div>
</div>
</section>


<section class="events-section events-listing-section section-bg section-padding" id="all-news">
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="search">
                <i class="fa fa-search"></i>
                <form action="{{ route('news') }}#all-news" method="get">
                    <input type="text" class="form-control" name="search_name" placeholder="Cari Berita" value="{{ request('search_name') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="col-lg-12 col-12">
            <h2 class="mb-3">Semua Berita</h2>
        </div>

        @foreach($allNews as $news)
            <div class="row custom-block custom-block-bg mb-3">
                <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                    <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                        <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">{{ Carbon::parse($news->date_uploaded)->format('d');  }}</h6>
                        
                        <strong class="text-white">{{ Carbon::parse($news->date_uploaded)->format('M-Y');  }}</strong>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                    <div class="custom-block-image-wrap">
                        <a href="/news-detail/{{ $news->id }}">
                            <img src="{{ asset('storage') }}/{{ $news->picture ? $news->picture : 'default/empty.jpg' }}" class="custom-block-image img-fluid" alt="">

                            <i class="custom-block-icon bi-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-12 order-3 order-lg-0">
                    <div class="custom-block-info mt-2 mt-lg-0">
                        <a href="/news-detail/{{ $news->id }}" class="events-title mb-3">{{ $news->title }}</a>

                        <p class="mb-0">{!! $news->excerpt !!}</p>

                        <div class="d-flex flex-wrap border-top mt-4 pt-3">

                            <div class="mb-4 mb-lg-0">
                            </div>

                            <div class="d-flex align-items-center ms-lg-auto">
                                <a href="/news-detail/{{ $news->id }}" class="btn custom-btn">More Info.. </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="d-flex align-item-center justify-content-center">
                {{ $allNews->links() }}
            </div>
    </div>
</div>
</section>
</main>
@endsection