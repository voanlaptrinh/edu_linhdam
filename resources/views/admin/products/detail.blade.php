@extends('admin.index')
@section('content')
    <div class="container">
        <!-- row -->
        <div class="row mb-8">
            <div class="col-md-12">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                    <div>
                        <!-- page header -->
                        <h2>Chi tiết sản phẩm</h2>
                        <!-- breacrumb -->

                    </div>
                    <!-- button -->
                    <div>
                        <a href="{{ route('products.admin') }}" class="btn btn-primary">Quay lại sản phẩm</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-12 mb-5">
                <!-- card -->
                <div class="card h-100 card-lg">
                    <div class="card-body p-6">
                        <div class="d-md-flex justify-content-between">
                            <div class="d-flex align-items-center mb-2 mb-md-0">
                                <h2 class="mb-0">{{ $product->title }}</h2>
                                @if ($product->status == 1)
                                    <span class="badge bg-light-success text-dark-success ms-2">Hoạt động</span>
                                @else
                                    <span class="badge bg-light-warning text-dark-warning ms-2">Tạm dừng</span>
                                @endif
                            </div>
                            <!-- select option -->

                        </div>
                        <div class="mt-8">
                            <div class="row">
                                <!-- address -->
                                <div class="col-lg-3 col-md-3 col-12">
                                    <div class="mb-6"
                                        style="width: 200px; height: 200px; overflow: hidden; display: flex;justify-content: center;align-items: center;">

                                        <img style="max-width: 100%;max-height: 100%;object-fit: cover;"
                                            src="{{ asset($product->cover_image) }}" alt="">
                                    </div>
                                </div>
                                <!-- address -->
                                <div class="col-lg-3 col-md-3 col-12">
                                    <div class="mb-6">

                                        <p class="mb-1 lh-lg">
                                          
                                            Tác giả: <span class="text-dark">{{ $product->author }}</span>
                                            <br>
                                        <div>
                                            @if ($product->sale_price > 0)
                                                <span
                                                    class="text-dark">{{ number_format($product->sale_price, 0, ',', '.') }}
                                                    VNĐ</span>
                                                <span
                                                    class="text-decoration-line-through text-muted">{{ number_format($product->price, 0, ',', '.') }}
                                                    VNĐ</span>
                                            @else
                                                <span class="text-dark">{{ number_format($product->price, 0, ',', '.') }}
                                                    VNĐ</span>
                                            @endif
                                        </div>


                                        </p>
                                    </div>
                                </div>
                                <!-- address -->
                                <div class="col-lg-3 col-md-3 col-12">
                                    <div class="mb-6">

                                        <p class="mb-1 lh-lg">
                                            Số lượng:
                                            <span class="text-dark">{{ $product->quantity }}</span>
                                            <br>
                                            Lượt xem:
                                            <span class="text-dark">{{ $product->views }}</span>
                                            <br>
                                            Ngôn ngữ:
                                            <span class="text-dark">{{ $product->language }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-12">
                                    <div class="mb-6">

                                        <p class="mb-1 lh-lg">
                                            Ngày phát hành:
                                            <span class="text-dark">{{ $product->release_date }}</span>
                                            <br>
                                            Mã sản phẩm:
                                            <span class="text-dark"> {{ $product->isbn }}</span>
                                            <br>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pe-5 ps-5 pb-5">
                        <div class="col-12"
                            style="     overflow-wrap: break-word;word-wrap: break-word;white-space: normal;overflow: hidden;">
                            {!! $product->description !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
