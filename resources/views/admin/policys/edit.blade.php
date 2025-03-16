@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row mb-9">
            <div class="col-md-12">
                <div>
                    <h2>Chính sách </h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Sửa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">({{ $policy->name }})</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <form class="row g-6 needs-validation" action="{{ route('policys.update', $policy->id) }}" method="POST"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="col-lg-12 col-12">
                        <div class="card card-lg">
                            <div class="card-body p-6 d-flex flex-column gap-3">

                                <div class="col-12">
                                    <!-- input -->
                                    <label for="blognewTitle" class="form-label">Tiêu đề</label>
                                    <input type="text" name="name" class="form-control" id="blognewTitle"
                                        value="{{ old('name', $policy->name) }}" placeholder="Tiêu đề tin tức" />
                                    @error('name')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror

                                </div>


                                <div class="col-12">
                                    <label class="form-label">Nội dung</label>
                                    <textarea class="w-100" id="tyni" name="content">{{ old('content', $policy->content) }}</textarea>
                                    @error('content')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="d-flex flex-row gap-2">
                                        <button class="btn btn-light w-100" type="button">Quay lại tin tức</button>
                                        <button class="btn btn-primary w-100" type="submit">Thêm mới</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
