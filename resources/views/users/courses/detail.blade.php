@extends('users.index')
@section('content')
    <section class="bd-breadcrumb-area p-relative fix z-index-11">
        <div class="bd-breadcrumb-bg-two" data-background="{{ asset('source/images/breadcrumb-bg-2.webp') }}"
            style="background-image: url(&quot;{{ asset('source/images/breadcrumb-bg-2.webp') }}&quot;);">
        </div>
        <div class="bd-breadcrumb-wrapper p-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bd-breadcrumb style-two d-flex-center">
                            <div class="bd-breadcrumb-content">
                                <h1 class="bd-breadcrumb-title">{{ $news->name }}</h1>
                                <div class="bd-breadcrumb-list">
                                    <span><i class="fas fa-home"></i> <a
                                            href="{{ route('home') }}">{{ get_config()->title }}</a></span>
                                    <span class="divider"><i class="fas fa-chevron-right"></i></span>
                                    <span class="active">Tin môn học</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bd-breadcrumb-shape">
                    <div class="shape-1"><img src="{{ asset('source/images/breadcrumb-shape-1.webp') }}" alt="shape">
                    </div>
                    <div class="shape-3"><img src="{{ asset('source/images/bulb-shape.webp') }}" alt="shape"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="bd-postbox-area section-space">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-xxl-8 col-lg-8">
                    <div class="bd-postbox-wrapper">

                        {!! $news->content !!}

                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-xxl-4 col-lg-4">
                    <div class="bd-blog-sidebar sidebar-right sidebar-sticky">

                        <div class="bd-blog-widget widget-latest-posts">
                            <h5 class="bd-widget-title mb-20">Bài viết mới nhất</h5>
                            <div class="bd-widget-posts">
                                @foreach ($newsLatest as $newsLatest)
                                    <div class="bd-recent-post-item">
                                        <div class="bd-recent-post-thumb">
                                            <a href="{{ route('news.detail.home', ['alias' => $newsLatest->alias]) }}"><img
                                                    src="{{ asset($newsLatest->image ?: '/source/images/home-program-1.webp') }}"
                                                    alt="image"></a>
                                        </div>
                                        <div class="bd-recent-post-content">
                                            <div class="bd-recent-post-meta">
                                                <span class="icon"><i class="fa-light fa-calendar-days"></i></span>
                                                <span class="date">
                                                    {{ \Carbon\Carbon::parse($newsLatest->created_at)->locale('vi')->translatedFormat('d F Y') }}</span>
                                            </div>
                                            <h6 class="bd-recent-post-title underline"><a
                                                    href="{{ route('news.detail.home', ['alias' => $newsLatest->alias]) }}"
                                                    class="text-dark">{{ $newsLatest->name }}</a>
                                            </h6>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                        <div class="bd-blog-widget widget_categories">
                            <h5 class="bd-widget-title mb-20">Môn học</h5>
                            <div class="bd-widget-list">
                                <ul>
                                    @foreach ($courses as $itemCource)
                                        <li class="underline ul-title"><a
                                                href="{{ route('courses.detail.home', ['alias' => $itemCource->alias]) }}">{{ $itemCource->name }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
