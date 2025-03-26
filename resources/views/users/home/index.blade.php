
@extends('users.index')
@section('content')

<div class="swiper mySwiper bannaer_slider">
    <div class="swiper-wrapper">
        @foreach ($sliders as $slider)
        <div class="swiper-slide"><img
            src="{{asset($slider->image)}}"
            alt="{{$slider->name}}"></div>
   
        @endforeach
       
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
            @foreach ($courses as $course)
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="bd-course-wrapper style-seven shadow">
                    <a href="{{ route('courses.detail.home', ['alias' => $course->alias]) }}"
                        class="bd-course-thumb-wrapper bd-course-thumb-style p-relative">

                        <div class="bd-course-thumb-bg bg-1"><img
                                src="{{asset('/source/images/course-bg-1.webp')}}"
                                alt="hình ảnh"></div>
                        <div class="bd-course-thumb-instructor center"><img
                                src="{{ asset($course->image ?: '/source/images/dangky-2362.webp') }}"
                                alt="người hướng dẫn"></div>

                    </a>
                    <div class="bd-course-content">

                        <h5 class="bd-course-title underline mb-10"><a href="{{ route('courses.detail.home', ['alias' => $course->alias]) }}"
                                class="bd-course-title-a">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">{{$course->name}}</font>
                                </font>
                            </a></h5>
                        <p class="bd-course-description mb-10">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$course->description}}</font>
                            </font>
                        </p>

                    </div>
                    <div class="bd-course-info">
                        <div class="bd-course-info-wrapper">

                            <h5 class="bd-course-title underline mb-10"><a href="{{ route('courses.detail.home', ['alias' => $course->alias]) }}"
                                    class="bd-course-title-a">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">{{$course->name}}
                                        </font>
                                    </font>
                                </a></h5>

                            <p>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">{{$course->description}}
                                    </font>
                                </font>
                            </p>
                            <div class="bd-course-info-list">


                                <div class="bd-course-action-btn d-flex align-items-center gap-15">
                                    <a href="{{ route('courses.detail.home', ['alias' => $course->alias]) }}" class="bd-btn btn-outline-border-primary">
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
            @endforeach
           
        
            <div class="bd-course-btn d-flex-center mt-50">
                <a class="bd-btn btn-outline-border-primary" href="{{route('courses.home')}}">
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
            <img src="{{asset('source/images/art-shape.webp')}}" alt="image"
                class="art-shape">
        </div>
        <div class="bd-live-class-shape-02">
            <img src="{{asset('source/images/bulb-shape.webp')}}" alt="image"
                class="art-shape">
        </div>
        <div class="bd-live-class-shape-03">
            <img src="{{asset('source/images/book-shape.webp')}}" alt="image"
                class="art-shape">
        </div>
    </div>
    <div class="container">
        <div class="row g-30 align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="bd-live-class-wrapper style-one">
                    <div class="bd-live-class-section-wrapper">
                        <div class="bd-section-title-wrapper">
                            
                            <h2 class="bd-section-title mb-20">{{$infomation->name}}</h2>
                            <p class="bd-section-paragraph">{{$infomation->description}}</p>
                        </div>
                        <div class="bd-live-class-btn">
                            <a class="btn btn-success" href="{{route('introduction.home')}}">Giới thiệu về chúng tôi</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="bd-live-class-thumb-wrapper style-one">
                    <div class="bd-live-class-thumb">
                        <img src="{{ asset($infomation->image ?: '/source/images/live-class-thumb-01.webp') }}"
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
        data-background="{{asset('source/images/testimonial-shape-bg.webp')}}"
        style="background-image: url(&quot;{{asset('source/images/testimonial-shape-bg.webp')}}&quot;);">
    </div>
    <div class="bd-kinder-bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6">
                <div class="bd-section-title-wrapper section-title-space text-center">
                    <span class="bd-section-subtitle secondary" style="color:#FFBB2A ">Giáo viên</span>
                    <h2 class="bd-section-title white-text">Giáo viên kinh nghiệm của chúng tôi</h2>
                </div>
            </div>
        </div>
        <div class="row gy-30">
            @foreach ($teachers as $teacher)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="bd-instructor-wrapper style-nine light-color">
                    <div class="bd-instructor-item">
                        <div class="bd-instructor-thumb-wrap">
                            <div class="bd-instructor-thumb">
                                <a href="{{ route('teachers.detail.home', ['alias' => $teacher->alias]) }}"><img
                                        src="{{ asset($teacher->avatar ?: '/source/images/instructor-thumb-05.webp') }}"
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
                                    href="{{ route('teachers.detail.home', ['alias' => $teacher->alias]) }}">{{$teacher->name}}</a>
                            </h6>
                            <span>{{$teacher->subject}}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          

        </div>
    </div>
