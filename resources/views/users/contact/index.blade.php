@extends('users.index')
@section('content')
    <section class="bd-breadcrumb-area p-relative fix z-index-11">
        <div class="bd-breadcrumb-bg-two" data-background="{{ asset('source/images/breadcrumb-bg-2.webp') }}"
            style="background-image: url(&quot;{{ asset('source/images/breadcrumb-bg-2.webp') }}&quot;);">
        </div>
        <div class="bd-breadcrumb-wrapper p-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bd-breadcrumb style-two d-flex-center">
                            <div class="bd-breadcrumb-content">
                                <h1 class="bd-breadcrumb-title">Liên hệ</h1>
                                <div class="bd-breadcrumb-list">
                                    <span><i class="fas fa-home"></i> <a
                                            href="index.html">{{ get_config()->title }}</a></span>
                                    <span class="divider"><i class="fas fa-chevron-right"></i></span>
                                    <span class="active">Liên hệ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bd-breadcrumb-shape">
                    <div class="shape-1"><img src="{{ asset('source/images/breadcrumb-shape-1.webp') }}" alt="shape">
                    </div>
                    <div class="shape-3"><img src="{{ asset('source/images/bulb-shape.webp') }}" alt="shape"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="bd-contact-form-area section-space">
        <div class="container">
            <div class="row gy-30 justify-content-between align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="bd-contact-form-wrapper">
                        <div class="bd-section-title-wrapper section-title-space">
                            <h2 class="bd-section-title mb-20">Hãy liên lạc</h2>
                            <p class="bd-section-paragraph">Đội ngũ thân thiện của chúng tôi rất mong nhận được phản hồi từ
                                bạn.</p>
                        </div>
                        <div class="bd-contact-form">
                            <form action="{{ route('contact.store.home') }}" id="contactForm" method="POST">
                                @csrf
                                <div class="row gy-30">
                                    <!-- Full Name Field -->
                                    <div class="col-md-12">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label for="name">Tên của bạn<span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input name="name" id="name" class="form-control"
                                                    value="{{ old('name') }}" type="text" placeholder="Tên của bạn">
                                            </div>
                                        </div>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Email Address Field -->
                                    <div class="col-md-12">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label for="email">Email liên hệ<span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <input name="email" id="email" class="form-control" type="email"
                                                    placeholder="Email liên hệ" value="{{ old('email') }}">
                                            </div>
                                        </div>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- phone Field -->
                                    <div class="col-md-12">
                                        <div class="form-input-box">
                                            <div class="form-input-title">
                                                <label for="phone">Số điện thoại</label>
                                            </div>
                                            <div class="form-input">
                                                <input name="phone" id="phone" class="form-control" type="text"
                                                    value="{{ old('phone') }}" placeholder="Số điện thoại">
                                            </div>
                                        </div>
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Message Field -->
                                    <div class="col-xxl-12">
                                        <div class="form-input-box mb-15">
                                            <div class="form-input-title">
                                                <label for="message">Nội dung<span>*</span></label>
                                            </div>
                                            <div class="form-input">
                                                <textarea id="description" name="description" class="form-control" placeholder="Mô tả nội dung">{{ old('description') }}</textarea>
                                            </div>
                                        </div>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-xxl-12">
                                        <div class="bd-contact-form-btn">
                                            <button class="bd-btn btn-primary w-100" type="submit">Gửi liên hệ</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="bd-contact-form-thumb"><img
                            src="{{ asset($introduction->image ?: '/source/images/contact-thumb.webp') }}" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
