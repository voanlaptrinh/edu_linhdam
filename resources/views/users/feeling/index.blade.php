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
                                <h1 class="bd-breadcrumb-title"> Cảm nhận </h1>
                                <div class="bd-breadcrumb-list">
                                    <span><i class="fas fa-home"></i> <a
                                            href="index.html">{{ get_config()->title }}</a></span>
                                    <span class="divider"><i class="fas fa-chevron-right"></i></span>
                                    <span class="active">Cảm nhận</span>
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
    <section class="bd-postbox-area section-space">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-xxl-8 col-lg-8 position-relative">
                   
                        <div class="bd-postbox-wrapper">

                            <div class="bd-blog-postbox-comment mb-30">
    
                                <div class="bd-postbox-comment" id="product-body">
                                    @include('users.feeling.table') <!-- Load sản phẩm từ view -->
                                   
                                </div>
                            </div>
    
                        </div>
                        <div id="loading">
                            <span class="spinner-border text-primary" role="status"></span>
                            <span>Đang tải dữ liệu...</span>
                        </div>
                        <!-- pagination style -->
                        <div id="pagination-wrapper" class="d-flex justify-content-end p-3">
                            {{ $feelings->appends(request()->query())->links('pagination::bootstrap-4') }}
                        </div>
                 
                </div>
                <div class="col-xxl-4 col-xl-4 col-xxl-4 col-lg-4">
                    <div class="bd-blog-sidebar sidebar-right sidebar-sticky">

                        <div class="bd-blog-widget widget_categories">
                            <h5 class="bd-widget-title mb-20 fw-bolder">Viết cảm nhận của bạn</h5>
                            <form action="{{ route('feeling.store.home') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-2">
                                    <div
                                        class="d-flex flex-column flex-md-row align-items-center mb-4 file-input-wrapper gap-2">
                                        <div>
                                            <img id="preview" class="image avatar avatar-lg rounded-3" width="75"
                                                height="75"
                                                src="{{ old('image') ? asset(old('image')) : asset('/source/images/placeholder-img.jpg') }}"
                                                alt="Image">
                                        </div>
                                        <div class="file-upload btn btn-outline-secondary ms-md-4">
                                            <input type="file" name="image" id="image" class="opacity-0"
                                                accept="image/*" onchange="previewImage(event)">
                                            Upload Photo
                                        </div>
                                        <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                                    </div>

                                    <div class="col-12">
                                        <div class="bd-postbox-comment-input">
                                            <input type="text" name="title" placeholder="Tên" class="form-control"
                                                value="{{ old('title') }}" required>
                                        </div>
                                        <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                    </div>

                                    <div class="col-12">
                                        <div class="bd-postbox-comment-input mb-15">
                                            <select class="form-select" name="rating" required>
                                                <option disabled>Đánh giá sao</option>
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <option value="{{ $i }}"
                                                        {{ old('rating', 5) == $i ? 'selected' : '' }}>
                                                        {{ str_repeat('⭐', $i) }}
                                                    </option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">{{ $errors->first('rating') }}</div>
                                    </div>

                                    <div class="col-12">
                                        <div class="bd-postbox-comment-input mb-15">
                                            <textarea name="content" placeholder="Nội dung" class="form-control" spellcheck="false" required>{{ old('content') }}</textarea>
                                        </div>
                                        <div class="invalid-feedback">{{ $errors->first('content') }}</div>
                                    </div>

                                    <div class="col-12">
                                        <div class="bd-postbox-comment-btn">
                                            <button type="submit" class="bd-btn btn-primary">Gửi đánh giá</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $(document).on("click", "#pagination-wrapper a", function(e) {
                e.preventDefault();
                var page = $(this).attr("href").split("page=")[1];
                getProducts(page);
            });
    
            function getProducts(page) {
                $.ajax({
                    type: "GET",
                    url: '?page=' + page,
                    dataType: "json",
                    beforeSend: function() {
                        $("#loading").show();
                        $("#product-body").css("opacity", "0.5");
                        $("#pagination-wrapper").hide();
                    }
                })
                .done(function(data) {
                    if (data.table && data.pagination) {
                        $("#product-body").html(data.table);
                        $("#pagination-wrapper").html(data.pagination);
    
                        // Gán lại sự kiện click vào nút phân trang
                        $("#pagination-wrapper a").off("click").on("click", function(e) {
                            e.preventDefault();
                            var page = $(this).attr('href').split('page=')[1];
                            getProducts(page);
                        });
    
                        window.history.pushState({}, "", '?page=' + page);
                    } else {
                        alert("Lỗi: Không thể tải dữ liệu!");
                    }
                })
                .fail(function() {
                    alert("Lỗi tải dữ liệu, vui lòng thử lại!");
                })
                .always(function() {
                    $("#loading").hide();
                    $("#product-body").css("opacity", "1");
                    $("#pagination-wrapper").show();
                });
            }
        });
    </script>
    
@endsection
