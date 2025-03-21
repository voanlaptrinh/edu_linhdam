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
                        <a class="nav-link" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
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
                        <a class="nav-link" href="#">Giảng viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cảm nhận</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu sách</a>
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



    <div class="swiper mySwiper bannaer_slider">
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

    <section class="bd-course-area section-space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="bd-section-title-wrapper section-title-space text-center">
                        <span class="bd-section-subtitle">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Các khóa học thịnh hành</font>
                            </font>
                        </span>
                        <h2 class="bd-section-title">
                            <span class="down-mark-line">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Khóa học</font>
                                </font>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="bd-course-wrapper style-seven shadow">
                        <a href="courses-details.html"
                            class="bd-course-thumb-wrapper bd-course-thumb-style p-relative">

                            <div class="bd-course-thumb-bg bg-1"><img
                                    src="https://html.topylo.com/istudy-prv/assets/images/course/course-bg-1.webp"
                                    alt="hình ảnh"></div>
                            <div class="bd-course-thumb-instructor center"><img
                                    src="https://images2.thanhnien.vn/zoom/686_429/Uploaded/nthanhluan/2022_04_15/dangky-2362.jpeg"
                                    alt="người hướng dẫn"></div>

                        </a>
                        <div class="bd-course-content">

                            <h5 class="bd-course-title underline mb-10"><a href="courses-details.html"
                                    class="bd-course-title-a">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Làm chủ Khoa học dữ liệu từ đầu</font>
                                    </font>
                                </a></h5>
                            <p class="bd-course-description mb-10">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Phát triển sự nghiệp của bạn với các kỹ năng
                                        khoa học dữ liệu đang có nhu cầu cao trong nhiều ngành.</font>
                                </font>
                            </p>

                        </div>
                        <div class="bd-course-info">
                            <div class="bd-course-info-wrapper">

                                <h5 class="bd-course-title underline mb-10"><a href="courses-details.html"
                                        class="bd-course-title-a">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Kỹ thuật khoa học dữ liệu nâng cao
                                            </font>
                                        </font>
                                    </a></h5>

                                <p>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Đi sâu vào các thuật toán học máy, trực
                                            quan hóa dữ liệu và phân tích thống kê.ádddddddddddddddđqưeqưeqưeqưeqưeqưe
                                        </font>
                                    </font>
                                </p>
                                <div class="bd-course-info-list">


                                    <div class="bd-course-action-btn d-flex align-items-center gap-15">
                                        <a href="courses-details.html" class="bd-btn btn-outline-border-primary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Xem chi tiết</font>
                                            </font>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="bd-course-wrapper style-seven shadow">
                        <a href="courses-details.html"
                            class="bd-course-thumb-wrapper bd-course-thumb-style p-relative">

                            <div class="bd-course-thumb-bg bg-1"><img
                                    src="https://html.topylo.com/istudy-prv/assets/images/course/course-bg-1.webp"
                                    alt="hình ảnh"></div>
                            <div class="bd-course-thumb-instructor center"><img
                                    src="https://images2.thanhnien.vn/zoom/686_429/Uploaded/nthanhluan/2022_04_15/dangky-2362.jpeg"
                                    alt="người hướng dẫn"></div>

                        </a>
                        <div class="bd-course-content">

                            <h5 class="bd-course-title underline mb-10"><a href="courses-details.html"
                                    class="bd-course-title-a">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Làm chủ Khoa học dữ liệu từ đầu</font>
                                    </font>
                                </a></h5>
                            <p class="bd-course-description mb-10">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Phát triển sự nghiệp của bạn với các kỹ năng
                                        khoa học dữ liệu đang có nhu cầu cao trong nhiều ngành.</font>
                                </font>
                            </p>

                        </div>
                        <div class="bd-course-info">
                            <div class="bd-course-info-wrapper">

                                <h5 class="bd-course-title underline mb-10"><a href="courses-details.html"
                                        class="bd-course-title-a">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Kỹ thuật khoa học dữ liệu nâng cao
                                            </font>
                                        </font>
                                    </a></h5>

                                <p>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Đi sâu vào các thuật toán học máy, trực
                                            quan hóa dữ liệu và phân tích thống kê.ádddddddddddddddđqưeqưeqưeqưeqưeqưe
                                        </font>
                                    </font>
                                </p>
                                <div class="bd-course-info-list">


                                    <div class="bd-course-action-btn d-flex align-items-center gap-15">
                                        <a href="courses-details.html" class="bd-btn btn-outline-border-primary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Xem chi tiết</font>
                                            </font>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="bd-course-wrapper style-seven shadow">
                        <a href="courses-details.html"
                            class="bd-course-thumb-wrapper bd-course-thumb-style p-relative">

                            <div class="bd-course-thumb-bg bg-1"><img
                                    src="https://html.topylo.com/istudy-prv/assets/images/course/course-bg-1.webp"
                                    alt="hình ảnh"></div>
                            <div class="bd-course-thumb-instructor center"><img
                                    src="https://images2.thanhnien.vn/zoom/686_429/Uploaded/nthanhluan/2022_04_15/dangky-2362.jpeg"
                                    alt="người hướng dẫn"></div>

                        </a>
                        <div class="bd-course-content">

                            <h5 class="bd-course-title underline mb-10"><a href="courses-details.html"
                                    class="bd-course-title-a">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Làm chủ Khoa học dữ liệu từ đầu</font>
                                    </font>
                                </a></h5>
                            <p class="bd-course-description mb-10">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Phát triển sự nghiệp của bạn với các kỹ năng
                                        khoa học dữ liệu đang có nhu cầu cao trong nhiều ngành.</font>
                                </font>
                            </p>

                        </div>
                        <div class="bd-course-info">
                            <div class="bd-course-info-wrapper">

                                <h5 class="bd-course-title underline mb-10"><a href="courses-details.html"
                                        class="bd-course-title-a">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Kỹ thuật khoa học dữ liệu nâng cao
                                            </font>
                                        </font>
                                    </a></h5>

                                <p>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Đi sâu vào các thuật toán học máy, trực
                                            quan hóa dữ liệu và phân tích thống kê.ádddddddddddddddđqưeqưeqưeqưeqưeqưe
                                        </font>
                                    </font>
                                </p>
                                <div class="bd-course-info-list">


                                    <div class="bd-course-action-btn d-flex align-items-center gap-15">
                                        <a href="courses-details.html" class="bd-btn btn-outline-border-primary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Xem chi tiết</font>
                                            </font>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="bd-course-wrapper style-seven shadow">
                        <a href="courses-details.html"
                            class="bd-course-thumb-wrapper bd-course-thumb-style p-relative">

                            <div class="bd-course-thumb-bg bg-1"><img
                                    src="https://html.topylo.com/istudy-prv/assets/images/course/course-bg-1.webp"
                                    alt="hình ảnh"></div>
                            <div class="bd-course-thumb-instructor center"><img
                                    src="https://images2.thanhnien.vn/zoom/686_429/Uploaded/nthanhluan/2022_04_15/dangky-2362.jpeg"
                                    alt="người hướng dẫn"></div>

                        </a>
                        <div class="bd-course-content">

                            <h5 class="bd-course-title underline mb-10"><a href="courses-details.html"
                                    class="bd-course-title-a">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Làm chủ Khoa học dữ liệu từ đầu</font>
                                    </font>
                                </a></h5>
                            <p class="bd-course-description mb-10">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Phát triển sự nghiệp của bạn với các kỹ năng
                                        khoa học dữ liệu đang có nhu cầu cao trong nhiều ngành.</font>
                                </font>
                            </p>

                        </div>
                        <div class="bd-course-info">
                            <div class="bd-course-info-wrapper">

                                <h5 class="bd-course-title underline mb-10"><a href="courses-details.html"
                                        class="bd-course-title-a">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Kỹ thuật khoa học dữ liệu nâng cao
                                            </font>
                                        </font>
                                    </a></h5>

                                <p>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Đi sâu vào các thuật toán học máy, trực
                                            quan hóa dữ liệu và phân tích thống kê.ádddddddddddddddđqưeqưeqưeqưeqưeqưe
                                        </font>
                                    </font>
                                </p>
                                <div class="bd-course-info-list">


                                    <div class="bd-course-action-btn d-flex align-items-center gap-15">
                                        <a href="courses-details.html" class="bd-btn btn-outline-border-primary">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Xem chi tiết</font>
                                            </font>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="bd-course-btn d-flex-center mt-50">
                    <a class="bd-btn btn-outline-border-primary" href="courses-grid.html">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Xem thêm các khóa học</font>
                        </font>
                    </a>
                </div>
            </div>
    </section>
    <section class="bd-live-class-area theme-bg-05 section-space position-relative" style="background: #c9dbbda6;">
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

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="bd-section-title-wrapper section-title-space text-center">
                <span class="bd-section-subtitle">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Lời chứng nhận</font>
                    </font>
                </span>
                <h2 class="bd-section-title">
                    <span class="down-mark-line">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Học viên nói rằng</font>
                        </font>
                    </span>
                </h2>
            </div>
            <div>
                <div class="bd-testimonial-item p-relative">

                    <div class="bd-testimonial-quotes-wrap" style="position: relative;">
                        <div class="bd-testimonial-quotes">
                            <img src="https://html.topylo.com/istudy-prv/assets/images/shape/testimonial-quotes-2.webp"
                                alt="shape">
                        </div>
                        <div class="bd-testimonial-meta-thumb-1"><img
                                src="https://html.topylo.com/istudy-prv/assets/images/testimonial/testimonial-sm-thumb-1.webp"
                                alt="image">
                        </div>
                        <div class="bd-testimonial-meta-thumb-2"><img
                                src="https://html.topylo.com/istudy-prv/assets/images/testimonial/testimonial-sm-thumb-2.webp"
                                alt="image">
                        </div>
                        <div class="bd-testimonial-meta-thumb-3"><img
                                src="https://html.topylo.com/istudy-prv/assets/images/testimonial/testimonial-sm-thumb-3.webp"
                                alt="image">
                        </div>
                    </div>

                    <!-- Swiper Container -->
                    <div class="swiper mySwiper2 testimonialActiveFour">
                        <div class="swiper-wrapper ">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="bd-testimonial-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="description">“My time at iStudy University has been
                                        life-changing. The courses are well-structured, and the resources
                                        provided are top-notch. I’ve gained both practical knowledge and
                                        lifelong friendships here.”</p>
                                    <div class="bd-testimonial-meta">
                                        <div class="author">
                                            <div class="thumb">
                                                <img src="https://html.topylo.com/istudy-prv/assets/images/avatar/avatar2.webp"
                                                    alt="student">
                                            </div>
                                            <div class="details">
                                                <h6 class="name">David Chowdhury</h6>
                                                <p class="designation">Business Administration Student</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bd-testimonial-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="description">“My time at iStudy University has been
                                        life-changing. The courses are well-structured, and the resources
                                        provided are top-notch. I’ve gained both practical knowledge and
                                        lifelong friendships here.”</p>
                                    <div class="bd-testimonial-meta">
                                        <div class="author">
                                            <div class="thumb">
                                                <img src="https://html.topylo.com/istudy-prv/assets/images/avatar/avatar2.webp"
                                                    alt="student">
                                            </div>
                                            <div class="details">
                                                <h6 class="name">David Chowdhury</h6>
                                                <p class="designation">Business Administration Student</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bd-testimonial-content">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="description">“My time at iStudy University has been
                                        life-changing. The courses are well-structured, and the resources
                                        provided are top-notch. I’ve gained both practical knowledge and
                                        lifelong friendships here.”</p>
                                    <div class="bd-testimonial-meta">
                                        <div class="author">
                                            <div class="thumb">
                                                <img src="https://html.topylo.com/istudy-prv/assets/images/avatar/avatar2.webp"
                                                    alt="student">
                                            </div>
                                            <div class="details">
                                                <h6 class="name">David Chowdhury</h6>
                                                <p class="designation">Business Administration Student</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>


                </div>
            </div>

        </div>
    </section>
    <section class="bd-instructor-area section-space theme-bg p-relative z-index-11">
        <div class="bd-kinder-bg"
            data-background="https://html.topylo.com/istudy-prv/assets/images/testimonial/testimonial-shape-bg.webp"
            style="background-image: url(&quot;https://html.topylo.com/istudy-prv/assets/images/testimonial/testimonial-shape-bg.webp&quot;);">
        </div>
        <div class="bd-kinder-bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="bd-section-title-wrapper section-title-space text-center">
                        <span class="bd-section-subtitle secondary" style="color:#FFBB2A ">Instructor</span>
                        <h2 class="bd-section-title white-text">Our Experience Teacher </h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="bd-instructor-wrapper style-nine light-color">
                        <div class="bd-instructor-item">
                            <div class="bd-instructor-thumb-wrap">
                                <div class="bd-instructor-thumb">
                                    <a href="instructor-details.html"><img
                                            src="https://html.topylo.com/istudy-prv/assets/images/instructor/instructor-thumb-05.webp"
                                            alt="image" class="img-accoute"></a>
                                </div>
                                <div class="bd-instructor-social theme-social has-white circle text-center">
                                    <ul class="social-icon-list">
                                        <li class="bd-icon-1"><a href="#"><i class="fab fa-facebook "></i></a>
                                        </li>
                                        <li class="bd-icon-2"><a href="#"><i class="fab fa-github "></i></a>
                                        </li>
                                        <li class="bd-icon-3"><a href="#"><i
                                                    class="fab fa-linkedin-in "></i></a></li>
                                        <li class="bd-icon-4"><a href="#"><i class="fab fa-instagram "></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bd-instructor-info">
                                <h6 class="name underline-two"><a class="text-black"
                                        href="instructor-details.html">Ethan K. Smith</a>
                                </h6>
                                <span>Child Development Specialist</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bd-cta-area section-space">
        <div class="container">
            <div class="bd-newsletter-wrapper style-three">
                <div class="bd-newsletter-bg"
                    data-background="https://html.topylo.com/istudy-prv/assets/images/bg/newsletter-bg-01.webp"
                    style="background-image: url(&quot;https://html.topylo.com/istudy-prv/assets/images/bg/newsletter-bg-01.webp&quot;);">
                </div>
                <div class="row align-items-center justify-content-between g-30">
                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-12 d-none d-lg-block">
                        <div class="bd-newsletter-thumb-wrapper p-relative">
                            <div class="thumb">
                                <img src="https://html.topylo.com/istudy-prv/assets/images/newsletter/newsletter-thumb-02.webp"
                                    alt="image">
                            </div>
                            <div class="bd-newsletter-badge">
                                <div class="bd-newsletter-badge-thumb">
                                    <img src="https://html.topylo.com/istudy-prv/assets/images/icon/logo.webp"
                                        alt="image">
                                </div>
                                <div class="bd-newsletter-badge-text">
                                    <span>Xin chào! <br>
                                        Chào mừng đến với {{ asset(get_config()->title) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-6 col-lg-6 col-12">
                        <div class="newsletter-content">
                            <div class="bd-section-title-wrapper mb-30">
                                <h2 class="bd-section-title text-white mb-0">Subscribe to Our Newsletter!</h2>
                            </div>
                            <div class="bd-newsletter-form">
                                <form action="#">
                                    <div class="bd-newsletter-input">
                                        <input type="text" placeholder="Your email">
                                        <button type="submit" class="bd-btn btn-primary radius-6">Subscribe
                                            Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="bd-blog-area section-space-bottom">
        <div class="container">
            <div class="row">
                <div class="bd-section-title-wrapper section-title-space text-center">
                    <span class="bd-section-subtitle">latest news</span>
                    <h2 class="bd-section-title">Our Latest Articles</h2>
                </div>
            </div>
            <div class="swiper mySwiperNews">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <article class="bd-blog-wrapper style-eight">
                            <div class="bd-blog-thumb">
                                <a href="blog-details.html">
                                    <img src="https://html.topylo.com/istudy-prv/assets/images/blog/blog-thumb-10.webp"
                                        alt="image">
                                </a>
                            </div>
                            <div class="bd-blog-content">
                                <div class="date">
                                    <span>10 Aug 2024</span>
                                </div>
                                <h5 class="bd-blog-title underline"><a href="blog-details.html">Creativity Work Art
                                        Sparks Growth</a></h5>
                                <p>In the process of creating art, children exercise their imagination...</p>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="bd-blog-wrapper style-eight">
                            <div class="bd-blog-thumb">
                                <a href="blog-details.html">
                                    <img src="https://html.topylo.com/istudy-prv/assets/images/blog/blog-thumb-10.webp"
                                        alt="image">
                                </a>
                            </div>
                            <div class="bd-blog-content">
                                <div class="date">
                                    <span>10 Aug 2024</span>
                                </div>
                                <h5 class="bd-blog-title underline"><a href="blog-details.html">Creativity Work Art
                                        Sparks Growth</a></h5>
                                <p>In the process of creating art, children exercise their imagination...</p>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="bd-blog-wrapper style-eight">
                            <div class="bd-blog-thumb">
                                <a href="blog-details.html">
                                    <img src="https://html.topylo.com/istudy-prv/assets/images/blog/blog-thumb-10.webp"
                                        alt="image">
                                </a>
                            </div>
                            <div class="bd-blog-content">
                                <div class="date">
                                    <span>10 Aug 2024</span>
                                </div>
                                <h5 class="bd-blog-title underline"><a href="blog-details.html">Creativity Work Art
                                        Sparks Growth</a></h5>
                                <p>In the process of creating art, children exercise their imagination...</p>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="bd-blog-wrapper style-eight">
                            <div class="bd-blog-thumb">
                                <a href="blog-details.html">
                                    <img src="https://html.topylo.com/istudy-prv/assets/images/blog/blog-thumb-10.webp"
                                        alt="image">
                                </a>
                            </div>
                            <div class="bd-blog-content">
                                <div class="date">
                                    <span>10 Aug 2024</span>
                                </div>
                                <h5 class="bd-blog-title underline"><a href="blog-details.html">Creativity Work Art
                                        Sparks Growth</a></h5>
                                <p>In the process of creating art, children exercise their imagination...</p>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="bd-blog-wrapper style-eight">
                            <div class="bd-blog-thumb">
                                <a href="blog-details.html">
                                    <img src="https://html.topylo.com/istudy-prv/assets/images/blog/blog-thumb-10.webp"
                                        alt="image">
                                </a>
                            </div>
                            <div class="bd-blog-content">
                                <div class="date">
                                    <span>10 Aug 2024</span>
                                </div>
                                <h5 class="bd-blog-title underline"><a href="blog-details.html">Creativity Work Art
                                        Sparks Growth</a></h5>
                                <p>In the process of creating art, children exercise their imagination...</p>
                            </div>
                        </article>
                    </div>

                   
                </div>
                <!-- Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>
    </section>



    <footer class="fix">
        <div class="bd-footer-area section-space primary-bg theme-bg-05">
            <div class="container">
                <div class="row gy-30 justify-content-between">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-8 col-sm-12">
                        <div class="bd-footer-widget footer-1-col-1">
                            <div class="bd-footer-widget-content">
                                <div class="bd-footer-widget-logo">
                                    <a href="index.html">
                                        <img src="{{ asset(get_config()->logo) }}" alt="image" width="80" height="80">
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
                                    <li class="underline"><a href="instructor-details.html">Instructor Details</a></li>
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
                                            <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
                                            </li>
                                            <li><a class="twitter" href="#"><i class="fab fa-github"></i></a>
                                            </li>
                                            <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
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
