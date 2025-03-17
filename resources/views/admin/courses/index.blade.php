@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row mb-8">
            <div class="col-md-12">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                    <div>
                        <h2>Bản tin khóa học</h2>
                        <!-- breacrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bản tin khóa học</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="{{ route('courses.create') }}" class="btn btn-primary">Thêm mới Bản tin khóa học</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-12 mb-5">
                <div class="card h-100 card-lg">

                    <div class="card h-100 card-lg">
                        <div class="px-6 py-6">
                            <form method="GET" action="{{ route('courses.admin') }}">
                                <div class="row g-5">
                                    <!-- form -->
                                    <div class="col-lg-8 col-md-8 col-12">
                                     
                                            <input class="form-control" name="search" type="search"
                                                placeholder="Tìm kiếm tên bản tin" value="{{ request()->input('search') }}"
                                                aria-label="Search">
                                       
                                    </div>
                                    <!-- select option -->
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <button class="btn btn-success w-100" type="submit">Tìm kiếm</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table
                                class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap">
                                <thead class="bg-light">
                                    <tr>

                                        <th>Ảnh</th>
                                        <th>Tên</th>
                                     
                                        <th>Thời gian tạo</th>

                                        <th colspan="2"></th>
                                    </tr>
                                </thead>
                                <tbody id="product-body">
                                    @include('admin.courses.table')
                                </tbody>
                            </table>
                        </div>
                        <!-- Hiệu ứng loading -->
                        <div id="loading">
                            <span class="spinner-border text-primary" role="status"></span>
                            <span>Đang tải dữ liệu...</span>
                        </div>

                        <!-- Phân trang -->
                        <div id="pagination-wrapper" class="d-flex justify-content-end p-3">
                            {{ $courses->appends(request()->query())->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
