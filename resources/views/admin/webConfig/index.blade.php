@extends('admin.index')
@section('content')
    <div class="container">
        <!-- row -->
        <div class="row mb-8">
            <div class="col-md-12">
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- page header -->
                    <div>
                        <h2>SettingWeb</h2>
                        <!-- breacrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                <li class="breadcrumb-item active"><a href="#" class="text-inherit">SettingWeb</a></li>
                            </ol>
                        </nav>
                    </div>
                    <!-- button -->

                </div>
            </div>
        </div>
        <!-- row -->
        <form action="{{ route('webConfig.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-7 col-12">
                    <!-- card -->
                    <div class="card mb-6 card-lg">
                        <!-- card body -->
                        <div class="card-body p-6">
                            <div class="row g-3">
                                <!-- input -->
                                <div
                                    class="d-flex flex-column flex-md-row align-items-center mb-4 file-input-wrapper gap-2">
                                    <div>
                                        <img class="image avatar rounded-3" src="{{ asset($webConfig->logo) }}"
                                            style="width: 6rem; height: 6rem;" alt="Image">
                                    </div>

                                    <div class="file-upload btn btn-light ms-md-4">
                                        <input type="file" name="logo" id="logo" class="file-input opacity-0"
                                            accept="image/*">
                                        Upload Photo
                                    </div>

                                    <span class="ms-2">JPG, GIF or PNG. 1MB Max.</span>
                                    @error('logo')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class=" col-lg-6">
                                    <label class="form-label">Tên website</label>
                                    <input type="text" class="form-control" placeholder="Tên website" name="title"
                                        value="{{ old('title', $webConfig->title) }}">
                                    @error('name')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror

                                </div>
                                <!-- input -->
                                <div class=" col-lg-6">
                                    <label class="form-label">Website</label>
                                    <input type="text" class="form-control" placeholder="Website" name="website"
                                        value="{{ old('website', $webConfig->website) }}">
                                    @error('website')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- input -->
                                <div class=" col-lg-6">
                                    <label class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" placeholder="Địa chỉ" name="address"
                                        value="{{ old('address', $webConfig->address) }}">
                                    @error('address')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- input -->
                                <div class=" col-lg-6">
                                    <label class="form-label">Mã số thuế</label>
                                    <input type="number" min="0" class="form-control" placeholder="Mã số thuế"
                                        name="code" value="{{ old('code', $webConfig->code) }}">
                                    @error('code')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email"
                                        value="{{ old('email', $webConfig->email) }}">
                                    @error('email')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-6">
                                    <label class="form-label">phone</label>
                                    <input type="phone" class="form-control" placeholder="phone" name="phone"
                                        value="{{ old('phone', $webConfig->phone) }}">
                                    @error('phone')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-6">
                                    <label class="form-label">Google map</label>
                                    <input type="text" class="form-control" placeholder="Google map" name="gg_map"
                                        value="{{ old('gg_map', $webConfig->gg_map) }}">
                                    @error('gg_map')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-6">
                                    <label class="form-label">Google Analytic</label>
                                    <input type="text" class="form-control" placeholder="Google Analytic"
                                        name="gg_analytic" value="{{ old('gg_analytic', $webConfig->gg_analytic) }}">
                                    @error('gg_analytic')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="  col-lg-12">
                                    <label class="form-label">Mô tả</label>
                                    <textarea class="form-control" name="description" rows="4" placeholder="Mô tả">{{ old('description', $webConfig->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12">

                    <div class="card mb-6 card-lg">
                        <!-- card body -->
                        <div class="card-body p-6">

                            <!-- input -->
                            <div class="row g-3">
                                <div class=" col-lg-6">
                                    <label class="form-label">Zalo</label>
                                    <input type="text" class="form-control" placeholder="Zalo" name="zalo"
                                        value="{{ old('zalo', $webConfig->zalo) }}">
                                    @error('zalo')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-6">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" placeholder="Facebook" name="facebook"
                                        value="{{ old('facebook', $webConfig->facebook) }}">
                                    @error('facebook')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-6">
                                    <label class="form-label">Pinterest</label>
                                    <input type="text" class="form-control" placeholder="pinterest" name="pinterest"
                                        value="{{ old('pinterest', $webConfig->pinterest) }}">
                                    @error('pinterest')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-6">
                                    <label class="form-label">Youtube</label>
                                    <input type="text" class="form-control" placeholder="youtube" name="youtube"
                                        value="{{ old('youtube', $webConfig->youtube) }}">
                                    @error('youtube')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-6">
                                    <label class="form-label">Dribbble</label>
                                    <input type="text" class="form-control" placeholder="dribbble" name="dribbble"
                                        value="{{ old('dribbble', $webConfig->dribbble) }}">
                                    @error('dribbble')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-6">
                                    <label class="form-label">Whats app</label>
                                    <input type="text" class="form-control" placeholder="whats_app" name="whats_app"
                                        value="{{ old('whats_app', $webConfig->whats_app) }}">
                                    @error('whats_app')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-6">
                                    <label class="form-label">Tiktok</label>
                                    <input type="text" class="form-control" placeholder="tiktok" name="tiktok"
                                        value="{{ old('tiktok', $webConfig->tiktok) }}">
                                    @error('tiktok')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-6">
                                    <label class="form-label">Telegram</label>
                                    <input type="text" class="form-control" placeholder="telegram" name="telegram"
                                        value="{{ old('telegram', $webConfig->telegram) }}">
                                    @error('telegram')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-6">
                                    <label class="form-label">Google</label>
                                    <input type="text" class="form-control" placeholder="google" name="google"
                                        value="{{ old('google', $webConfig->google) }}">
                                    @error('google')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-6">
                                    <label class="form-label">twitter</label>
                                    <input type="text" class="form-control" placeholder="twitter" name="twitter"
                                        value="{{ old('twitter', $webConfig->twitter) }}">
                                    @error('twitter')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-6">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" placeholder="instagram" name="instagram"
                                        value="{{ old('instagram', $webConfig->instagram) }}">
                                    @error('instagram')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-6">
                                    <label class="form-label">Reddit</label>
                                    <input type="text" class="form-control" placeholder="reddit" name="reddit"
                                        value="{{ old('reddit', $webConfig->reddit) }}">
                                    @error('reddit')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class=" col-lg-12">
                                    <label class="form-label">Linkedin</label>
                                    <input type="text" class="form-control" placeholder="linkedin" name="linkedin"
                                        value="{{ old('linkedin', $webConfig->linkedin) }}">
                                    @error('linkedin')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- button -->
                    <div class="d-grid">
                        <button class="btn btn-primary">Sửa cài đặt</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
