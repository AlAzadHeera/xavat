@extends('layouts.backend.backex')

@section('','')

@push('css')

@endpush

@section('content')

    <div class="wrapper-pro">
        <!-- login Start-->
        <div class="login-form-area mg-t-30 mg-b-40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <form method="post" action="{{route('login')}}" id="adminpro-form" class="adminpro-form">
                        @csrf
                        <div class="col-lg-4">
                            <div class="login-bg">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="logo">
                                            <a href="#"><img src="{{asset('backend/img/logo/logo.png')}}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="login-title">
                                            <h1>Login Form</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>E-mail</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-input-area">
                                            <input type="email" name="email" />
                                            <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="login-input-head">
                                            <p>Password</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-input-area">
                                            <input type="password" name="password" />
                                            <i class="fa fa-lock login-user"></i>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="forgot-password">
                                                    <a href="#">Forgot password?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="login-keep-me">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="remember" checked><i></i>Keep me logged in
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">

                                    </div>
                                    <div class="col-lg-8">
                                        <div class="login-button-pro">
                                            <button type="submit" class="login-button login-button-lg">Log in</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </div>
        <!-- login End-->
    </div>
@endsection

@push('scripts')

@endpush