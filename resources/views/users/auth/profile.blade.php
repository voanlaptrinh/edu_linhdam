@extends('users.index')
@section('content')
    <div class="bd-dashboard-breadcrumb section-space-small-top">
        <div class="container custom-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bd-dashboard-breadcrumb-wrapper p-relative">
                        <div class="bd-dashboard-breadcrumb-bg image-bg"
                            data-background="https://html.topylo.com/istudy-prv/assets/images/bg/profile-bg.webp"
                            style="background-image: url(&quot;https://html.topylo.com/istudy-prv/assets/images/bg/profile-bg.webp&quot;);">
                        </div>
                        <div class="bd-dashboard-profile">
                            <div class="bd-dashboard-profile-user">
                                <div class="thumb"><img
                                        src="{{ asset(Auth::user()->image ?: '/source/images/newsletter-thumb-02.webp') }}"
                                        alt="image"></div>
                                <div class="content">
                                    <h3 class="name">{{ Auth::user()->name }}</h3>
                                    <span class="designation d-block">{{ Auth::user()->email }}</span>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bd-dashboard-area section-space-bottom">
        <div class="container">
            <div class="bd-dashboard-main">
                <div class="row gy-30">
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="bd-dashboard-menu">
                            <h6 class="bd-dashboard-menu-title mt-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Chào mừng, {{ Auth::user()->username }}</font>
                                </font>
                            </h6>


                            <ul>
                                <li>
                                    <a href="{{ route('home.profile') }}"><span><i class="fas fa-user-cog"></i></span>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Cài đặt</font>
                                        </font>
                                    </a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn w-100 text-start"
                                            style="color: #808080;font-size: 16px;font-weight: 500;background: #F5F5F5;">
                                            <i class="fas fa-sign-out-alt"></i> Đăng xuất</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <div class="bd-dashboard-inner">
                            <div class="bd-dashboard-title-inner">
                                <div class="d-flex justify-content-between">
                                    <h4 class="bd-dashboard-title"></h4>

                                </div>
                            </div>
                            <div class="dashboard-profile-info">
                                <div class="dashboard-profile-inner">
                                    <form action="{{ route('home.profile.update') }}" method="POST"
                                        enctype="multipart/form-data" class="row gy-30">
                                        @csrf
                                        <div
                                            class="d-flex flex-column flex-md-row align-items-center mb-4 file-input-wrapper gap-2">
                                            <div>
                                                <img id="preview" class="image avatar avatar-lg rounded-3" width="75"
                                                    height="75"
                                                    src="{{ asset(Auth::user()->image ?: '/source/images/placeholder-img.jpg') }}"
                                                    alt="Image">
                                            </div>
                                            <div class="file-upload btn btn-light ms-md-4">
                                                <input type="file" name="image" id="image" class="opacity-0"
                                                    accept="image/*">
                                                Upload Photo
                                            </div>
                                            <span class="ms-2">JPG, GIF hoặc PNG. 1MB tối đa.</span>
                                        </div>

                                        <div class="col-lg-6"><input name="name" class="form-control"
                                                value="{{ Auth::user()->name }}" placeholder="Tên"></div>
                                        <div class="col-lg-6"><input name="username" class="form-control"
                                                value="{{ Auth::user()->username }}" placeholder="Họ tên"></div>
                                        <div class="col-lg-6"><input name="phone" class="form-control"
                                                value="{{ Auth::user()->phone }}" placeholder="Số điện thoại"></div>
                                        <div class="col-lg-6"><input name="address" class="form-control"
                                                value="{{ Auth::user()->address }}" placeholder="Địa chỉ"></div>
                                        <div class="col-lg-6"><input name="city" class="form-control"
                                                value="{{ Auth::user()->city }}" placeholder="Thành phố"></div>
                                        <div class="col-lg-6"><input name="postal_code" class="form-control"
                                                value="{{ Auth::user()->postal_code }}" placeholder="Mã bưu chính"></div>
                                        <div class="col-lg-6">
                                            <select name="gender" class="form-control">
                                                <option value="">--Chọn giới tính--</option>
                                                <option value="male"
                                                    {{ Auth::user()->gender == 'male' ? 'selected' : '' }}>Nam</option>
                                                <option value="female"
                                                    {{ Auth::user()->gender == 'female' ? 'selected' : '' }}>Nữ</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6"><input name="date_of_birth" class="form-control"
                                                type="date" value="{{ Auth::user()->date_of_birth }}"></div>
                                        <div class="col-lg-6"><input name="zalo" class="form-control" type="url"
                                                value="{{ Auth::user()->zalo }}" placeholder="Zalo"></div>
                                        <div class="col-lg-6"><input name="facebook" class="form-control" type="url"
                                                value="{{ Auth::user()->facebook }}" placeholder="Facebook"></div>
                                        <div class="col-lg-12">
                                            <button class="bd-btn btn-primary">Lưu thay đổi</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
