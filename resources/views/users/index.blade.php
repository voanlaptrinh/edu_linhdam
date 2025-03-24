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

</head>

<body>
    
        <nav class="navbar navbar-dark navbar-expand-lg" id="header-sticky">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}">
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
                            <a class="nav-link" href="{{route('home')}}">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('introduction.home')}}">Giới thiệu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="menuDropdown">
                                Môn học <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Toán lớp 1</a></li>
                                <li><a class="dropdown-item" href="#">Vật lý lớp 2</a></li>
                                <li><a class="dropdown-item" href="#">Hóa học lớp 3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('teachers.home')}}">Giảng viên</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cảm nhận</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('products.home')}}">Giới thiệu sách</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên hệ</a>
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
        <div class="menu-item">
            <a href="mon-hoc.html">
                <span>Môn học</span>
                <i class="fas fa-chevron-down toggle"></i>
            </a>
            <div class="submenu">
                <a href="#">Toán</a>
                <a href="#">Vật lý</a>
                <a href="#">Hóa học</a>
            </div>
        </div>


        <a href="#">Tin tức</a>
        <hr>
        <a href="#">Đăng nhập</a>
        <a href="#">Đăng ký</a>
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
                                <p class="bd-footer-widget-description">Education focused website or template is an
                                    essential part that provides visitors with insights into the program. </p>
                                <div class="bd-footer-widget-contact-info">
                                    <div class="bd-footer-widget-contact-item">
                                        <span>Phone:</span>
                                        <a href="tell:123456789">
                                            +123-4567-8900</a>
                                    </div>
                                    <div class="bd-footer-widget-contact-item">
                                        <span>Email:</span>
                                        <a href="mailto:istudy@mail.com"> istudy@mail.com</a>
                                    </div>
                                    <div class="bd-footer-widget-contact-item">
                                        <span>Address:</span>
                                        <a href="#"> 27 Division St, New York</a>
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
                            <p class="underline">© Copyright <span id="year">2025</span> Developed By iStudy</p>
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
    <script>
        document.getElementById("sidebarToggle").addEventListener("click", function() {
            document.getElementById("mobileSidebar").classList.add("active");
            document.getElementById("sidebarOverlay").classList.add("active");
        });

        document.getElementById("closeSidebar").addEventListener("click", function() {
            document.getElementById("mobileSidebar").classList.remove("active");
            document.getElementById("sidebarOverlay").classList.remove("active");
        });

        document.getElementById("sidebarOverlay").addEventListener("click", function() {
            document.getElementById("mobileSidebar").classList.remove("active");
            document.getElementById("sidebarOverlay").classList.remove("active");
        });

        document.querySelectorAll(".toggle").forEach(icon => {
            icon.addEventListener("click", function(event) {
                let submenu = this.parentElement.nextElementSibling; // Lấy submenu

                // Đảo trạng thái dropdown
                if (submenu) {
                    submenu.style.display = submenu.style.display === "block" ? "none" : "block";
                }

                // Đổi icon
                this.classList.toggle("fa-chevron-down");
                this.classList.toggle("fa-chevron-up");

                event.stopPropagation(); // Ngăn chặn sự kiện lan lên thẻ <a>
                event.preventDefault(); // Ngăn trình duyệt không nhảy link khi nhấn icon
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
    let header = document.getElementById("header-sticky");

    if (header) {
        window.addEventListener("scroll", function () {
            if (window.scrollY > 0) {
                header.classList.add("bd-sticky");
            } else {
                header.classList.remove("bd-sticky");
            }
        });
    }
});


        document.querySelectorAll('.nav-item.dropdown').forEach(item => {
            let timer;
            item.addEventListener('mouseenter', function() {
                clearTimeout(timer);
                this.querySelector('.dropdown-menu').style.display = 'block';
            });
            item.addEventListener('mouseleave', function() {
                timer = setTimeout(() => {
                    this.querySelector('.dropdown-menu').style.display = 'none';
                }, 500); // Delay 300ms trước khi đóng
            });
        });
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true, // Lặp vô hạn
            autoplay: {
                delay: 3000, // Chuyển slide sau 3 giây
                disableOnInteraction: false, // Không dừng khi thao tác
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        var swiper2 = new Swiper(".mySwiper2", {
            loop: false, // Lặp vô hạn
            autoplay: {
                delay: 3000, // Chuyển slide sau 3 giây
                disableOnInteraction: false, // Không dừng khi thao tác
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        var swiper = new Swiper(".mySwiperNews", {
            loop: true, // Chạy lặp vô hạn
            autoplay: {
                delay: 3000, // Chuyển slide sau 3 giây
                disableOnInteraction: false, // Không dừng khi thao tác
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                }, // Mobile: 1 slide
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20
                }, // Tablet: 2 slides
                992: {
                    slidesPerView: 4,
                    spaceBetween: 30
                } // PC: 4 slides
            }
        });
    </script>
</body>

</html>
