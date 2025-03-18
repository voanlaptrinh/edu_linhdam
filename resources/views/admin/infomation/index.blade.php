@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row mb-9">
            <div class="col-md-12">
                <div>
                    <h2>Thông tin về chúng tôi</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Thông tin về chúng tôi</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <form class="row g-6 needs-validation" action="{{ route('infomation.update') }}" method="POST"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="col-lg-12 col-12">
                        <div class="card card-lg">
                            <div class="card-body p-6 d-flex flex-column gap-3">
                                
                                <div class="col-12">
                                    <!-- input -->
                                    <label for="blognewTitle" class="form-label">Tiêu đề</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Tiêu đề tin tức" value="{{old('name', $imfomations->name)}}" />
                                    @error('name')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="col-12">
                                    <label for="blogdescriptionTextarea" class="form-label"> Mô tả ngắn (Tối đa: 255 ký
                                        tự)</label>
                                    <textarea class="form-control" name="description" id="blogdescriptionTextarea" row="5"
                                        placeholder="Write a short description" >{{old('description', $imfomations->description)}}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Nội dung</label>
                                    <textarea class="w-100" id="tyni" name="content">{{old('content',$imfomations->content)}}</textarea>
                                    @error('content')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-row gap-2">
                            <button class="btn btn-primary w-100" type="submit">Thêm mới</button>
                         
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
