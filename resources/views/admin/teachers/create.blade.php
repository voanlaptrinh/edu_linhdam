@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row mb-9">
            <div class="col-md-12">
                <div>
                    <h2>Thêm mới thông tin giáo viên</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-inherit">Giáo viên</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <form class="row g-6 needs-validation" action="{{ route('teacher.store') }}" method="POST"
                    enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="col-lg-7 col-12">
                        <div class="card card-lg">
                            <div class="card-body p-6 d-flex flex-column gap-3">
                                <div
                                    class="d-flex flex-column flex-md-row align-items-center mb-4 file-input-wrapper gap-2">
                                    <div>
                                        <img class="image avatar avatar-lg rounded-3"
                                            src="{{ asset('source/images/docs/placeholder-img.jpg') }}" alt="Image">
                                    </div>

                                    <div class="file-upload btn btn-light ms-md-4">
                                        <input type="file" name="avatar" id="avatar" class="file-input opacity-0"
                                            accept="image/*">
                                        Upload Photo
                                    </div>

                                    <span class="ms-2">JPG, GIF or PNG. 1MB Max.</span>
                                    @error('image')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <!-- input -->
                                        <label for="name" class="form-label">Tên giáo viên</label>
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            class="form-control" id="name" placeholder="Tên giáo viên" />
                                        @error('name')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror

                                    </div>
                                    <div class="col-6">
                                        <!-- input -->
                                        <label for="address" class="form-label">Địa chỉ</label>
                                        <input type="text" name="address" value="{{ old('address') }}"
                                            class="form-control" id="address" placeholder="Địa chỉ" />
                                        @error('address')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror

                                    </div>
                                    <div class="col-6">
                                        <!-- input -->
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control" id="email" placeholder="Email" />
                                        @error('email')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror

                                    </div>
                                    <div class="col-6">
                                        <!-- input -->
                                        <label for="email" class="form-label">Số điện thoại</label>
                                        <input type="text" name="phone" value="{{ old('phone') }}"
                                            class="form-control" id="phone" placeholder="Số điện thoại" />
                                        @error('phone')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <!-- input -->
                                        <label for="email" class="form-label">Môn giảng dạy</label>
                                        <input type="text" name="subject" value="{{ old('subject') }}"
                                            class="form-control" id="subject" placeholder="Môn giảng dạy" />
                                        @error('subject')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <!-- input -->

                                        <label for="email" class="form-label">Ngày tháng sinh</label>
                                        <input type="date" name="birthday" value="{{ old('birthday') }}"
                                            class="form-control" id="birthday" placeholder="Ngày tháng sinh" />
                                        @error('birthday')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>



                                    <div class="col-12">
                                        <label class="form-label">Nội dung</label>
                                        <textarea class="w-100" id="tyni" name="bio">{{ old('bio') }}</textarea>
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
                                        <input type="url" name="facebook" value="{{ old('facebook') }}"
                                            class="form-control" id="facebook" placeholder="facebook" />
                                        @error('facebook')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label">twitter</label>
                                        <input type="url" name="twitter" value="{{ old('twitter') }}"
                                            class="form-control" id="twitter" placeholder="twitter" />
                                        @error('twitter')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label">instagram</label>
                                        <input type="url" name="instagram" value="{{ old('instagram') }}"
                                            class="form-control" id="instagram" placeholder="instagram" />
                                        @error('instagram')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label">linkedin</label>
                                        <input type="url" name="linkedin" value="{{ old('linkedin') }}"
                                            class="form-control" id="linkedin" placeholder="linkedin" />
                                        @error('linkedin')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label">google_plus</label>
                                        <input type="url" name="google_plus" value="{{ old('google_plus') }}"
                                            class="form-control" id="google_plus" placeholder="google_plus" />
                                        @error('google_plus')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label">youtube</label>
                                        <input type="url" name="youtube" value="{{ old('youtube') }}"
                                            class="form-control" id="youtube" placeholder="youtube" />
                                        @error('youtube')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label">github</label>
                                        <input type="url" name="github" value="{{ old('github') }}"
                                            class="form-control" id="github" placeholder="github" />
                                        @error('github')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="email" class="form-label">website</label>
                                        <input type="url" name="website" value="{{ old('website') }}"
                                            class="form-control" id="website" placeholder="website" />
                                        @error('website')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label>Kỹ năng</label>
                                    <div id="skills-container">
                                        <div class="d-flex mb-2 skill-item">
                                            <input type="text" name="skills[0][name]" class="form-control me-2"
                                                placeholder="Tên kỹ năng">
                                            <input type="number" name="skills[0][level]" class="form-control me-2"
                                                placeholder="Mức độ (%)" min="1" max="100">
                                            <button type="button" class="btn btn-danger remove-skill">Xóa</button>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary mt-2" id="add-skill">Thêm kỹ
                                            năng</button>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="d-flex flex-row gap-2">
                                        <button class="btn btn-primary w-100" type="submit">Thêm mới</button>
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

    <!-- Script để thêm/xóa kỹ năng -->
    <script>
        document.getElementById('add-skill').addEventListener('click', function() {
            let container = document.getElementById('skills-container');
            let skillItems = container.getElementsByClassName('skill-item');
            let index = skillItems.length; // Lấy số lượng hiện tại để tạo index mới

            let skillItem = document.createElement('div');
            skillItem.classList.add('d-flex', 'mb-2', 'skill-item');
            skillItem.innerHTML = `
        <input type="text" name="skills[${index}][name]" class="form-control me-2" placeholder="Tên kỹ năng">
        <input type="number" name="skills[${index}][level]" class="form-control me-2" placeholder="Mức độ (%)" min="1" max="100">
        <button type="button" class="btn btn-danger remove-skill">Xóa</button>
    `;
            container.appendChild(skillItem);
        });

        // Xóa kỹ năng
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-skill')) {
                e.target.parentElement.remove();
                updateSkillIndexes(); // Cập nhật lại index sau khi xóa
            }
        });

        // Cập nhật lại index của các kỹ năng sau khi xóa
        function updateSkillIndexes() {
            let skillItems = document.querySelectorAll('#skills-container .skill-item');
            skillItems.forEach((item, index) => {
                item.querySelector('input[name^="skills"]').setAttribute('name', `skills[${index}][name]`);
                item.querySelector('input[name^="skills"]').nextElementSibling.setAttribute('name',
                    `skills[${index}][level]`);
            });
        }
    </script>
@endsection
