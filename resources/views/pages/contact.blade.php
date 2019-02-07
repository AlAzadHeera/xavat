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
                            <h2>Get In Touch</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- contact-info-area -->
    <section class="contact-info-area pt-140 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="c-cta-wrap mb-30">
                        <div class="c-cta-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="c-cta-contact">
                            <h5>Email Address</h5>
                            <span>info@example.com</span>
                            <span>webinfo@webmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="c-cta-wrap mb-30">
                        <div class="c-cta-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="c-cta-contact">
                            <h5>Phone Number</h5>
                            <span>+8907 8765 0909</span>
                            <span>+(987) 567 890 8</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="c-cta-wrap mb-30">
                        <div class="c-cta-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="c-cta-contact">
                            <h5>Office Location</h5>
                            <span>Bigenza yellow park, 12/a,</span>
                            <span>Newyork, USA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-area-end -->
    <!-- contact-area -->
    <section class="contact-area pb-140">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-map">
                        <a href="#"><img src="{{ asset('frontend/img/bg/map_img.jpg') }}" alt="map"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-title mb-35">
                        <span>Get In Touch</span>
                        <h2>We Are Here For You</h2>
                    </div>
                    <div class="contact-form">
                        <form action="#">
                            <div class="contact-field">
                                <input type="text" placeholder="Enter your name here....">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="contact-field">
                                <input type="email" placeholder="Enter your email here....">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-field c-message-field">
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message here...."></textarea>
                                <i class="fas fa-pencil-alt"></i>
                            </div>
                            <button class="btn mt-20">SUbmit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->
@endsection

@push('scripts')

@endpush