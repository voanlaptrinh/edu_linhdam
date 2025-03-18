@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row mb-9">
            <div class="col-md-12">
                <div>
                    <h2>Thêm mới bản cảm nhận</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Cảm nhận</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <form class="row g-6 needs-validation" action="{{ route('feelings.update', $feeling->id) }}" method="POST"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="col-lg-12 col-12">
                        <div class="card card-lg">
                            <div class="card-body p-6 d-flex flex-column gap-3">
                                <div
                                    class="d-flex flex-column flex-md-row align-items-center mb-4 file-input-wrapper gap-2">
                                    <div>
                                        <img class="image avatar avatar-lg rounded-3"
                                            src="{{ asset($feeling->image) }}" alt="Image">
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
                               <div class="row">
                                <div class="col-6">
                                    <!-- input -->
                                    <label for="blognewTitle" class="form-label">Tiêu đề</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                        placeholder="Tiêu đề" value="{{old('title', $feeling->title)}}" />
                                    @error('title')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="col-6">
                                    <!-- input -->
                                    <label for="blognewTitle" class="form-label">Đánh giá</label>
                                    
                                    <select name="rating" class="form-control">
                                        <option value="1" {{ $feeling->rating == 1 ? 'selected' : '' }}>1 sao</option>
                                        <option value="2" {{ $feeling->rating == 2 ? 'selected' : '' }}>2 sao</option>
                                        <option value="3" {{ $feeling->rating == 3 ? 'selected' : '' }}>3 sao</option>
                                        <option value="4" {{ $feeling->rating == 4 ? 'selected' : '' }}>4 sao</option>
                                        <option value="5" {{ $feeling->rating == 5 ? 'selected' : '' }}>5 sao</option>
                                    </select>
                                    @error('rating')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror

                                </div>
                               </div>

                                <div class="col-12">
                                    <label class="form-label">Nội dung</label>
                                    <textarea id="content" class="form-control" name="content">{{old('content', $feeling->content)}}</textarea>
                                    @error('content')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-row gap-2">
                            <button class="btn btn-primary w-100" type="submit">Chỉnh sửa</button>
                            <a class="btn btn-light w-100" href="{{route('feelings.admin')}}">Quay lại</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
