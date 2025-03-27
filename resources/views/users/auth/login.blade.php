@extends('users.index')
@section('content')
<div class="container">
    <section class="section register min-vh-100 d-flex flex-column justify-content-center py-4">

        <div class="row justify-content-center">
            <div class="col-xxl-7 col-xl-9 col-lg-6 col-md-6 col-sm-8 col-12">
                <div class="bd-authentication-form-wrapper">
                    <div class="bd-authentication-form-logo">
                        <a href="{{route('home')}}"><img src="{{ asset(get_config()->logo) }}" width="120px" height="120px" alt="logo"></a>
                    </div>
                    <h3 class="title mb-10">Đăng nhập</h3>
                    <p class="subtitle">Chào mừng đến với {{get_config()->title}}</p>
                    <form class="needs-validation" novalidate="" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-input-box mb-20">
                            <div class="form-input-title">
                                <label for="emailAddress">Email Address <span>*</span></label>
                            </div>
                            <div class="form-input">
                                <input name="email"  class="form-control" id="emailAddress" type="email" placeholder="Email Address">
                            </div>
                            @error('email')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-input-box mb-20">
                            <div class="form-input-title">
                                <label for="password">Mật khẩu <span>*</span></label>
                            </div>
                            <div class="form-input">
                                <input name="password" id="password" class="form-control" type="password" placeholder="Your Password">
                            </div>
                            @error('password')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        </div>
                       
                        <div class="bd-sign-btn">
                            <button class="bd-btn btn-primary w-100" type="submit">Đăng nhập</a>
                        </div>
                    </form>
                    <div class="bd-sign-up-label underline-two text-center pt-3">
                        Bạn không có tài khoản?<a href="{{ route('register') }}" class="sign-link"> Đăng ký</a>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
</div>


@endsection