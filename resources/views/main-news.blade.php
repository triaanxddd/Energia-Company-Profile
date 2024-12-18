<?php
    use Carbon\Carbon;
?>
<section class="events-section section-bg section-padding" id="section_4">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <h2 class="mb-lg-3">News Terbaru</h2>
            </div>

            @foreach($newses as $news)
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
                            <img src="{{ asset('storage') }}/{{ $news->picture }}" class="custom-block-image img-fluid" alt="">

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
        </div>
    </div>
</section>