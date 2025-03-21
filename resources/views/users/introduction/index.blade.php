

@extends('users.index')
@section('content')
<section class="bd-breadcrumb-area p-relative fix z-index-11">
    <div class="bd-breadcrumb-bg-two" data-background="https://html.topylo.com/istudy-prv/assets/images/breadcrumb/breadcrumb-bg-2.webp" style="background-image: url(&quot;https://html.topylo.com/istudy-prv/assets/images/breadcrumb/breadcrumb-bg-2.webp&quot;);"></div>
    <div class="bd-breadcrumb-wrapper p-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bd-breadcrumb style-two d-flex-center">
                        <div class="bd-breadcrumb-content">
                            <h1 class="bd-breadcrumb-title"> Về chúng tôi</h1>
                            <div class="bd-breadcrumb-list">
                                <span><i class="fas fa-home"></i> <a href="index.html">{{ get_config()->title }}</a></span>
                                <span class="divider"><i class="fas fa-chevron-right"></i></span>
                                <span class="active">{{$introduction->name}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bd-breadcrumb-shape">
                <div class="shape-1"><img src="https://html.topylo.com/istudy-prv/assets/images/shape/breadcrumb-shape-1.webp" alt="shape"></div>
                <div class="shape-3"><img src="https://html.topylo.com/istudy-prv/assets/images/shape/bulb-shape.webp" alt="shape"></div>
            </div>
        </div>
    </div>
</section>
<section class="container pt-5 pb-5">{!!$introduction->content!!}</section>
@endsection