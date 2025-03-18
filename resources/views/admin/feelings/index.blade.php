@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row mb-8">
            <div class="col-md-12">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                    <div>
                        <h2>Cảm nhận</h2>
                        <!-- breacrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cảm nhận</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="{{ route('feelings.create') }}" class="btn btn-primary">Thêm mới Cảm nhận</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-12 mb-5">
                <div class="card h-100 card-lg">

                    <div class="card h-100 card-lg">
                        <div class="px-6 py-6">
                            <form method="GET" action="{{ route('feelings.admin') }}">
                                <div class="row g-3">
                                    <!-- Tìm kiếm theo tên -->
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <input class="form-control" name="search" type="search"
                                            placeholder="Tìm kiếm tên người cảm nhận"
                                            value="{{ request()->input('search') }}" aria-label="Search">
                                    </div>

                                    <!-- Lọc theo trạng thái -->
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <select class="form-control" name="is_approved">
                                            <option value="">-- Chọn trạng thái --</option>
                                            <option value="1"
                                                {{ request()->input('is_approved') === '1' ? 'selected' : '' }}>Đã duyệt
                                            </option>
                                            <option value="0"
                                                {{ request()->input('is_approved') === '0' ? 'selected' : '' }}>Chưa duyệt
                                            </option>
                                        </select>
                                    </div>

                                    <!-- Nút tìm kiếm -->
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <button class="btn btn-success w-100" type="submit">Tìm kiếm</button>
                                    </div>
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
                                        <th>Đánh giá</th>
                                        <th>Trạng thái</th>
                                        <th>Thời gian tạo</th>

                                        <th colspan="2"></th>
                                    </tr>
                                </thead>
                                <tbody id="product-body">
                                    @include('admin.feelings.table')
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
                            {{ $feelings->appends(request()->query())->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Hàm toggle trạng thái duyệt
            $(document).on("click", ".toggle-status", function() {
                let feelingId = $(this).data("id");
                let button = $(this);

                fetch(`/admin/feelings/toggle/${feelingId}`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content'),
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({})
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            button.text(data.is_approved ? 'Đã duyệt' : 'Chưa duyệt');

                            button.toggleClass("btn-success btn-danger"); // Đổi màu nút

                            toastr.success(data.is_approved ? 'Cảm nhận đã được duyệt.' :
                                'Cảm nhận đã bị hủy duyệt.');
                        }
                    })
                    .catch(error => console.error('Lỗi:', error));
            });

            // Gán sự kiện cho nút phân trang
            $(document).on("click", "#pagination-wrapper a", function(e) {
                e.preventDefault();
                var page = $(this).attr("href").split("page=")[1];
                var search = $("input[name='search']").val();
                var isApproved = $("select[name='is_approved']").val();
                getProducts(page, search, isApproved);
            });

            // Gán sự kiện thay đổi trạng thái duyệt


            function getProducts(page, search, isApproved) {
                $.ajax({
                        type: "GET",
                        url: `?page=${page}&search=${encodeURIComponent(search)}&is_approved=${isApproved}`,
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

                            // Cập nhật URL trình duyệt
                            window.history.pushState({}, "",
                                `?page=${page}&search=${encodeURIComponent(search)}&is_approved=${isApproved}`
                                );
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
