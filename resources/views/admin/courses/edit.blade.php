@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row mb-9">
            <div class="col-md-12">
                <div>
                    <h2>Sửa tin tức ({{$courses->name}})</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Tin tức</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sửa</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <form class="row g-6 needs-validation" action="{{ route('courses.update', $courses->id) }}" method="POST"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="col-lg-8 col-12">
                        <div class="card card-lg">
                            <div class="card-body p-6 d-flex flex-column gap-3">
                                <div
                                    class="d-flex flex-column flex-md-row align-items-center mb-4 file-input-wrapper gap-2">
                                    <div>
                                        <img class="image avatar avatar-lg rounded-3"
                                            src="{{ asset($courses->image) }}" alt="Image">
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
                                <div class="col-12">
                                    <!-- input -->
                                    <label for="blognewTitle" class="form-label">Tiêu đề</label>
                                    <input type="text" name="name" class="form-control" id="blognewTitle" value="{{ old('name', $courses->name) }}"
                                        placeholder="Tiêu đề tin tức"  />
                                    @error('name')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="col-12">
                                    <label for="blogdescriptionTextarea" class="form-label"> Mô tả ngắn (Tối đa: 255 ký
                                        tự)</label>
                                    <textarea class="form-control" name="description" id="blogdescriptionTextarea" row="5"
                                        placeholder="Write a short description" >{{ old('description', $courses->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Nội dung</label>
                                    <textarea class="w-100" id="tyni" name="content">{{ old('content', $courses->content) }}</textarea>
                                    @error('content')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="card card-lg">
                            <div class="card-body p-6 d-flex flex-column gap-3">
                               
                                <div class="col-12">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <label for="blognewContent" class="form-label">SEO Content</label>
                                            <input type="text" class="form-control" id="blognewContent" placeholder="Meta Title" value="{{ old('metatitle', $courses->metatitle) }}" name="metatitle">

                                            @error('metatitle')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                        </div>

                                        <div>
                                            <label for="blogdeseoTextarea" class="form-label visually-hidden">Content</label>
                                            <textarea class="form-control" id="blogdeseoTextarea" row="7" placeholder="Meta Descriptions"  name="metadescription"  style="height: 76px;">{{ old('metadescription', $courses->metadescription) }}</textarea>
                                            @error('metadescription')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="d-flex flex-row gap-2">
                                        <button class="btn btn-primary w-100" type="submit">Sửa</button>
                                        <button class="btn btn-light w-100" type="button">Quay lại tin tức</button>
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
