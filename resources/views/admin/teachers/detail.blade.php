@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row mb-9">
            <div class="col-md-12">
                <h2>Chi tiết thông tin giáo viên</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="" class="text-inherit">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('teacher.admin') }}" class="text-inherit">Giáo viên</a></li>
                     
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class=" bd-instructor-details-info sidebar-left sidebar-sticky  mb-30">
                    <div class="bd-instructor-details-thumb d-flex justify-content-center align-items-center">
                        <img src="{{ asset($teacher->avatar) }}" alt="{{ $teacher->name }}" class="img-fluid">
                    </div>
                    <div class="bd-instructor-info">
                        <h3 class="name mb-5 text-center">{{ $teacher->name }}</h3>
                        <p class="designation m-0">Môn giảng dạy: {{ $teacher->subject }}</p>
                        <p class="designation m-0">Ngày sinh: {{ $teacher->birthday->format('d-m-Y') }}</p>

                        <div class="bd-instructor-info-list mb-20">
                            <ul class="p-0">
                                <li><a href="mailto:{{ $teacher->email }}"><i class="bi bi-envelope"></i>
                                        {{ $teacher->email }}</a></li>
                                <li><a href="tel:{{ $teacher->phone }}"><i class="bi bi-telephone"></i>
                                        {{ $teacher->phone }}</a>
                                </li>
                                <li><a href="#"><i class="bi bi-pin-map"></i> {{ $teacher->address }}</a></li>
                            </ul>
                        </div>
                        <div class="theme-social">
                            <ul class="social-icon-list">
                                @if (!empty($teacher->facebook))
                                    <li><a href="{{ $teacher->facebook }}"><i class="bi bi-facebook"></i></a></li>
                                @endif
                                @if (!empty($teacher->twitter))
                                    <li><a href="{{ $teacher->twitter }}"><i class="bi bi-twitter-x"></i></a></li>
                                    
                                @endif
                                @if (!empty($teacher->linkedin))
                                    <li><a href="{{ $teacher->linkedin }}"><i class="bi bi-linkedin"></i></a></li>
                                    
                                @endif
                                @if (!empty($teacher->instagram))
                                    <li><a href="{{ $teacher->instagram }}"><i class="bi bi-instagram"></i></a></li>
                                    
                                @endif
                                
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="bd-instructor-feature-box">
                    <h3 class="bd-instructor-details-title">Kĩ năng</h3>
                    <div class="bd-instructor-progress">
                        <div class="progress-wrapper">
                            @php
                                $skills = is_string($teacher->skills) ? json_decode($teacher->skills, true) : [];
                            @endphp

                            @foreach ($skills as $index => $skill)
                                <div class="progress-item">
                                    <span class="title">{{ $skill['name'] }} ({{ $skill['level'] }}%)</span>
                                    <div class="progress-counter">
                                        <div class="progress-bar">
                                            <div class="progress bg-{{$index+1}}" data-percentage="{{ $skill['level'] }}" style="width: {{ $skill['level'] }}%;"></div>
                                        </div>
                                        <span class="percentage"></span>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="bd-instructor-details-content">
                    <div class="bd-instructor-feature-box mb-30">
                        <h3 class="bd-instructor-details-title">Tiểu sử</h3>
                        <div class="bd-instructor-details-desc">{!! $teacher->bio !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
