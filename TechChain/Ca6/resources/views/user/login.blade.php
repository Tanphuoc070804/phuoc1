@extends('layout')
@section('title')
    Đăng nhập
@endsection
@section('body')
        <!-- Start Account Login Area -->
        <div class="account-login section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                        <form action="" class="card login-form" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="title">
                                    <h3>Login Now</h3>
                                    <p>You can login using your social media account or email address.</p>
                                </div>
                                <div class="social-login">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-12"><a class="btn facebook-btn"
                                                href="javascript:void(0)"><i class="lni lni-facebook-filled"></i> Facebook
                                                login</a></div>
                                        <div class="col-lg-4 col-md-4 col-12"><a class="btn twitter-btn"
                                                href="javascript:void(0)"><i class="lni lni-twitter-original"></i> Twitter
                                                login</a></div>
                                        <div class="col-lg-4 col-md-4 col-12"><a class="btn google-btn"
                                                href="javascript:void(0)"><i class="lni lni-google"></i> Google login</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="alt-option">
                                    <span>Or</span>
                                </div>
                                <div class="form-group input-group">
                                    <label for="reg-fn">Email</label>
                                    <input class="form-control" type="email" id="reg-email" name="email" required>
                                </div>
                                <div class="form-group input-group">
                                    <label for="reg-fn">Password</label>
                                    <input class="form-control" type="password" id="reg-pass" name="password" required>
                                </div>
                                <div class="d-flex flex-wrap justify-content-between bottom-content">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input width-auto" name="remember" id="exampleCheck1">
                                        <label class="form-check-label">Remember me</label>
                                    </div>
                                    <a class="lost-pass" href="account-password-recovery.html">Forgot password?</a>
                                </div>
                                @if(Session::has('message'))
                                <div class="alert alert-danger">
                                    {{Session::get('message')}}
                                </div>
                                 @php
                                     Session::forget('message');
                                 @endphp
                                @endif
                                <div class="button">
                                    <button class="btn" type="submit">Login</button>
                                </div>
                                <p class="outer-link">Don't have an account? <a href="register.html">Register here </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Account Login Area -->
@endsection