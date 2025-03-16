<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from freshcart.codescandy.com/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2024 03:43:44 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Codescandy" name="author">
    {{-- <title>{{get_config()->title}}</title>
	<meta name="description" content="{{ get_config()->description }}">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(get_config()->logo) }}">
  
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(get_config()->logo) }}"> --}}

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
							<li class="dropdown-center">
								<a class="position-relative btn-icon btn-ghost-secondary btn rounded-circle" href="#"
									role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-bell fs-5"></i>
									<span
										class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 ms-n2">
										2
										<span class="visually-hidden">unread messages</span>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-0 border-0">
									<div class="border-bottom p-5 d-flex justify-content-between align-items-center">
										<div>
											<h5 class="mb-1">Notifications</h5>
											<p class="mb-0 small">You have 2 unread messages</p>
										</div>
										<a href="#!" class="text-muted">
											<a href="#" class="btn btn-ghost-secondary btn-icon rounded-circle"
												data-bs-toggle="tooltip" data-bs-placement="bottom"
												data-bs-title="Mark all as read">
												<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
													fill="currentColor" class="bi bi-check2-all text-success"
													viewBox="0 0 16 16">
													<path
														d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
													<path
														d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
												</svg>
											</a>
										</a>
									</div>
									<div data-simplebar style="height: 250px">
										<!-- List group -->
										<ul class="list-group list-group-flush notification-list-scroll fs-6">
											<!-- List group item -->
											<li class="list-group-item px-5 py-4 list-group-item-action active">
												<a href="#!" class="text-muted">
													<div class="d-flex">
														<img src="{{asset('source/images/avatar/avatar-1.jpg')}}" alt=""
															class="avatar avatar-md rounded-circle" />
														<div class="ms-4">
															<p class="mb-1">
																<span class="text-dark">Your order is placed</span>
																waiting for shipping
															</p>
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" width="12"
																	height="12" fill="currentColor"
																	class="bi bi-clock text-muted" viewBox="0 0 16 16">
																	<path
																		d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
																	<path
																		d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
																</svg>
																<small class="ms-2">1 minute ago</small>
															</span>
														</div>
													</div>
												</a>
											</li>
											<li class="list-group-item px-5 py-4 list-group-item-action">
												<a href="#!" class="text-muted">
													<div class="d-flex">
														<img src="{{asset('source/images/avatar/avatar-5.jpg')}}" alt=""
															class="avatar avatar-md rounded-circle" />
														<div class="ms-4">
															<p class="mb-1">
																<span class="text-dark">Jitu Chauhan</span>
																answered to your pending order list with notes
															</p>
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" width="12"
																	height="12" fill="currentColor"
																	class="bi bi-clock text-muted" viewBox="0 0 16 16">
																	<path
																		d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
																	<path
																		d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
																</svg>
																<small class="ms-2">2 days ago</small>
															</span>
														</div>
													</div>
												</a>
											</li>
											<li class="list-group-item px-5 py-4 list-group-item-action">
												<a href="#!" class="text-muted">
													<div class="d-flex">
														<img src="{{asset('source/images/avatar/avatar-2.jpg')}}" alt=""
															class="avatar avatar-md rounded-circle" />
														<div class="ms-4">
															<p class="mb-1">
																<span class="text-dark">You have new messages</span>
																2 unread messages
															</p>
															<span>
																<svg xmlns="http://www.w3.org/2000/svg" width="12"
																	height="12" fill="currentColor"
																	class="bi bi-clock text-muted" viewBox="0 0 16 16">
																	<path
																		d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
																	<path
																		d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
																</svg>
																<small class="ms-2">3 days ago</small>
															</span>
														</div>
													</div>
												</a>
											</li>
										</ul>
									</div>
									<div class="border-top px-5 py-4 text-center">
										<a href="#!">View All</a>
									</div>
								</div>
							</li>
							<li class="dropdown ms-4">
								<a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="{{asset('source/images/avatar/avatar-1.jpg')}}" alt=""
										class="avatar avatar-md rounded-circle" />
								</a>

								<div class="dropdown-menu dropdown-menu-end p-0">
									<div class="lh-1 px-5 py-4 border-bottom">
										<h5 class="mb-1 h6">FreshCart Admin</h5>
										<small>admindemo@email.com</small>
									</div>

									<ul class="list-unstyled px-2 py-3">
										<li>
											<a class="dropdown-item" href="#!">Home</a>
										</li>
										<li>
											<a class="dropdown-item" href="#!">Profile</a>
										</li>

										<li>
											<a class="dropdown-item" href="#!">Settings</a>
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
								<a class="nav-link  {{ in_array(Request::route()->getName(), ['dashboard.admin']) ? 'active' : '' }}" href="{{route('dashboard.admin')}}">
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
								<a class="nav-link {{ in_array(Request::route()->getName(), ['products.admin', 'products.create', 'products.edit', 'products.detailadmin']) ? 'active' : '' }}" href="{{route('products.admin')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-cart"></i></span>
										<span class="nav-link-text">Sản phẩm</span>
									</div>
								</a>
							</li>
							{{-- <li class="nav-item">
								<a class="nav-link {{ in_array(Request::route()->getName(), ['categorys.admin', 'categorys.create', 'categorys.edit']) ? 'active' : '' }}" href="{{route('categorys.admin')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
										<span class="nav-link-text">Danh mục</span>
									</div>
								</a>
							</li> --}}
							<li class="nav-item">
								<a class="nav-link {{ in_array(Request::route()->getName(), ['news.admin', 'news.create', 'news.edit', 'news.admin.detail']) ? 'active' : '' }}" href="{{route('news.admin')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-newspaper"></i></span>
										<span class="nav-link-text">Tin tức</span>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link {{ in_array(Request::route()->getName(), ['policys.admin', 'policys.edit']) ? 'active' : '' }}" href="{{route('policys.admin')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-journal-medical"></i></span>
										<span class="nav-link-text">Chính sách</span>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link {{ in_array(Request::route()->getName(), ['webConfig.admin']) ? 'active' : '' }} " href="{{route('webConfig.admin')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-gear"></i></span>
										<span class="nav-link-text">Cài đặt</span>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link {{ in_array(Request::route()->getName(), ['banner.admin']) ? 'active' : '' }} " href="{{route('banner.admin')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-images"></i></span>
										<span class="nav-link-text">Banner</span>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link {{ in_array(Request::route()->getName(), ['teacher.admin','teacher.create','teacher.edit', 'teacher.detail']) ? 'active' : '' }} " href="{{route('teacher.admin')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-mortarboard"></i></span>
										<span class="nav-link-text">Giáo viên</span>
									</div>
								</a>
							</li>
							{{-- <li class="nav-item">
								<a class="nav-link {{ in_array(Request::route()->getName(), ['orders.admin']) ? 'active' : '' }} " href="{{route('orders.admin')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-bag"></i></span>
										<span class="nav-link-text">Đơn hàng</span>
									</div>
								</a>
							</li> --}}
							<li class="nav-item">
								<a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
									data-bs-target="#navCategoriesOrders" aria-expanded="false"
									aria-controls="navCategoriesOrders">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-bag"></i></span>
										<span class="nav-link-text">Orders</span>
									</div>
								</a>
								<div id="navCategoriesOrders" class="collapse " data-bs-parent="#sideNavbar">
									<ul class="nav flex-column">
										<li class="nav-item">
											<a class="nav-link " href="order-list.html">List</a>
										</li>
										<!-- Nav item -->
										<li class="nav-item">
											<a class="nav-link " href="order-single.html">Single</a>
										</li>
									</ul>
								</div>
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
							{{-- <img src="{{asset(get_config()->logo)}}" alt="" />
							<span class="fs-4 ps-1">{{get_config()->title}}</span> --}}
						</a>
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="navbar-vertical-content flex-grow-1" data-simplebar="">
						<ul class="navbar-nav flex-column">
							{{-- <li class="nav-item">
								<a class="nav-link  {{ in_array(Request::route()->getName(), ['dashboard.admin']) ? 'active' : '' }}" href="{{route('dashboard.admin')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-house"></i></span>
										<span>Dashboard</span>
									</div>
								</a>
							</li>
							<li class="nav-item mt-6 mb-3">
								<span class="nav-label">Quản lý cửa hàng</span>
							</li>
							<li class="nav-item">
								<a class="nav-link {{ in_array(Request::route()->getName(), ['products.admin', 'products.create', 'products.edit']) ? 'active' : '' }}" href="{{route('products.admin')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-cart"></i></span>
										<span class="nav-link-text">Sản phẩms</span>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link  {{ in_array(Request::route()->getName(), ['categorys.admin', 'categorys.create', 'categorys.edit']) ? 'active' : '' }}" href="{{route('categorys.admin')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
										<span class="nav-link-text">Danh mục</span>
									</div>
								</a>
							</li> --}}
							<li class="nav-item">
								<a class="nav-link {{ in_array(Request::route()->getName(), ['news.admin', 'news.create', 'news.edit']) ? 'active' : '' }}" href="{{route('news.admin')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-newspaper"></i></span>
										<span class="nav-link-text">Tin tức</span>
									</div>
								</a>
							</li>
							{{-- <li class="nav-item">
								<a class="nav-link {{ in_array(Request::route()->getName(), ['policys.admin', 'policys.edit']) ? 'active' : '' }}" href="{{route('policys.admin')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-journal-medical"></i></span>
										<span class="nav-link-text">Chính sách</span>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link {{ in_array(Request::route()->getName(), ['webConfig.admin']) ? 'active' : '' }} " href="{{route('webConfig.admin')}}">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-gear"></i></span>
										<span class="nav-link-text">Cài đặt</span>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
									data-bs-target="#navOrders" aria-expanded="false" aria-controls="navOrders">
									<div class="d-flex align-items-center">
										<span class="nav-link-icon"><i class="bi bi-bag"></i></span>
										<span class="nav-link-text">Orders</span>
									</div>
								</a>
								<div id="navOrders" class="collapse " data-bs-parent="#sideNavbar">
									<ul class="nav flex-column">
										<li class="nav-item">
											<a class="nav-link " href="order-list.html">List</a>
										</li>
										<!-- Nav item -->
										<li class="nav-item">
											<a class="nav-link " href="order-single.html">Single</a>
										</li>
									</ul>
								</div>
							</li> --}}
						
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
            images_upload_url: "/upload-image",
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
                        fetch('/delete-image', {
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
