<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from freshcart.codescandy.com/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2024 03:43:44 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Codescandy" name="author">
    <title>{{ get_config()->title }}</title>
    <meta name="description" content="{{ get_config()->description }}">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(get_config()->logo) }}">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(get_config()->logo) }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ asset('/source/admin/js/jquery-3.3.1.js') }}"></script>
    <link href="{{ asset('source/admin/css/dropzone.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('source/admin/css/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('/source/admin/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/source/admin/css/admin.css') }}">
    <!-- Libs CSS -->
    <link href="{{ asset('source/admin/css/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('source/admin/css/feather-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('source/admin/css/simplebar.min.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('source/admin/css/theme.min.css') }}">


</head>

<body>
    <!-- main -->
    <div>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-glass">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="d-flex align-items-center">
                        <a class="text-inherit d-block d-xl-none me-4" data-bs-toggle="offcanvas"
                            href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-text-indent-right" viewBox="0 0 16 16">
                                <path
                                    d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm10.646 2.146a.5.5 0 0 1 .708.708L11.707 8l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zM2 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </a>


                    </div>
                    <div>
                        <ul class="list-unstyled d-flex align-items-center mb-0 ms-5 ms-lg-0">

                            <li class="dropdown ms-4">
                                <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('source/images/avatar/avatar-1.jpg') }}" alt=""
                                        class="avatar avatar-md rounded-circle" />
                                </a>
								

                                <div class="dropdown-menu dropdown-menu-end p-0">
                                    <div class="lh-1 px-5 py-4 border-bottom">
                                        <h5 class="mb-1 h6">{{ Auth::user()->name ?? '' }}</h5>
                                        <small>{{ Auth::user()->email ?? '' }}</small>

                                    </div>

                                    <ul class="list-unstyled px-2 py-3">
                                        <li>
                                            <a class="dropdown-item" href="#!">Home</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('account.admin') }}">Profile</a>
                                        </li>


                                    </ul>
                                    <div class="border-top px-5 py-3">
                                        <a href="#">Log Out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <div class="main-wrapper">
            <!-- navbar vertical -->
            <!-- navbar -->
            <nav class="navbar-vertical-nav d-none d-xl-block">
                <div class="navbar-vertical">
                    <div class="px-4 py-5">
                        <a href="../index.html" class="navbar-brand d-flex align-items-center justify-content-center">
                            {{-- <img src="{{asset(get_config()->logo)}}" alt="" />
							<span class="fs-3 fw-semibold ps-2">{{get_config()->title}}</span> --}}
                        </a>
                    </div>
                    <div class="navbar-vertical-content flex-grow-1" data-simplebar="">
                        <ul class="navbar-nav flex-column" id="sideNavbar">
                            <li class="nav-item">
                                <a class="nav-link  {{ in_array(Request::route()->getName(), ['dashboard.admin']) ? 'active' : '' }}"
                                    href="{{ route('dashboard.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-house"></i></span>
                                        <span class="nav-link-text">Dashboard</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item mt-6 mb-3">
                                <span class="nav-label">Quản lý cửa hàng</span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['products.admin', 'products.create', 'products.edit', 'products.detailadmin']) ? 'active' : '' }}"
                                    href="{{ route('products.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-cart"></i></span>
                                        <span class="nav-link-text">Giới thiệu sách</span>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['news.admin', 'news.create', 'news.edit', 'news.admin.detail']) ? 'active' : '' }}"
                                    href="{{ route('news.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-newspaper"></i></span>
                                        <span class="nav-link-text">Tin tức</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['policys.admin', 'policys.edit']) ? 'active' : '' }}"
                                    href="{{ route('policys.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-journal-medical"></i></span>
                                        <span class="nav-link-text">Chính sách</span>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['banner.admin', 'banner.create', 'banner.edit', 'banner.detail']) ? 'active' : '' }} "
                                    href="{{ route('banner.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-images"></i></span>
                                        <span class="nav-link-text">Banner</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['teacher.admin', 'teacher.create', 'teacher.edit', 'teacher.detail']) ? 'active' : '' }} "
                                    href="{{ route('teacher.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-mortarboard"></i></span>
                                        <span class="nav-link-text">Giáo viên</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['courses.admin', 'courses.create', 'courses.edit', 'courses.admin.detail']) ? 'active' : '' }} "
                                    href="{{ route('courses.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-file-font"></i></span>
                                        <span class="nav-link-text">Bản tin khóa học</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['feelings.admin', 'feelings.create', 'feelings.edit']) ? 'active' : '' }}"
                                    href="{{ route('feelings.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-emoji-sunglasses"></i></span>
                                        <span class="nav-link-text">Cảm nhận</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['infomation.admin']) ? 'active' : '' }}"
                                    href="{{ route('infomation.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-globe-americas"></i></span>
                                        <span class="nav-link-text">Về chúng tôi</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['contact.admin']) ? 'active' : '' }}"
                                    href="{{ route('contact.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-wechat"></i></span>
                                        <span class="nav-link-text">Liên hệ</span>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['webConfig.admin']) ? 'active' : '' }} "
                                    href="{{ route('webConfig.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-gear"></i></span>
                                        <span class="nav-link-text">Cài đặt</span>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>

            <nav class="navbar-vertical-nav offcanvas offcanvas-start navbar-offcanvac" tabindex="-1"
                id="offcanvasExample">
                <div class="navbar-vertical">
                    <div class="px-4 py-5 d-flex justify-content-between align-items-center">
                        <a href="" class="navbar-brand d-flex align-items-center justify-content-center">
                            <img src="{{ asset(get_config()->logo) }}" alt="" />
                            <span class="fs-4 ps-1">{{ get_config()->title }}</span>
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="navbar-vertical-content flex-grow-1" data-simplebar="">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link  {{ in_array(Request::route()->getName(), ['dashboard.admin']) ? 'active' : '' }}"
                                    href="{{ route('dashboard.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-house"></i></span>
                                        <span>Dashboard</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['products.admin', 'products.create', 'products.edit', 'products.detailadmin']) ? 'active' : '' }}"
                                    href="{{ route('products.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-cart"></i></span>
                                        <span class="nav-link-text">Giới thiệu sách</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['news.admin', 'news.create', 'news.edit', 'news.admin.detail']) ? 'active' : '' }}"
                                    href="{{ route('news.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-newspaper"></i></span>
                                        <span class="nav-link-text">Tin tức</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['policys.admin', 'policys.edit']) ? 'active' : '' }}"
                                    href="{{ route('policys.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-journal-medical"></i></span>
                                        <span class="nav-link-text">Chính sách</span>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['banner.admin', 'banner.create', 'banner.edit', 'banner.detail']) ? 'active' : '' }} "
                                    href="{{ route('banner.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-images"></i></span>
                                        <span class="nav-link-text">Banner</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['teacher.admin', 'teacher.create', 'teacher.edit', 'teacher.detail']) ? 'active' : '' }} "
                                    href="{{ route('teacher.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-mortarboard"></i></span>
                                        <span class="nav-link-text">Giáo viên</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['courses.admin', 'courses.create', 'courses.edit', 'courses.admin.detail']) ? 'active' : '' }} "
                                    href="{{ route('courses.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-file-font"></i></span>
                                        <span class="nav-link-text">Bản tin khóa học</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['feelings.admin', 'feelings.create', 'feelings.edit']) ? 'active' : '' }}"
                                    href="{{ route('feelings.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-emoji-sunglasses"></i></span>
                                        <span class="nav-link-text">Cảm nhận</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['infomation.admin']) ? 'active' : '' }}"
                                    href="{{ route('infomation.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-globe-americas"></i></span>
                                        <span class="nav-link-text">Về chúng tôi</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['contact.admin']) ? 'active' : '' }}"
                                    href="{{ route('contact.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-wechat"></i></span>
                                        <span class="nav-link-text">Liên hệ</span>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ in_array(Request::route()->getName(), ['webConfig.admin']) ? 'active' : '' }} "
                                    href="{{ route('webConfig.admin') }}">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon"><i class="bi bi-gear"></i></span>
                                        <span class="nav-link-text">Cài đặt</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- main wrapper -->
            <main class="main-content-wrapper">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="{{ asset('source/admin/js/tagify.js') }}"></script>
    <!-- Libs JS -->
    <!-- <script src="../libs/jquery/dist/jquery.min.js"></script> -->
    <script src="{{ asset('source/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('source/admin/js/simplebar.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('source/admin/js/theme.min.js') }}"></script>

    <script src="{{ asset('/source/admin/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('source/admin/js/quill.min.js') }}"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#tyni',
            plugins: 'advlist autolink lists link charmap preview anchor table image',
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help | table | link image | blocks fontfamily fontsize',
            images_upload_url: "/admin/upload-image",
            relative_urls: false,
            document_base_url: "{{ url('/') }}",
            automatic_uploads: true,
            setup: function(editor) {
                editor.on('NodeChange', function(event) {
                    const currentImages = Array.from(editor.getDoc().querySelectorAll('img')).map(img =>
                        img.src);

                    if (!editor.oldImages) editor.oldImages = currentImages;

                    const removedImages = editor.oldImages.filter(img => !currentImages.includes(img));
                    editor.oldImages = currentImages;

                    removedImages.forEach(imageUrl => {
                        fetch('/admin/delete-image', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                    image: imageUrl
                                })
                            })
                            .then(response => response.json())
                            .then(data => console.log(data.message))
                            .catch(error => console.error('Lỗi khi xóa ảnh:', error));
                    });
                });
            }
        })
    </script>
    <script src="{{ asset('/source/admin/js/toastr.min.js') }}"></script>
    <script>
        toastr.options = {

            "progressBar": true, // Hiển thị thanh tiến trình
            "timeOut": 2000, // Thời gian hiển thị thông báo (2 giây)
            "extendedTimeOut": 1000, // Thời gian hiển thị khi người dùng di chuột vào thông báo (1 giây)

        };

        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif
    </script>

</body>

<!-- Mirrored from freshcart.codescandy.com/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2024 03:43:48 GMT -->

</html>
