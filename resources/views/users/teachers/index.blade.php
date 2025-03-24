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
                                            href="{{ route('home') }}">{{ get_config()->title }}</a></span>
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
    <section class="bd-elements-instructor section-space-bottom">
        <div class="container">
            @if ($teachers->isEmpty())
            <div class="text-center pt-4">Danh sách giáo viên trống...</div>
            @else
                <div class="row gy-30 pt-5">
                    @foreach ($teachers as $teacher)
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="bd-instructor-wrapper style-four">
                                <div class="bd-instructor-item">
                                    <div class="bd-instructor-thumb-wrapper">
                                        <div class="bd-instructor-thumb">
                                            <a href="#"><img src="{{ asset($teacher->avatar) }}" class="imgea-teacher"
                                                    alt="image"></a>
                                        </div>

                                    </div>
                                    <div class="bd-instructor-info mt-15">
                                        <h6 class="name underline"><a
                                                href="{{ route('teachers.detail.home', ['alias' => $teacher->alias]) }}">{{ $teacher->name }}</a>
                                        </h6>
                                        <span>{{ $teacher->subject }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="bd-instructor-wrapper style-four">
                                <div class="bd-instructor-item">
                                    <div class="bd-instructor-thumb-wrapper">
                                        <div class="bd-instructor-thumb">
                                            <a href="#"><img
                                                    src="https://html.topylo.com/istudy-prv/assets/images/instructor/instructor-thumb-18.webp"
                                                    alt="image"></a>
                                        </div>

                                    </div>
                                    <div class="bd-instructor-info mt-15">
                                        <h6 class="name underline"><a href="instructor-details.html">Dr. John Smith</a></h6>
                                        <span>Math Instructor</span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    @endforeach


                </div>
            @endif

        </div>
    </section>
@endsection
