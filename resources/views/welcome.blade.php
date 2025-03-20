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

    <section class="bd-event-area section-space p-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="bd-section-title-wrapper section-title-space text-center">
                        <span class="bd-section-subtitle">Bản tin</span>
                        <h2 class="bd-section-title">Khóa học</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30 justify-content-center">
                <div class="col-xl-10 col-lg-12">
                    <div class="bd-event-wrapper style-three">
                        <div class="bd-event-item">
                            <div class="bd-event-thumb">
                                <a href="event-details.html">
                                    <img src="https://html.topylo.com/istudy-prv/assets/images/event/event-thumb-07.webp" alt="image" style="width: 100%">
                                </a>
                            </div>
                            <div class="bd-event-content">
                                <div class="bd-content-inner">
                                    <h5 class="bd-event-title underline mb-20">
                                        <a href="event-details.html">Celebrating Creativity The Tiny Tot Talent
                                            Showcase Extravaganza</a>
                                    </h5>
                                    <div class="bd-event-meta">
                                        <div class="bd-event-meta-list">
                                            <span><i class="fa-regular fa-calendar-days"></i> 15 Aug 2024</span>
                                        </div>
                                        <div class="bd-event-meta-list">
                                            <span><i class="fa-regular fa-clock"></i> 10:00am - 12:00pm</span>
                                        </div>
                                        <div class="bd-event-meta-list">
                                            <span><i class="fa-regular fa-location-dot"></i> Beilly Tower</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="bd-event-btn">
                                    <a class="bd-btn btn-outline-primary" href="event-details.html">View Details</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
              

            </div>
        </div>
        <div class="bd-event-shape">
            <div class="shape-1"><img src="https://html.topylo.com/istudy-prv/assets/images/shape/land2.png"
                    alt="shape" class="art-shape"></div>
            <div class="shape-2"><img src="https://html.topylo.com/istudy-prv/assets/images/shape/kides-1.png"
                    alt="shape"></div>
            <div class="shape-3"><img src="https://html.topylo.com/istudy-prv/assets/images/shape/kides-2.png"
                    alt="shape"></div>
        </div>
    </section>
    <section class="bd-live-class-area theme-bg-05 section-space position-relative">
        <div class="bd-live-class-shape-wrapper d-none d-lg-block">
            <div class="bd-live-class-shape-01 d-none d-xxl-block">
                <img src="https://html.topylo.com/istudy-prv/assets/images/shape/art-shape.webp" alt="image"
                    class="art-shape">
            </div>
            <div class="bd-live-class-shape-02">
                <img src="https://html.topylo.com/istudy-prv/assets/images/shape/bulb-shape.webp" alt="image"
                    class="art-shape">
            </div>
            <div class="bd-live-class-shape-03">
                <img src="https://html.topylo.com/istudy-prv/assets/images/shape/book-shape.webp" alt="image"
                    class="art-shape">
            </div>
        </div>
        <div class="container">
            <div class="row g-30 align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="bd-live-class-wrapper style-one">
                        <div class="bd-live-class-section-wrapper">
                            <div class="bd-section-title-wrapper">
                                <span class="bd-section-subtitle">Live &amp; Learn</span>
                                <h2 class="bd-section-title mb-20">Join Our <span
                                        class="has-live-text">live</span><br>Learning Live Class</h2>
                                <p class="bd-section-paragraph">A dynamic live session where kindergarten students
                                    can participate in a structured learning environment. The class covers essential
                                    topics such as language, math, and creative arts, encouraging active
                                    participation and hands-on learning</p>
                            </div>
                            <div class="bd-live-class-btn">
                                <a class="btn btn-success" href="webinar-details.html">Join Live Class</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="bd-live-class-thumb-wrapper style-one">
                        <div class="bd-live-class-thumb">
                            <img src="https://html.topylo.com/istudy-prv/assets/images/live-class/live-class-thumb-01.webp"
                                alt="image">
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
