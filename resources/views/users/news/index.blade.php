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
                                <h1 class="bd-breadcrumb-title">Tin tức</h1>
                                <div class="bd-breadcrumb-list">
                                    <span><i class="fas fa-home"></i> <a
                                            href="{{ route('home') }}">{{ get_config()->title }}</a></span>
                                    <span class="divider"><i class="fas fa-chevron-right"></i></span>
                                    <span class="active">Tin tức</span>
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
    <section class="bd-elements-blog section-space-bottom">
        <div class="container">

            <div class="row gy-30 pt-5">
                @foreach ($news as $itemNews)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <article class="bd-blog-wrapper style-eight">
                            <div class="bd-blog-thumb">
                                <a href="{{route('news.detail.home', ['alias'=>$itemNews->alias])}}">
                                    <img src="{{ asset($itemNews->image ?: '/source/images/blog-thumb-20.webp') }}"
                                        alt="blog image">
                                </a>
                            </div>
                            <div class="bd-blog-content">
                                <div class="date">
                                    <span>
                                        {{ \Carbon\Carbon::parse($itemNews->created_at)->locale('vi')->translatedFormat('d F Y') }}</span>
                                </div>
                                <div class="bd-blog-meta-list mb-15">
                                   
                                    <div class="bd-blog-meta-item">
                                        <span class="meta-icon">
                                            <i class="fa-sharp fa-light fa-calendar-days"></i>
                                        </span>
                                        <span class="meta-text">
                                            <a href="{{route('news.detail.home', ['alias'=>$itemNews->alias])}}">
                                                {{ \Carbon\Carbon::parse($itemNews->created_at)->locale('vi')->translatedFormat('d F Y') }}
                                            </a>
                                        </span>


                                    </div>
                                </div>
                                <h4 class="bd-blog-title underline"><a href="{{route('news.detail.home', ['alias'=>$itemNews->alias])}}">{{ $itemNews->name }}</a>
                                </h4>
                                <p class="des-news">{{$itemNews->description}}</p>
                            </div>
                        </article>
                    </div>
                @endforeach
                <div id="pagination-wrapper" class="d-flex justify-content-end p-3">
                    {{ $news->appends(request()->query())->links('pagination::bootstrap-4') }}
                </div>

            </div>
        </div>
    </section>
@endsection
