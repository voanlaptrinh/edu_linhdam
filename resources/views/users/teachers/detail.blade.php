@extends('users.index')
@section('content')
    <section class="bd-breadcrumb-area p-relative fix z-index-11">
        <div class="bd-breadcrumb-bg-two"
            data-background="{{asset('source/images/breadcrumb-bg-2.webp')}}"
            style="background-image: url(&quot;{{asset('source/images/breadcrumb-bg-2.webp')}}&quot;);">
        </div>
        <div class="bd-breadcrumb-wrapper p-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bd-breadcrumb style-two d-flex-center">
                            <div class="bd-breadcrumb-content">
                                <h1 class="bd-breadcrumb-title">Giáo viên</h1>
                                <div class="bd-breadcrumb-list">
                                    <span><i class="fas fa-home"></i> <a
                                            href="{{route('home')}}">{{ get_config()->title }}</a></span>
                                    <span class="divider"><i class="fas fa-chevron-right"></i></span>
                                    <span class="active">Giáo viên</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bd-breadcrumb-shape">
                    <div class="shape-1"><img
                            src="{{asset('source/images/breadcrumb-shape-1.webp')}}"
                            alt="shape"></div>
                    <div class="shape-3"><img src="{{asset('source/images/bulb-shape.webp')}}"
                            alt="shape"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="bd-instructor-details-area section-space">
        <div class="container">
            <div class="row g-30">
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="bd-instructor-details-info sidebar-left sidebar-sticky">
                        <div class="bd-instructor-details-thumb mb-20">
                            <img src="{{ asset($teacher->avatar) }}" alt="{{ $teacher->name }}">
                        </div>
                        <div class="bd-instructor-info">
                            <h3 class="name ">{{ $teacher->name }}</h3>
                            <span class="designation  d-block">{{ $teacher->subject }}</span>

                            <div class="bd-instructor-info-list mb-20 text-start">
                                <ul class="m-0 p-0 ">
                                    <li><a href="mailto:{{ $teacher->email }}" class="text-dark"><i
                                                class="fas fa-envelope"></i> {{ $teacher->email }}</a></li>
                                    <li><a href="tel:{{ $teacher->phone }}" class="text-dark"><i class="fas fa-phone"></i>
                                            {{ $teacher->phone }}</a>
                                    </li>
                                    <li><a href="#" class="text-dark"><i class="fas fa-map-marker-alt"></i>
                                            {{ $teacher->address }}</a></li>
                                </ul>
                            </div>
                            <div class="theme-social ">
                                <ul class="social-icon-list">
                                    <li class=""><a href="#"><i class="fab fa-facebook "></i></a>
                                    </li>
                                    <li class=""><a href="#"><i class="fab fa-github "></i></a>
                                    </li>
                                    <li class=""><a href="#"><i class="fab fa-linkedin-in "></i></a></li>
                                    <li class=""><a href="#"><i class="fab fa-instagram "></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="bd-instructor-details-content">
                        <div class="bd-instructor-feature-box mb-30">
                            <h3 class="bd-instructor-details-title">Giới thiệu</h3>
                            <p class="bd-instructor-details-desc">{!! $teacher->bio !!}
                            </p>
                        </div>
                        <div class="bd-instructor-feature-box mb-30">
                            <h3 class="bd-instructor-details-title">Kỹ năng</h3>
                            <div class="bd-instructor-progress">
                                <div class="progress-wrapper">
                                    @php
                                        $skills = is_string($teacher->skills)
                                            ? json_decode($teacher->skills, true)
                                            : [];
                                    @endphp

                                    @foreach ($skills as $index => $skill)
                                        <div class="progress-item">
                                            <span class="title">{{ $skill['name'] }}</span>
                                            <div class="progress-counter">
                                                <div class="progress-bar">
                                                    <div class="progress bg-1" data-percentage="{{ $skill['level'] }}" style="width: {{ $skill['level'] }}%;">
                                                    </div>
                                                </div>
                                                <span class="percentage">{{ $skill['level'] }}%</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
