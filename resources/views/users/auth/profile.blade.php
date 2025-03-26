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
                                    <h3 class="name">{{ Auth::user()->name}}</h3>
                                    <span class="designation d-block">{{ Auth::user()->email}}</span>

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
                                    <font style="vertical-align: inherit;">Chào mừng, {{ Auth::user()->username}}</font>
                                </font>
                            </h6>


                            <ul>
                                <li>
                                    <a href="student-settings.html"><span><i class="fa-light fa-sliders"></i></span>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Cài đặt</font>
                                        </font>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html"><span><i class="fa-light fa-sign-out-alt"></i></span>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Đăng xuất</font>
                                        </font>
                                    </a>
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
                                    <div class="row gy-30">
                                        <div class="d-flex flex-column flex-md-row align-items-center mb-4 file-input-wrapper gap-2">
                                            <div>
                                                <img id="preview" class="image avatar avatar-lg rounded-3" width="75" height="75"
                                                    src="{{ asset(Auth::user()->image ?: '/source/images/placeholder-img.jpg') }}" alt="Image">
                                            </div>
                                            <div class="file-upload btn btn-light ms-md-4">
                                                <input type="file" name="image" id="image" class="opacity-0" accept="image/*">
                                                Upload Photo
                                            </div>
                                            <span class="ms-2">JPG, GIF or PNG. 1MB Max.</span>
                                        </div>
                                        
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="name" class="form-control" id="name"
                                                    type="text" placeholder="Tên">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="username" class="form-control" id="username"
                                                    type="text" placeholder="Họ tên">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="phone" class="form-control" id="phone"
                                                    type="tel" placeholder="Số điện thoại">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="address" class="form-control"
                                                    id="address" type="text" placeholder="Địa chỉ">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="city" class="form-control"
                                                    id="city" type="text" placeholder="Thành phố">
                                            </div>
                                        </div>
                                      
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="postal_code" class="form-control" id="postal_code"
                                                    type="text" placeholder="Mã bưu chính">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                               <select name="gender" class="form-control" id="gender">
                                                <option value="">--Chọn giới tính--</option>
                                                <option value="">Nam</option>
                                                <option value="">Nữ</option>
                                               </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="date_of_birh" class="form-control" id="date_of_birh"
                                                    type="date" placeholder="Mã bưu chính">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="zalo" class="form-control" id="zalo"
                                                    type="url" placeholder="Zalo">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="facebook" class="form-control" id="facebook"
                                                    type="url" placeholder="Facebook">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="bd-btn btn-primary">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('image').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});

    </script>
@endsection
