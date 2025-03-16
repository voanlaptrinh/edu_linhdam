@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row mb-9">
            <div class="col-md-12">
                <h2>Chỉnh sửa thông tin giáo viên</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="" class="text-inherit">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('teacher.admin') }}" class="text-inherit">Giáo viên</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form class="row g-6 needs-validation" action="{{ route('teacher.update', $teacher->id) }}" method="POST"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    @method('PUT')

                    <div class="col-lg-7 col-12">
                        <div class="card card-lg">
                            <div class="card-body p-6 d-flex flex-column gap-3">
                                <div class="d-flex flex-column flex-md-row align-items-center mb-4 file-input-wrapper gap-2">
                                    <div>
                                        <img class="image avatar avatar-lg rounded-3"
                                            src="{{ asset($teacher->avatar ?? 'source/images/docs/placeholder-img.jpg') }}" 
                                            alt="Avatar giáo viên">
                                    </div>
                                    <div class="file-upload btn btn-light ms-md-4">
                                        <input type="file" name="avatar" id="avatar" class="file-input opacity-0" accept="image/*">
                                        Thay đổi ảnh
                                    </div>
                                    <span class="ms-2">JPG, GIF hoặc PNG. Tối đa 2MB.</span>
                                    @error('avatar')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row g-2">
                                    <div class="col-6">
                                        <label for="name" class="form-label">Tên giáo viên</label>
                                        <input type="text" name="name" value="{{ old('name', $teacher->name) }}" class="form-control" id="name">
                                        @error('name')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="address" class="form-label">Địa chỉ</label>
                                        <input type="text" name="address" value="{{ old('address', $teacher->address) }}" class="form-control" id="address">
                                        @error('address')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" value="{{ old('email', $teacher->email) }}" class="form-control" id="email">
                                        @error('email')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="phone" class="form-label">Số điện thoại</label>
                                        <input type="text" name="phone" value="{{ old('phone', $teacher->phone) }}" class="form-control" id="phone">
                                        @error('phone')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="subject" class="form-label">Môn giảng dạy</label>
                                        <input type="text" name="subject" value="{{ old('subject', $teacher->subject) }}" class="form-control" id="subject">
                                        @error('subject')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="birthday" class="form-label">Ngày tháng sinh</label>
                                        <input type="date" name="birthday" 
                                        value="{{ old('birthday', optional($teacher->birthday)->format('Y-m-d')) }}" 
                                        class="form-control" id="birthday">
                                 
                                        @error('birthday')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label">Nội dung</label>
                                        <textarea class="w-100" id="tyni" name="bio">{{ old('bio', $teacher->bio) }}</textarea>
                                        @error('bio')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="card card-lg">
                            <div class="card-body p-6 d-flex flex-column gap-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="email" class="form-label">facebook</label>
                                        <input type="url" name="facebook" value="{{ old('facebook', $teacher->facebook) }}"
                                            class="form-control" id="facebook" placeholder="facebook" />
                                        @error('facebook')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label">twitter</label>
                                        <input type="url" name="twitter" value="{{ old('twitter', $teacher->twitter) }}"
                                            class="form-control" id="twitter" placeholder="twitter" />
                                        @error('twitter')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label">instagram</label>
                                        <input type="url" name="instagram" value="{{ old('instagram', $teacher->instagram) }}"
                                            class="form-control" id="instagram" placeholder="instagram" />
                                        @error('instagram')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label">linkedin</label>
                                        <input type="url" name="linkedin" value="{{ old('linkedin', $teacher->linkedin) }}"
                                            class="form-control" id="linkedin" placeholder="linkedin" />
                                        @error('linkedin')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label">google_plus</label>
                                        <input type="url" name="google_plus" value="{{ old('google_plus', $teacher->google_plus) }}"
                                            class="form-control" id="google_plus" placeholder="google_plus" />
                                        @error('google_plus')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label">youtube</label>
                                        <input type="url" name="youtube" value="{{ old('youtube', $teacher->youtube) }}"
                                            class="form-control" id="youtube" placeholder="youtube" />
                                        @error('youtube')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label">github</label>
                                        <input type="url" name="github" value="{{ old('github', $teacher->github) }}"
                                            class="form-control" id="github" placeholder="github" />
                                        @error('github')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label">website</label>
                                        <input type="url" name="website" value="{{ old('website', $teacher->website) }}"
                                            class="form-control" id="website" placeholder="website" />
                                        @error('website')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label>Kỹ năng</label>
                                    <div id="skills-container">
                                        @php
                                        $skills = is_string($teacher->skills) ? json_decode($teacher->skills, true) : [];
                                    @endphp
                                    
                                        @foreach ($skills as $index => $skill)
                                            <div class="d-flex mb-2 skill-item">
                                                <input type="text" name="skills[{{ $index }}][name]" value="{{ $skill['name'] }}" class="form-control me-2" placeholder="Tên kỹ năng">
                                                <input type="number" name="skills[{{ $index }}][level]" value="{{ $skill['level'] }}" class="form-control me-2" placeholder="Mức độ (%)" min="1" max="100">
                                                <button type="button" class="btn btn-danger remove-skill">Xóa</button>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary mt-2" id="add-skill">Thêm kỹ năng</button>
                                    </div>
                                </div>

                                <div class="d-flex flex-row gap-2">
                                    <button class="btn btn-primary w-100" type="submit">Cập nhật</button>
                                    <a href="{{ route('teacher.admin') }}" class="btn btn-light w-100">Hủy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('add-skill').addEventListener('click', function() {
            let container = document.getElementById('skills-container');
            let index = container.children.length;
            let skillItem = document.createElement('div');
            skillItem.classList.add('d-flex', 'mb-2', 'skill-item');
            skillItem.innerHTML = `
                <input type="text" name="skills[${index}][name]" class="form-control me-2" placeholder="Tên kỹ năng">
                <input type="number" name="skills[${index}][level]" class="form-control me-2" placeholder="Mức độ (%)" min="1" max="100">
                <button type="button" class="btn btn-danger remove-skill">Xóa</button>
            `;
            container.appendChild(skillItem);
        });

        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-skill')) {
                e.target.parentElement.remove();
            }
        });
    </script>
@endsection
