@extends('users.index')
@section('content')
    <section class="bd-breadcrumb-area p-relative fix z-index-11">
        <div class="bd-breadcrumb-bg-two"
            data-background="https://html.topylo.com/istudy-prv/assets/images/breadcrumb/breadcrumb-bg-2.webp"
            style="background-image: url(&quot;https://html.topylo.com/istudy-prv/assets/images/breadcrumb/breadcrumb-bg-2.webp&quot;);">
        </div>
        <div class="bd-breadcrumb-wrapper p-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bd-breadcrumb style-two d-flex-center">
                            <div class="bd-breadcrumb-content">
                                <h1 class="bd-breadcrumb-title">Giới thiệu sách</h1>
                                <div class="bd-breadcrumb-list">
                                    <span><i class="fas fa-home"></i> <a
                                            href="{{ route('home') }}">{{ get_config()->title }}</a></span>
                                    <span class="divider"><i class="fas fa-chevron-right"></i></span>
                                    <span class="active">Giới thiệu sách</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bd-breadcrumb-shape">
                    <div class="shape-1"><img
                            src="https://html.topylo.com/istudy-prv/assets/images/shape/breadcrumb-shape-1.webp"
                            alt="shape"></div>
                    <div class="shape-3"><img src="https://html.topylo.com/istudy-prv/assets/images/shape/bulb-shape.webp"
                            alt="shape"></div>
                </div>
            </div>
        </div>
    </section>




    <section class="bd-shop-area section-space">
        <div class="container">
            <div class="row gy-30">
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="bd-sorting-meta d-flex-between flex-wrap mb-30 gap-30">
                        <div class="bd-top-sorting-left">
                            <h6 class="bd-sorting-item-found">We found <span>9</span> books available for you</h6>
                        </div>
                        <div class="bd-top-sorting-right d-flex align-items-center gap-15">
                           <input type="text" value="" placeholder="Nhập từ tìm kiếm" class="form-control input-search-books">
                        </div>
                    </div>
                    <!-- product grid style -->
                    <div class="display-layout-grid active">
                        <div class="row gy-30">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="bd-product-card-wrap">
                                    <a href="shop-details.html" class="bd-product-card">
                                        <div class="bd-product-thumb">
                                            <img src="https://html.topylo.com/istudy-prv/assets/images/book/book-cover-1.webp"
                                                alt="The Butcher Game by Alaina Urquhart">
                                        </div>
                                        <div class="bd-product-content">
                                            <h6 class="bd-product-title underline mb-10">The Butcher Game
                                            </h6>
                                            <span
                                                class="bd-product-rating fs-14 d-flex justify-content-center rating-color mb-10">
                                               <i class="fas fa-star"></i>
                                               <i class="fas fa-star"></i>
                                               <i class="fas fa-star"></i>
                                               <i class="fas fa-star"></i>
                                               <i class="fas fa-star"></i>
                                            </span>
                                            <div class="bd-product-price">
                                                <span class="current-price">$19.99</span>
                                            </div>
                                        </div>
                                        <div class="bd-product-cart-btn">
                                            <div class="bd-btn btn-primary btn-small">Add
                                                To
                                                Cart</div>
                                        </div>
                                    </a>
                                    <div class="bd-product-details-btn">
                                        <a href="shop-details.html" class="bd-btn btn-outline-secondary btn-small">View
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        
                           
                           
                        </div>
                    </div>
                  
                    <!-- pagination style -->
                    <div class="basic-pagination">
                        <nav>
                            <ul>
                                <li><a href="#" class="prev"><i class="fa-solid fa-angle-left"></i></a></li>
                                <li><a class="current">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#" class="next"><i class="fa-solid fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- pagination style end -->
                </div>
               
            </div>
        </div>
    </section>
@endsection
