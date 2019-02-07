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
                            <h2>Our Team</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Team</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- team-area -->
    <section class="team-area team-res-p pt-140 pb-95">
        <div class="container">
            <div class="row">
                @foreach($teams as $team)
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-wrap text-center mb-45">
                        <div class="team-thumb">
                            <img src="{{ asset('uploads/team/'.$team->image) }}" alt="">
                        </div>
                        <div class="team-overly">
                            <a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $team->twitter }}"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $team->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="team-info">
                            <h4>{{ $team->name }}</h4>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>
    <!-- team-area-end -->
    <!-- cta-area -->
    <section class="cta-area cta-bg pt-155 pb-145" style="background-image:url({{ asset('frontend/img/bg/cta_bg.jpg') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cta-title">
                        <span>We Are Here for you</span>
                        <h2>Please Come & Work With Us</h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cta-btn">
                        <a href="#" class="btn">apply now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-area-end -->
    </main>
@endsection

@push('scripts')

@endpush