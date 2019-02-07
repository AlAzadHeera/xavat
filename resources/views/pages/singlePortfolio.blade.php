@extends('layouts.frontend.frontex')

@section('title','Portfolio Details')

@push('css')
<style>

    #social-links li{
        float:left;
    }

</style>
@endpush

@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area" style="background-image:url({{ asset('frontend/img/bg/breadcrumb_bg.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-30">
                            <h2>Portfolio Details</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portfolio Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- portfolio-details -->
    <section class="portfolio-details p-details-padding pt-140 pb-135">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="p-details-wrap">
                        <div class="single-p-details mb-75">
                            <div class="p-details-thumb mb-55">
                                <img src="{{ asset('uploads/portfolio/'.$portfolio->dimage_one) }}" alt="">
                            </div>
                            <div class="details-title section-title mb-20">
                                <span>{{ $portfolio->cat_name }}</span>
                                <h2>{{ $portfolio->dheading_one }}</h2>
                            </div>
                            <div class="p-details-content">
                                <p>{!! $portfolio->dpara_one  !!}</p>
                            </div>
                        </div>
                        <div class="single-p-details mb-75">
                            <div class="p-details-thumb video-thumb mb-55">
                                <img src="{{ asset('uploads/portfolio/'.$portfolio->dimage_two) }}" alt="">
                            </div>
                            <div class="details-title section-title mb-20">
                                <h2>{{ $portfolio->dheading_two }}</h2>
                            </div>
                            <div class="p-details-content">
                                <p> {!! $portfolio->dpara_two !!} </p>
                            </div>
                        </div>
                        <div class="row pb-50 mb-40 p-details-border">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                <div class="project-status mb-30">
                                    <h5>Hapy Client</h5>
                                    <span>{{ $portfolio->client }}</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="project-status mb-30">
                                    <h5>Category</h5>
                                    <span>{{ $portfolio->cat_name }}</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="project-status mb-30">
                                    <h5>Date</h5>
                                    <span>{{ $portfolio->created_at }}</span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="project-status mb-30">
                                    <h5>Share</h5>
                                    <div class="share-icon">
                                        {!! $share !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                                <div class="project-status-btn mb-30">
                                    <a href="{{ $portfolio->link }}" class="btn" target="_blank">Live Preivew</a>
                                </div>
                            </div>
                        </div>
                        <div class="p-details-pagination">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    @if(isset($previous))
                                    <div class="prev-portfolio-link">
                                        <span>Previous Project</span>
                                        <h5><a href="{{ route('portfolio.show',$previous) }}">{{ $prevTitle->name }}</a></h5>
                                    </div>
                                    @endif
                                </div>

                                <div class="col-md-4">
                                    <div class="portfolio-fliter text-center">
                                        <a href="{{ route('portfolio.index') }}"><img src="{{ asset('frontend/img/portfolio/p-filter.png') }}" alt=""></a>
                                    </div>
                                </div>

                                @if(isset($next))
                                <div class="col-md-4">
                                    <div class="next-portfolio-link text-right">
                                        <span>Next Project</span>
                                        <h5><a href="{{ route('portfolio.show',$next) }}">{{ $nextTitle->name }}</a></h5>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio-details-end -->


@endsection

@push('scripts')

    <script src="{{ asset('js/share.js') }}"></script>

@endpush