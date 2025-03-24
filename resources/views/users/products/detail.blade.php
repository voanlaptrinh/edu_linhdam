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
                                <h1 class="bd-breadcrumb-title">Giới thiệu chi tiết sách</h1>
                                <div class="bd-breadcrumb-list">
                                    <span><i class="fas fa-home"></i> <a
                                            href="{{ route('home') }}">{{ get_config()->title }}</a></span>
                                    <span class="divider"><i class="fas fa-chevron-right"></i></span>
                                    <span class="active">Giới thiệu chi tiết sách</span>
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
    <section class="bd-shop-details-area section-space">
        <div class="container">
            <div class="row gy-30 justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6 col-8">
                    <div class="bd-product-details-thumb sidebar-sticky">
                        <img src="https://html.topylo.com/istudy-prv/assets/images/book/book-cover-2.webp" alt="hardcover">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="bd-product-details-wrapper">
                        <h2 class="bd-product-details-title small mb-15">{{$product->title}}</h2>
                        <h6 class="bd-book-author mb-1"><span>Tác giả:</span> {{$product->author}}</h6>
                        <p class="m-0 p-0"><span>Ngôn ngữ sách:</span> {{$product->language}}</p>
                        <p class="m-0 p-0">Ngày phát hành: {{$product->release_date}}</p>
                      
                        <div class="bd-book-format mb-30">
                            <span class="bd-book-format-label">Tag:</span>
                            <div class="bd-book-format-wrap">
                                @if (!empty($product->tags))
                                @foreach ($product->tags as $item)
                                <div class="bd-book-format-option selected">
                                    <span class="bd-book-format-type">{{ $item['value'] }}</span>
                                    
                                </div>
                               
                                @endforeach
                            @else
                                <span class="text-muted">Không có tag</span>
                            @endif
                             
                              
                                
                            </div>
                        </div>
                        <div class="bd-product-details-action d-flex-items gap-15 mb-30">
                            <a class="bd-btn btn-primary" href="tel:{{get_config()->phone}}"> <span class="left-icon"><i class="fa-light fa-bag-shopping"></i></span>Liên hệ: {{get_config()->phone}}</a>
                           
                        </div>
                        
                        <div class="bd-product-details-content mb-30">
                            <h3 class="bd-product-details-title medium mb-15">Mô tả ngắn</h3>
                            <p class="bd-product-desc">{!!$product->description!!}</p>
                          
                        </div>
                       
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
