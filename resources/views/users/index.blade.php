<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/source/users/css/style.css') }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="{{ asset('/source/admin/js/jquery-3.3.1.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/source/admin/css/toastr.min.css') }}">
</head>

<body>
    <div class="bd-header-top">
        <div class="bd-header-top-left">
            
        </div>
        <div class="bd-header-top-right text-md-end">
            <div>
                <ul class="list-unstyled d-flex align-items-center mb-0 ms-5 ms-lg-0">

                    <li class="dropdown ms-4">
                        <a href="#"  type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="http://localhost:8080/source/images/avatar/avatar-1.jpg" alt="" class="avatar avatar-md rounded-circle">
                        </a>
                        

                        <div class="dropdown-menu dropdown-menu-end p-0">
                            <div class="lh-1 px-5 py-4 border-bottom">
                                <h5 class="mb-1 h6"></h5>
                                <small></small>

                            </div>

                            <ul class="list-unstyled px-2 py-3">
                                <li>
                                    <a class="dropdown-item" href="#!">Home</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="http://localhost:8080/admin/accout-admin">Profile</a>
                                </li>


                            </ul>
                            <div class="border-top px-5 py-3">
                                <a href="#" class="text-dark">Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-dark navbar-expand-lg" id="header-sticky">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset(get_config()->logo) }}" alt="" width="70px" height="70px"
                    style="border-radius: 10%">
                {{ get_config()->name }}
            </a>
            <button class="navbar-toggler d-lg-none" id="sidebarToggle">
                <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('introduction.home') }}">Giới thiệu</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ route('courses.home') }}" class="nav-link" id="menuDropdown">
                            Môn học <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            @foreach (get_course() as $course)
                                <li><a class="dropdown-item"
                                        href="{{ route('courses.detail.home', ['alias' => $course->alias]) }}">{{ $course->name }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('teachers.home') }}">Giảng viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cảm nhận</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.home') }}">Giới thiệu sách</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('news.home') }}">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.home') }}">Liên hệ</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <!-- Sidebar Mobile -->
    <div class="sidebar" id="mobileSidebar">
        <div class="p-2 d-flex justify-content-between align-items-center">
            <div>
                <img src="{{ asset(get_config()->logo) }}" alt="" width="70px" height="70px"
                    style="border-radius: 10%">
                {{ get_config()->name }}
            </div>
            <div>
                <a href="javascript:void(0)" id="closeSidebar"><i class="fas fa-times"></i></a>
            </div>
        </div>
        <hr>
        <a href="{{ route('home') }}">Trang chủ</a>
        <a  href="{{ route('introduction.home') }}">Giới thiệu</a>
        <div class="menu-item">
            <a href="{{ route('courses.home') }}">
                <span>Môn học</span>
                <i class="fas fa-chevron-down toggle"></i>
            </a>
            <div class="submenu">
                @foreach (get_course() as $course)
                <a href="{{ route('courses.detail.home', ['alias' => $course->alias]) }}">{{$course->name}}</a>
                @endforeach
              
            </div>
        </div>
        <a class="" href="{{ route('teachers.home') }}">Giảng viên</a>
        <a class="" href="#">Cảm nhận</a>
        <a class="" href="{{ route('products.home') }}">Giới thiệu sách</a>
        <a class="" href="{{ route('news.home') }}">Tin tức</a>
        <a class="" href="{{ route('contact.home') }}">Liên hệ</a>
       
    </div>
    <div class="overlay" id="sidebarOverlay"></div>


    @yield('content')



    <footer class="fix">
        <div class="bd-footer-area section-space primary-bg theme-bg-05">
            <div class="container">
                <div class="row gy-30 justify-content-between">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-8 col-sm-12">
                        <div class="bd-footer-widget footer-1-col-1">
                            <div class="bd-footer-widget-content">
                                <div class="bd-footer-widget-logo">
                                    <a href="index.html">
                                        <img src="{{ asset(get_config()->logo) }}" alt="image" width="80"
                                            height="80">
                                    </a>
                                </div>
                                <p class="bd-footer-widget-description">{{get_config()->description}}</p>
                                <div class="bd-footer-widget-contact-info">
                                    <div class="bd-footer-widget-contact-item">
                                        <span>Điện thoại:</span>
                                        <a href="tell:{{get_config()->phone}}">
                                            {{get_config()->phone}}</a>
                                    </div>
                                    <div class="bd-footer-widget-contact-item">
                                        <span>Email:</span>
                                        <a href="mailto:{{get_config()->email}}"> {{get_config()->email}}</a>
                                    </div>
                                    <div class="bd-footer-widget-contact-item">
                                        <span>Địa chỉ:</span>
                                        <a href="#"> {{get_config()->address}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="bd-footer-widget footer-1-col-2">
                            <h6 class="bd-footer-widget-title">Online Platform</h6>
                            <div class="bd-footer-widget-links list-none">
                                <ul>
                                    <li class="underline"><a href="about-university.html">About Us</a></li>
                                    <li class="underline"><a href="courses-grid-right.html">Our Programs</a></li>
                                    <li class="underline"><a href="event.html">Events</a></li>
                                    <li class="underline"><a href="instructor.html">Instructor</a></li>
                                    <li class="underline"><a href="instructor-details.html">Instructor Details</a>
                                    </li>
                                    <li class="underline"><a href="apply-online.html">Admission</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="bd-footer-widget footer-1-col-3">
                            <h6 class="bd-footer-widget-title">Useful Links</h6>
                            <div class="bd-footer-widget-links list-none">
                                <ul>
                                    <li class="underline"><a href="contact.html">Contact Us</a></li>
                                    <li class="underline"><a href="blog.html">Latest News</a></li>
                                    <li class="underline"><a href="faq.html">FAQ’s</a></li>
                                    <li class="underline"><a href="gallery.html">Gallery</a></li>
                                    <li class="underline"><a href="mvs.html">Vision &amp; Mission</a></li>
                                    <li class="underline"><a href="sign-in.html">Sign In</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-8 col-sm-12">
                        <div class="bd-footer-widget footer-1-col-4">
                            <h6 class="bd-footer-widget-title mb-20">Stay Connected</h6>
                            <div class="bd-footer-from-content mb-20">
                                <div class="bd-footer-social">
                                    <div class="theme-social social-brand-color">
                                        <ul class="social-icon-list">
                                            <li><a class="facebook" href="#"><i
                                                        class="fab fa-facebook"></i></a>
                                            </li>
                                            <li><a class="twitter" href="#"><i class="fab fa-github"></i></a>
                                            </li>
                                            <li><a class="linkedin" href="#"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li><a class="instagram" href="#"><i
                                                        class="fab fa-instagram"></i></a>
                                            </li>
                                            <li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bd-footer-copyright-area style-three pt-15 pb-15">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="bd-footer-copyright text-center">
                            <p class="underline">© Copyright <span id="year">{{now()->year}}</span> {{get_config()->title}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>






    <!-- jQuery & Slick JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/source/admin/js/toastr.min.js') }}"></script>
    <script>
        toastr.options = {

            "progressBar": true, 
            "timeOut": 2000, 
            "extendedTimeOut": 1000,

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
    <script src="{{ asset('/source/users/js/style.js') }}"></script>
</body>

</html>