</section>

<section class="bd-cta-area section-space">
    <div class="container">
        <div class="bd-newsletter-wrapper style-three">
            <div class="bd-newsletter-bg"
                data-background="{{asset('source/images/newsletter-bg-01.webp')}}"
                style="background-image: url(&quot;{{asset('source/images/newsletter-bg-01.webp')}}&quot;);">
            </div>
            <div class="row align-items-center justify-content-between g-30">
                <div class="col-xxl-5 col-xl-6 col-lg-6 col-12 d-none d-lg-block">
                    <div class="bd-newsletter-thumb-wrapper p-relative">
                        <div class="thumb">
                            <img src="{{asset('source/images/newsletter-thumb-02.webp')}}"
                                alt="image">
                        </div>
                        <div class="bd-newsletter-badge">
                            <div class="bd-newsletter-badge-thumb">
                                <img src="{{asset('source/images/logo.webp')}}"
                                    alt="image">
                            </div>
                            <div class="bd-newsletter-badge-text">
                                <span>Xin chào! <br>
                                    Chào mừng đến với {{ get_config()->title }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-6 col-lg-6 col-12">
                    <div class="newsletter-content">
                        <div class="bd-section-title-wrapper mb-30">
                            <h2 class="bd-section-title text-white mb-0">Đăng ký nhận bản tin của chúng tôi!</h2>
                        </div>
                        <div class="bd-newsletter-form">
                            <form action="{{ route('store.email.home') }}" id="contactForm" method="POST">
                                @csrf
                                <div class="bd-newsletter-input">
                                    <input type="email" placeholder="Email của bạn" name="email" value="{{old('email')}}">
                                    <button type="submit" class="bd-btn btn-primary radius-6">Đăng ký ngay</button>
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
                <span class="bd-section-subtitle">Tin tức mới nhất</span>
                <h2 class="bd-section-title">Bài viết mới nhất của chúng tôi</h2>
            </div>
        </div>
        <div class="swiper mySwiperNews">
            <div class="swiper-wrapper">
                @foreach ($news as $itemNews)
                    
                <div class="swiper-slide">
                    <article class="bd-blog-wrapper style-eight">
                        <div class="bd-blog-thumb">
                            <a href="{{route('news.detail.home', ['alias'=>$itemNews->alias])}}">
                                <img src="{{ asset($itemNews->image ?: '/source/images/blog-thumb-20.webp') }}"
                                    alt="image">
                            </a>
                        </div>
                        <div class="bd-blog-content">
                            <div class="date">
                                <span> {{ \Carbon\Carbon::parse($itemNews->created_at)->locale('vi')->translatedFormat('d F Y') }}</span>
                            </div>
                            <h5 class="bd-blog-title underline"><a href="{{route('news.detail.home', ['alias'=>$itemNews->alias])}}">{{ $itemNews->name }}</a></h5>
                            <p class="des-news">{{$itemNews->description}}</p>
                        </div>
                    </article>
                </div>
                @endforeach
               

               
            </div>
            <!-- Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>
</section>
@endsection