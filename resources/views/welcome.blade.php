<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('source/users/css/style.css') }}">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
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
                        <a class="nav-link" href="#">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin tức</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" id="menuDropdown">
                            Môn học <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Toán</a></li>
                            <li><a class="dropdown-item" href="#">Vật lý</a></li>
                            <li><a class="dropdown-item" href="#">Hóa học</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin tức</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Đăng nhập</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Đăng ký</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar Mobile -->
    <div class="sidebar" id="mobileSidebar">
        <div class="p-2 d-flex justify-content-between align-items-center"> 
           <div>
            <img src="{{ asset(get_config()->logo) }}" alt="" width="70px" height="70px" style="border-radius: 10%">
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



    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img
                    src="https://www.mysaifco.com/wp-content/uploads/2024/11/img-world-of-advanture-Marvel-Zone.jpg"
                    alt="Slide 1"></div>
            <div class="swiper-slide"><img
                    src="https://www.mysaifco.com/wp-content/uploads/2024/11/img-world-of-advanture-Marvel-Zone.jpg"
                    alt="Slide 2"></div>
            <div class="swiper-slide"><img
                    src="https://www.mysaifco.com/wp-content/uploads/2024/11/img-world-of-advanture-Marvel-Zone.jpg"
                    alt="Slide 3"></div>
        </div>
        <!-- Nút điều hướng -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>


    </div>



    <section class="bd-about-area section-space theme-bg p-relative bd-noise-bg">
        <div class="container">
            <div class="bd-about-shape-wrap">
                <div class="shape-1"><img src="assets/images/shape/about-solid-circle.webp" alt="shape"></div>
                <div class="shape-2"><img src="https://html.topylo.com/istudy-prv/assets/images/shape/about-book-shape.webp" alt="shape"></div>
                <div class="shape-3"><img src="assets/images/shape/about-wave-shape.webp" alt="shape"></div>
                <div class="shape-4"><img src="assets/images/shape/about-circle.webp" alt="shape"></div>
            </div>
            <div class="row g-5">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="bd-about-wrapper style-one">
                        <div class="bd-about-thumb-inner">
                            <div class="bd-about-thumb-wrapper">
                                <div class="bd-about-thumb">
                                    <img src="assets/images/about/about-thumb-01.webp" alt="image">
                                </div>
                                <div class="bd-about-thumb-small">
                                    <img src="assets/images/about/about-thumb-small-01.webp" alt="image">
                                </div>
                            </div>
                            <div class="bd-about-thumb-shape">
                                <img src="assets/images/shape/dot-shape-01.webp" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="bd-about-wrapper style-one">
                        <div class="bd-about-content-wrapper">
                            <div class="bd-section-title-wrapper">
                                <span class="bd-section-subtitle text-secondary">About Us</span>
                                <h2 class="bd-section-title white-text mb-20">A New Different Way To Improve Your <span class="down-mark-line">Skills</span></h2>
                                <p class="bd-section-paragraph has-border-sec">Education is one of the most essential and
                                    valuable assets that an individual can possess, It plays a pivotal role in shaping</p>
                            </div>
                            <div class="bd-about-feature-list">
                                <div class="bd-about-feature-item">
                                    <div class="bd-about-feature-icon">
                                        <span><i class="icon-online-class"></i></span>
                                    </div>
                                    <div class="bd-about-feature-content">
                                        <h6 class="bd-about-feature-title">Flexible Classes</h6>
                                        <p class="bd-about-feature-desc">The Flexible Classes feature allows
                                            students to customize their learning schedule</p>
                                    </div>
                                </div>
                                <div class="bd-about-feature-item">
                                    <div class="bd-about-feature-icon">
                                        <span><i class="icon-expert-trainers"></i></span>
                                    </div>
                                    <div class="bd-about-feature-content">
                                        <h6 class="bd-about-feature-title">Expert Trainers</h6>
                                        <p class="bd-about-feature-desc">All trainers hold relevant
                                            certifications and advanced degrees, guaranteeing that you are learning
                                            from qualified experts</p>
                                    </div>
                                </div>
                                <div class="bd-about-feature-item">
                                    <div class="bd-about-feature-icon">
                                        <span><i class="icon-career-growth"></i></span>
                                    </div>
                                    <div class="bd-about-feature-content">
                                        <h6 class="bd-about-feature-title">Build Your Career</h6>
                                        <p class="bd-about-feature-desc">Prepare for job interviews with mock
                                            interview sessions, feedback, and tips on how to present yourself
                                            confidently</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bd-about-btn">
                                <a class="bd-btn btn-secondary-white" href="about-online-course.html">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



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
    </script>
</body>

</html>
