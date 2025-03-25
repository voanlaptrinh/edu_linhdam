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
                                <h1 class="bd-breadcrumb-title">Giới thiệu môn học</h1>
                                <div class="bd-breadcrumb-list">
                                    <span><i class="fas fa-home"></i> <a
                                            href="{{ route('home') }}">{{ get_config()->title }}</a></span>
                                    <span class="divider"><i class="fas fa-chevron-right"></i></span>
                                    <span class="active">Giới thiệu môn học</span>
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
    <section class="bd-shop-area section-space">
        <div class="container">
            <div class="row gy-30">
                <div class="col-xxl-12 col-xl-12 col-lg-12 position-relative">
                    <div class="row g-30 align-items-center justify-content-between mb-30">
                        <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                            <div class="d-flex-between">
                                <div class="bd-top-sorting-left">
                                    <h6 class="bd-sorting-item-found">Chúng tôi tìm thấy {{count($courses)}} khóa học có sẵn cho bạn</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-7 col-md-12 col-12">
                            <form method="GET" action="{{ route('courses.home') }}">
                                <div class="row g-5">
                                    <!-- Ô tìm kiếm -->
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <input class="form-control" name="search" type="search"
                                            placeholder="Tìm kiếm" value="{{ request()->input('search') }}"
                                            aria-label="Search">
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                   
                    <!-- product grid style -->
                    <div class="display-layout-grid active">
                        <div class="row gy-30" id="product-body">
                            @include('users.courses.table') <!-- Load sản phẩm từ view -->
                         
                           
                           
                        </div>
                    </div>
                    <div id="loading">
                        <span class="spinner-border text-primary" role="status"></span>
                        <span>Đang tải dữ liệu...</span>
                    </div>
                    <!-- pagination style -->
                    <div id="pagination-wrapper" class="d-flex justify-content-end p-3">
                        {{ $courses->appends(request()->query())->links('pagination::bootstrap-4') }}
                    </div>
                    <!-- pagination style end -->
                </div>
               
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $(document).on("click", "#pagination-wrapper a", function(e) {
                e.preventDefault();
                var page = $(this).attr("href").split("page=")[1];
                var search = $("input[name='search']").val(); // Lấy giá trị ô tìm kiếm
                getProducts(page, search);
            });

            function getProducts(page, search) {
                $.ajax({
                        type: "GET",
                        url: '?page=' + page + '&search=' + encodeURIComponent(search),
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
                                var search = $("input[name='search']").val();
                                getProducts(page, search);
                            });

                            window.history.pushState({}, "", '?page=' + page + '&search=' + encodeURIComponent(
                                search));
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
