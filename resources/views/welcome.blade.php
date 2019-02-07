@extends('layouts.frontend.frontex')

@section('title','Slider')

@push('css')

@endpush

@section('content')

    <!-- slider-area -->
    <section class="slider-area slider-bg" style="background-image:url({{ asset('frontend/img/slider/slider_01.png') }})">
        <div class="slider-active">
            <div class="single-slider">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8">
                            <div class="slider-content">
                                <h2 data-animation="fadeInLeft" data-delay=".2s">Business Deserves Better Software</h2>
                                <p data-animation="fadeInLeft" data-delay=".4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                    et dolore magna aliqua.</p>
                                <form method="post" action="{{url('storeSubscriber')}}" class="slider-form" data-animation="fadeInLeft" data-delay=".6s">
                                    @csrf
                                    <input name="email" type="email" placeholder="Enter your email address">
                                    <button class="btn">subscribe</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="slider-img" data-animation="fadeInRight" data-delay=".6s">
                                <img src="{{ asset('frontend/img/slider/slider_img.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-area-end -->
    <!-- features-area -->
    <section class="features-area features-lg-p pt-140 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-features text-center mb-30">
                        <div class="features-icon mb-30">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <div class="features-content mb-35">
                            <h4>Product Development</h4>
                            <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="features-icon">
                            <a href="#"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features active text-center mb-30">
                        <div class="features-icon mb-30">
                            <i class="fas fa-sliders-h"></i>
                        </div>
                        <div class="features-content mb-35">
                            <h4>Marketing & Planning</h4>
                            <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="features-icon">
                            <a href="#"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features text-center mb-30">
                        <div class="features-icon mb-30">
                            <i class="fas fa-headphones-alt"></i>
                        </div>
                        <div class="features-content mb-35">
                            <h4>24/7 Online Support</h4>
                            <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <div class="features-icon">
                            <a href="#"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-romada about-lg-p theme-bg pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('frontend/img/features/features_01.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title mb-20">
                        <span>About Xavat</span>
                        <h2>Get Started With Our Software</h2>
                    </div>
                    <div class="about-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                        <p>Commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum. Sed ut perspiciatis unde omnis iste.</p>
                    </div>
                    <div class="about-btn">
                        <a href="#" class="btn">get started now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features-area-end -->
    <!-- join-area -->
    <section class="join-area join-md-p fix pt-120 pb-125">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title mb-40">
                        <span>Join With Us Today</span>
                        <h2>Solve Your Problem With Very Faster</h2>
                    </div>
                    <div class="join-list mb-40">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <p>Ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="join-btn">
                        <a href="#" class="btn">start 7 day trail</a>
                        <a href="https://www.youtube.com/watch?v=vKSA_idPZkc" class="video-btn popup-video"><i class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <div class="join-img">
                        <img src="{{ asset('frontend/img/features/join_img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- join-area-end -->
    <!-- promotion-area -->
    <section class="promotion-area theme-bg pt-100 pb-105">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="promotion-img">
                        <img src="{{ asset('frontend/img/promotion/promotion_img.png') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-7">
                    <div class="section-title mb-50">
                        <span>Grow Your Marketing Style</span>
                        <h2>Grow Your Business With Xavat</h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-promotion-wrap mb-35">
                                <div class="promotion-icon mb-25">
                                    <i class="fas fa-pen"></i>
                                </div>
                                <div class="promotion-content">
                                    <h5>User Friendly Design</h5>
                                    <p>Lorem ipsum dolor sit amet ctetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-promotion-wrap mb-35">
                                <div class="promotion-icon mb-25">
                                    <i class="fas fa-cog"></i>
                                </div>
                                <div class="promotion-content">
                                    <h5>Easy To Edit</h5>
                                    <p>Lorem ipsum dolor sit amet ctetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="promotion-btn">
                        <a href="#" class="btn">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- promotion-area-end -->
    <!-- team-area -->
    <section class="team-area pt-133 pb-130">
        <div class="container">
            <div class="row align-items-center mb-70">
                <div class="col-xl-8">
                    <div class="section-title">
                        <span>Our Angeles</span>
                        <h2>We Are Always Looking For True Software Craftsmen</h2>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-btn">
                        <a href="#" class="btn">join with us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid tem-padding fix">
            <div class="row team-active">
                <div class="single-team text-center">
                    <div class="team-img">
                        <img src="{{ asset('frontend/img/team/team_01.jpg') }}" alt="">
                    </div>
                    <p>Rosalina J. Pong, Lead Designer</p>
                    <div class="team-overly">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>
                <div class="single-team text-center">
                    <div class="team-img">
                        <img src="{{ asset('frontend/img/team/team_02.jpg') }}" alt="">
                    </div>
                    <p>Salim r. jio, Web Developer</p>
                    <div class="team-overly">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>
                <div class="single-team text-center">
                    <div class="team-img">
                        <img src="{{ asset('frontend/img/team/team_03.jpg') }}" alt="">
                    </div>
                    <p>Tanvir r. Pong, Web Designer</p>
                    <div class="team-overly">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>
                <div class="single-team text-center">
                    <div class="team-img">
                        <img src="{{ asset('frontend/img/team/team_04.jpg') }}" alt="">
                    </div>
                    <p>Shuvo h. Graphic Designer</p>
                    <div class="team-overly">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>
                <div class="single-team text-center">
                    <div class="team-img">
                        <img src="{{ asset('frontend/img/team/team_05.jpg') }}" alt="">
                    </div>
                    <p>Shom Pa. Lead Designer</p>
                    <div class="team-overly">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>
                <div class="single-team text-center">
                    <div class="team-img">
                        <img src="{{ asset('frontend/img/team/team_06.jpg') }}" alt="">
                    </div>
                    <p>Rosalina J. Pong, Lead Designer</p>
                    <div class="team-overly">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area-end -->
    <!-- services-area -->
    <section class="services-area fix theme-bg pt-105 pb-105">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title mb-70">
                        <span>Our Services</span>
                        <h2>Grow Your Business With Xavat</h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-services mb-50">
                                <div class="services-icon">
                                    <i class="fas fa-sign"></i>
                                </div>
                                <div class="services-content">
                                    <h5>Branding</h5>
                                    <p>Lorem ipsum dolor sit amet ctetur adipisicing elit, sed do eiusmod.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-services mb-50">
                                <div class="services-icon">
                                    <i class="fas fa-fire"></i>
                                </div>
                                <div class="services-content">
                                    <h5>Development</h5>
                                    <p>Lorem ipsum dolor sit amet ctetur adipisicing elit, sed do eiusmod.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-services">
                                <div class="services-icon">
                                    <i class="fas fa-fingerprint"></i>
                                </div>
                                <div class="services-content">
                                    <h5>Interior</h5>
                                    <p>Lorem ipsum dolor sit amet ctetur adipisicing elit, sed do eiusmod.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-services">
                                <div class="services-icon">
                                    <i class="fas fa-cube"></i>
                                </div>
                                <div class="services-content">
                                    <h5>Consultancy</h5>
                                    <p>Lorem ipsum dolor sit amet ctetur adipisicing elit, sed do eiusmod.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-5">
                    <div class="services-img">
                        <img src="{{ asset('frontend/img/services/services_img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->
    <!-- best-features -->
    <section class="best-features bf-lg-p pt-92 pb-92">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-5">
                    <div class="b-features-img">
                        <img src="{{ asset('frontend/img/features/best_features.png') }}" alt="img">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title bf-title mb-70">
                        <span>Best UI/UX Design</span>
                        <h2>Increase You Design With This Theme</h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-bf mb-55">
                                <div class="bf-icon">
                                    <i class="fas fa-glasses"></i>
                                </div>
                                <div class="bf-content">
                                    <h4>Creative Soultions</h4>
                                    <p>Lorem ipsum dolor sit amet ctetur adipisicing elit, sed do eiusmod.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-bf mb-55">
                                <div class="bf-icon">
                                    <i class="fas fa-key"></i>
                                </div>
                                <div class="bf-content">
                                    <h4>Secure & private</h4>
                                    <p>Lorem ipsum dolor sit amet ctetur adipisicing elit, sed do eiusmod.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-bf">
                                <div class="bf-icon">
                                    <i class="fas fa-globe-asia"></i>
                                </div>
                                <div class="bf-content">
                                    <h4>International</h4>
                                    <p>Lorem ipsum dolor sit amet ctetur adipisicing elit, sed do eiusmod.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-bf">
                                <div class="bf-icon">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="bf-content">
                                    <h4>24/7 Support</h4>
                                    <p>Lorem ipsum dolor sit amet ctetur adipisicing elit, sed do eiusmod.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- best-features-end -->
    <!-- testimonail-area -->
    <section class="testimonial-area testimonail-bg pt-130 pb-140" style="background-image:url({{ asset('frontend/img/bg/testimonial_bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title testimonial-title mb-70">
                        <h2>Our Happy Clients Say’s About US</h2>
                    </div>
                    <div class="testimonial-active">
                        @foreach($testimonials as $testimonial)
                        <div class="single-testimonial">
                            <div class="testimonial-quote mb-30">
                                <img src="{{ asset('frontend/img/testimonail/quote.png') }}" alt="">
                            </div>
                            <div class="testimonial-content mb-45">
                                <p>{!! $testimonial->testimonial !!}</p>
                            </div>
                            <div class="testimonial-avatar">
                                <div class="avatar">
                                    <img src="{{ asset('frontend/img/testimonail/'.$testimonial->avatar) }}" alt="">
                                </div>
                                <div class="avatar-info">
                                    <h6>{{ $testimonial->name }}</h6>
                                    <span>{{ $testimonial->designation }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonail-area-end -->
    <!-- faq-area -->
    <section class="faq-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                    <div class="faq-img">
                        <img src="{{ asset('frontend/img/faq/faq_img.png') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="faq-padding pt-133 pb-140">
                        <div class="section-title faq-title mb-70">
                            <span>Freequently Asked Questions</span>
                            <h2>You Will Get Any Answers Form There</h2>
                        </div>
                        <div class="faq-wrapper">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn faq-btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne"
                                                    aria-expanded="false" aria-controls="collapseOne">
                                                What you get after buying our product?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                            eu fugiat.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn faq-btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo"
                                                    aria-expanded="true" aria-controls="collapseTwo">
                                                What are features inside the template?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                            eu fugiat.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn faq-btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                What are the plugins used?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                            eu fugiat.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button class="btn faq-btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                What are features inside the template?
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                        <div class="card-body">
                                            Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                            eu fugiat.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-area-end -->
    <!-- pricing-area -->
    <section class="pricing-area theme-bg pt-133 pb-110">
        <div class="container">
            <div class="row align-items-center mb-70">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-title">
                        <span>Pricing Plans</span>
                        <h2>Get Your Right Choices With Us</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4">
                    <div class="price-btn">
                        <a href="#" class="btn">more plans</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-box text-center mb-30">
                        <div class="pricing-head">
                            <span>BASIC</span>
                            <h2>Free<span>/mo</span></h2>
                        </div>
                        <div class="pricing-body">
                            <img src="{{ asset('frontend/img/pricing/pricing_icon.png') }}" alt="">
                            <p>Labore et dolore magna aliqua. Ut enim ad minim veniam, quis in nostrud is exercitation.</p>
                        </div>
                        <div class="pricing-btn">
                            <a href="#" class="btn">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-box active text-center mb-30">
                        <div class="pricing-head">
                            <span>ADVANCED</span>
                            <h2>$79<span>/mo</span></h2>
                        </div>
                        <div class="pricing-body">
                            <img src="{{ asset('frontend/img/pricing/pricing_icon.png') }}" alt="">
                            <p>Labore et dolore magna aliqua. Ut enim ad minim veniam, quis in nostrud is exercitation.</p>
                        </div>
                        <div class="pricing-btn">
                            <a href="#" class="btn">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="pricing-box text-center mb-30">
                        <div class="pricing-head">
                            <span>TEAM</span>
                            <h2>$99<span>/mo</span></h2>
                        </div>
                        <div class="pricing-body">
                            <img src="{{ asset('frontend/img/pricing/pricing_icon.png') }}" alt="">
                            <p>Labore et dolore magna aliqua. Ut enim ad minim veniam, quis in nostrud is exercitation.</p>
                        </div>
                        <div class="pricing-btn">
                            <a href="#" class="btn">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-area-end -->
@endsection

@push('scripts')

@endpush