@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row mb-8">
            <div class="col-md-12">
                <div>
                    <h2>Thêm mới banner</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <form class="row" action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf

            <div class="col-12">
                <div class="card shadow border-0">
                    <div class="card-body d-flex flex-column gap-8 p-7">
                        <div class="d-flex flex-column flex-md-row align-items-center mb-4 file-input-wrapper gap-2">
                            <div>
                                <img class="image avatar avatar-lg rounded-3"
                                    src="{{ asset('source/images/placeholder-img.jpg') }}" alt="Image">
                            </div>

                            <div class="file-upload btn btn-light ms-md-4">
                                <input type="file" name="image" id="image" class="file-input opacity-0"
                                    accept="image/*">
                                Upload Photo
                            </div>

                            <span class="ms-2">JPG, GIF or PNG. 1MB Max.</span>
                            @error('image')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-flex flex-column gap-4">
                            <h3 class="mb-0 h6">Thông tin banner</h3>
                            <div class="row g-3 ">
                                <div class="col-lg-6 col-12">
                                    <div>
                                        <!-- input -->
                                        <label for="blognewTitle" class="form-label">Tiêu đề <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Tiêu đề"  />
                                        @error('name')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div>
                                        <!-- input -->
                                        <label for="blognewTitle" class="form-label">Đường dẫn</label>
                                        <input type="text" name="link" class="form-control" id="link"
                                            placeholder="Đường dẫn"  />
                                        @error('link')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div>
                                        <!-- input -->
                                        <label for="creatCustomerPhone" class="form-label">Mô tả (255 ký tự)</label>
                                        <textarea class="form-control" name="description" id="blogdescriptionTextarea" row="5" placeholder="Mô tả ngắn"
                                            ></textarea>
                                        @error('description')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div>
                                    <div class="col-12 mt-3">
                                        <div class="d-flex flex-column flex-md-row gap-2">
                                            <button class="btn btn-primary" type="submit">Thêm mới</button>
                                            <a class="btn btn-secondary" href="{{ route('banner.admin') }}">Quay lại</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
