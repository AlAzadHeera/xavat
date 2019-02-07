@extends('layouts.frontend.frontex')

@section('','')

@push('css')

@endpush

@section('content')

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area" style="background-image:url({{ asset('frontend/img/bg/breadcrumb_bg.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title mb-30">
                            <h2>Our Portfolio</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- portfolio-area -->
    <section class="portfolio-area portfolio-padding pt-140 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center d-none d-sm-block">
                    <div class="portfolio-menu mb-40">
                        <button class="active" data-filter="*">All project</button>
                        @foreach($categories as $category)
                            <button data-filter=".{{ $category->id }}">{{ $category->cat_name }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row portfolio-active">
                @foreach($portfolios as $portfolio)
                <div class="col-lg-4 col-md-6 grid-item {{ $portfolio->category }}">
                    <div class="portfolio-item text-center mb-30">
                        <div class="portfolio-thumb">
                            <img src="{{ asset('uploads/portfolio/'.$portfolio->thumbnail) }}" alt="">
                        </div>
                        <div class="portfolio-overly">
                            <span>{{ $portfolio->cat_name }}</span>
                            <h5><a href="portfolio-details.html">{{ $portfolio->name }}</a></h5>
                            <div class="portfolio-link">
                                <a href="{{ asset('uploads/portfolio/'.$portfolio->thumbnail) }}" class="popup-image"><i class="fas fa-search"></i></a>
                                <a href="{{ route('portfolio.show',$portfolio->id) }}"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="protfolio-btn text-center mt-20">
                        <a href="#" class="btn">more works</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio-area-end -->
@endsection

@push('scripts')

@endpush