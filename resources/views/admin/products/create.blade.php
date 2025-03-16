@extends('admin.index')
@section('content')
    <style>
        #my-dropzone {
            position: relative;
        }

        #image-preview-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-right: 10px;
        }

        .preview-image {
            position: relative;
            margin-bottom: 10px;
        }

        .preview-image img {
            max-width: 100px;
            max-height: 100px;
            height: 80px;
            border-radius: 8px;
        }

        .preview-image .delete-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: rgba(247, 0, 0, 0.6);
            color: white;
            border: none;
            padding: 0px 6px;
            border-radius: 50%;
            cursor: pointer;
        }

        .preview-image .delete-btn:hover {
            background-color: rgba(255, 0, 0, 0.7);
        }

        button {
            margin-left: auto;
        }
    </style>
    <div class="container">
        <!-- row -->
        <div class="row mb-8">
            <div class="col-md-12">
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- page header -->
                    <div>
                        <h2>Thêm mới sản phẩm</h2>
                        <!-- breacrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="text-inherit">Sản phẩm</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Thêm mới sản phẩm</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- button -->
                    <div>
                        <a href="{{ route('products.admin') }}" class="btn btn-light">Quay lại trang sản phẩm</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <form class="row" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="col-lg-8 col-12">
                <!-- card -->
                <div class="card mb-6 card-lg">
                    <!-- card body -->
                    <div class="card-body p-6">
                        <h4 class="mb-4 h5">Thông tin sản phẩm</h4>
                        <div class="row">
                            <!-- input -->
                            <div class="mb-3 col-lg-12">
                                <label for="blognewTitle" class="form-label">Tiêu đề</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="Tiêu đề sản phẩm" value="{{ old('title') }}" required />
                                @error('title')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- input -->
                           
                            <!-- input -->
                            <div class="mb-3 col-lg-6">
                                <label class="form-label">Tác giả</label>
                                <input type="text" class="form-control" id="author" name="author"
                                    placeholder="Tác giả" value="{{ old('author') }}">
                                @error('author')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label class="form-label">Số lượng sách có sẵn</label>
                                <input type="number" min="0" class="form-control" name="quantity"
                                    placeholder="Số lượng" value="{{ old('quantity') }}">
                                @error('quantity')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label class="form-label">Ngôn ngữ của sách</label>
                                <input type="text" class="form-control" name="language" placeholder="Ngôn ngữ"
                                    value="{{ old('language') }}">
                                @error('language')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- input -->
                            <div class="mb-3 col-lg-6">
                                <label class="form-label">Mã ISBD</label>
                                <input type="text" class="form-control" id="isbn" name="isbn"
                                    placeholder="Mã ISBD" value="{{ old('isbn') }}">
                                @error('isbn')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                           
                            <!-- input -->
                            <div class="mb-3 col-lg-12 mt-5">
                                <h4 class="mb-3 h5">Nội dung mô tả</h4>
                                <textarea class="w-100" id="tyni" name="description">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card mb-6 card-lg">
                    <div class="card-body p-6">
                        <div class="d-flex flex-column flex-md-row align-items-center mb-4 file-input-wrapper gap-2">
                            <div>
                                <img class="image avatar avatar-lg rounded-3"
                                    src="{{ old('cover_image') ? asset('source/dataimages/' . old('cover_image')) : asset('source/images/docs/placeholder-img.jpg') }}"
                                    alt="Image">
                            </div>
                            <div class="file-upload btn btn-light ms-md-4">
                                <input type="file" name="cover_image" id="cover_image" class="file-input opacity-0"
                                    accept="image/*">
                                Upload Ảnh bìa sách
                            </div>
                            <span class="ms-2">JPG, GIF or PNG. 1MB Max.</span>
                            @error('cover_image')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card mb-6 card-lg">
                    <div class="card-body p-6">
                        <div class="mb-3">
                            <label class="form-label" for="tags">Tags</label>
                            <input name="tags" id="tags"
                                value="{{ old('tags', '[{"value":"Giáo dục", "editable":false}, {"value":"Giải trí"}]') }}"
                                class="w-100" placeholder="Tags" required />
                            @error('tags')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card mb-6 card-lg">
                    <div class="card-body p-6">
                        <div class="mb-3">
                            <label class="form-label">Ngày phát hành</label>
                            <input type="date" class="form-control" name="release_date"
                                value="{{ old('release_date') }}">
                            @error('release_date')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" id="productSKU">Status</label>
                            <br>
                            <div class="form-check form-switch mb-4">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchStock"
                                    name="status" {{ old('status', 1) ? 'checked' : '' }}>
                            </div>
                            @error('status')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card mb-6 card-lg">
                    <div class="card-body p-6">
                        <div class="mb-3">
                            <label class="form-label">Giá</label>
                            <input type="number" min="0" name="price" class="form-control"
                                placeholder="$0.00" value="{{ old('price') }}">
                            @error('price')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Giá khuyến mãi</label>
                            <input type="number" min="0" name="sale_price" class="form-control"
                                placeholder="$0.00" value="{{ old('sale_price') }}">
                            @error('sale_price')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card mb-6 card-lg">
                    <div class="card-body p-6">
                        <div class="mb-3">
                            <label class="form-label">Tiêu đề Seo</label>
                            <input type="text" class="form-control" name="metatitle" placeholder="Tiêu đề Seo"
                                value="{{ old('metatitle') }}">
                            @error('metatitle')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mô tả Seo</label>
                            <textarea class="form-control" rows="3" name="metadescription" placeholder="Mô tả Seo">{{ old('metadescription') }}</textarea>
                            @error('metadescription')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card mb-6 card-lg">
                    <div class="card-body p-6">
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary w-sm">Lưu sản phẩm</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div>
  
@endsection
