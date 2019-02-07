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
                            <h2>About Us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- about-video-area -->
    <section class="about-video av-padding pt-133">
        <div class="container">
            <div class="row align-items-center mb-80">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-title">
                        <span>About Xavat</span>
                        <h2>We create brand new corporate identities.</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4">
                    <div class="v-title-btn text-right d-none d-lg-block">
                        <a href="#" class="btn">learn more</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about-video-wrap">
                        <div class="video-img">
                            <img src="{{ asset('frontend/img/bg/about_video_bg.jpg') }}" alt="">
                        </div>
                        <div class="v-play-icon">
                            <a href="https://www.youtube.com/watch?v=vKSA_idPZkc" class="popup-video"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-video-area-end -->
    <!-- skill-area -->
    <section class="skill-area skill-bg pt-190 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-circle-progressbar mb-55 text-center">
                        <div class="circle-progressbar-wrap mb-40">
                            <div class="chart" data-percent="65"></div>
                            <div class="counter-wrap">
                                <span class="counter">65</span>
                                <span>%</span>
                            </div>
                        </div>
                        <h4>Mad Skills</h4>
                        <p>Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-circle-progressbar mb-55 text-center">
                        <div class="circle-progressbar-wrap mb-40">
                            <div class="chart" data-percent="60"></div>
                            <div class="counter-wrap">
                                <span class="counter">60</span>
                                <span>%</span>
                            </div>
                        </div>
                        <h4>Premium Experience</h4>
                        <p>Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-circle-progressbar mb-55 text-center">
                        <div class="circle-progressbar-wrap mb-40">
                            <div class="chart" data-percent="50"></div>
                            <div class="counter-wrap">
                                <span class="counter">50</span>
                                <span>%</span>
                            </div>
                        </div>
                        <h4>Client Focused</h4>
                        <p>Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skill-area-end -->
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
    <!-- testimonail-area -->
    <section class="testimonial-area testimonail-bg pt-130 pb-140" style="background-image:url({{ asset('frontend/img/bg/testimonial_bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title testimonial-title mb-70">
                        <h2>Our Happy Clients Say’s About US</h2>
                    </div>
                    <div class="testimonial-active">
                        <div class="single-testimonial">
                            <div class="testimonial-quote mb-30">
                                <img src="{{ asset('frontend/img/testimonail/quote.png') }}" alt="">
                            </div>
                            <div class="testimonial-content mb-45">
                                <p>Magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit.</p>
                            </div>
                            <div class="testimonial-avatar">
                                <div class="avatar">
                                    <img src="{{ asset('frontend/img/testimonail/avatar.png') }}" alt="">
                                </div>
                                <div class="avatar-info">
                                    <h6>Jarvis D. Mikado</h6>
                                    <span>founder, jarvis co.</span>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="testimonial-quote mb-30">
                                <img src="{{ asset('frontend/img/testimonail/quote.png') }}" alt="">
                            </div>
                            <div class="testimonial-content mb-45">
                                <p>Magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit.</p>
                            </div>
                            <div class="testimonial-avatar">
                                <div class="avatar">
                                    <img src="{{ asset('frontend/img/testimonail/avatar.png') }}" alt="">
                                </div>
                                <div class="avatar-info">
                                    <h6>Jarvis D. Mikado</h6>
                                    <span>founder, jarvis co.</span>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="testimonial-quote mb-30">
                                <img src="{{ asset('frontend/img/testimonail/quote.png') }}" alt="">
                            </div>
                            <div class="testimonial-content mb-45">
                                <p>Magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit.</p>
                            </div>
                            <div class="testimonial-avatar">
                                <div class="avatar">
                                    <img src="{{ asset('frontend/img/testimonail/avatar.png') }}" alt="">
                                </div>
                                <div class="avatar-info">
                                    <h6>Jarvis D. Mikado</h6>
                                    <span>founder, jarvis co.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonail-area-end -->
@endsection

@push('scripts')

@endpush