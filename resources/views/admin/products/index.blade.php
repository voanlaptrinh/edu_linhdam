@extends('admin.index')
@section('content')
    
    <div class="container">
        <div class="row mb-8">
            <div class="col-md-12">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                    <div>
                        <h2>Sản phẩm</h2>
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm mới Sản phẩm</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bộ lọc và tìm kiếm -->
        <div class="row">
            <div class="col-xl-12 col-12 mb-5">
                <div class="card h-100 card-lg">
                    <div class="px-6 py-6">
                        <form method="GET" action="{{ route('products.admin') }}">
                            <div class="row g-5">
                                <!-- Ô tìm kiếm -->
                                <div class="col-lg-8 col-md-8 col-12">
                                    <input class="form-control" name="search" type="search"
                                        placeholder="Tìm kiếm tên sản phẩm" value="{{ request()->input('search') }}"
                                        aria-label="Search">
                                </div>
                                <!-- Nút tìm kiếm -->
                                <div class="col-lg-4 col-md-4 col-12">
                                    <button class="btn btn-success w-100" type="submit">Tìm kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Bảng danh sách sản phẩm -->
                    <div class="card-body p-0 position-relative"> <!-- Thêm position-relative để làm nền -->
                        <div id="product-table">
                            <div class="table-responsive">
                                <table class="table table-centered table-hover table-borderless mb-0 text-nowrap">
                                    <thead class="bg-light">
                                        <tr>

                                            <th>Tên</th>
                                        
                                            <th>Trạng thái</th>
                                            <th>Tag</th>
                                            <th>Thời gian sửa</th>
                                            <th colspan="2"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="product-body">
                                        @include('admin.products.table') <!-- Load sản phẩm từ view -->
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
                                {{ $products->appends(request()->query())->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Script Ajax để phân trang -->
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
