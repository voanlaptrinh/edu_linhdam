@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row mb-9">
            <div class="col-md-12">
                <h2>Chi tiết thông tin tin tức</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="" class="text-inherit">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('news.admin') }}" class="text-inherit">Tin tức</a></li>

                    </ol>
                </nav>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class=" bd-instructor-details-info sidebar-left sidebar-sticky  mb-30">
                    <div class="bd-instructor-details-thumb d-flex justify-content-center align-items-center">
                        <img src="{{ asset($news->image) }}" alt="{{ $news->name }}" class="img-fluid">
                    </div>
                    <div class="bd-instructor-info">
                        <h3 class="name mb-5 text-center">{{ $news->name }}</h3>
                        <p>Tags: 
                            @if (!empty($tags))
                                @foreach ($tags as $item)
                                    <span class="badge bg-light-success text-dark-success">{{ $item['value'] }}</span>
                                @endforeach
                            @else
                                <span class="text-muted">Không có tag</span>
                            @endif
                        </p>
                        <p><span style="font-weight: 600; color: black">Tiêu đề seo: </span>{{$news->metatitle}}</p>
                        <p><span style="font-weight: 600; color: black">Nội dung seo: </span>{{$news->metadescription}}</p>
                        <hr>
                        <p class="designation m-0">Mô tả ngắn: {{ $news->description }}</p>
                      <p></p>
                    </div>


                </div>


            </div>
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="bd-instructor-details-content">
                    <div class="bd-instructor-feature-box mb-30">
                        <h3 class="bd-instructor-details-title">Nội dung</h3>
                        <div class="bd-instructor-details-desc">{!! $news->content !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
