@if ($products->isEmpty())
   <div class="text-center pt-3">Không tìm thấy sản phẩm nào</div>
@else
    @foreach ($products as $product)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
            <div class="bd-product-card-wrap">
                <a href="{{route('products.detail.home', ['alias'=> $product->alias])}}" class="bd-product-card">
                    <div class="bd-product-thumb">
                        <img src="https://html.topylo.com/istudy-prv/assets/images/book/book-cover-1.webp"
                            alt="{{$product->title}}">
                    </div>
                    <div class="bd-product-content">
                        <h6 class="bd-product-title underline mb-10">{{$product->title}}
                        </h6>
                        <span class="bd-product-rating fs-14 d-flex justify-content-center rating-color mb-10">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                        <div class="bd-product-price">
                            <span class="current-price">Liên hệ</span>
                        </div>
                    </div>
                    <div class="bd-product-cart-btn">
                        <div class="bd-btn btn-primary btn-small">Xem chi tiết</div>
                    </div>
                </a>
              
            </div>
        </div>
    @endforeach
@endif
