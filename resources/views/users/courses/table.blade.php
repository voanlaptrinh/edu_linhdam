@if ($courses->isEmpty())
    <div class="text-center pt-3">Không tìm thấy tin tức môn học nào</div>
@else
    @foreach ($courses as $course)
        <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="bd-course-wrapper style-four">
                <div class="bd-course-thumb-wrapper p-relative mb-20">
                    <a href="{{route('courses.detail.home', ['alias' => $course->alias])}}">
                        <div class="bd-course-thumb">
                            <img src="{{ asset($course->image ?: '/source/images/home-program-1.webp') }}" alt="image">
                        </div>
                        <div class="shape"><img src="{{ asset('source/images/course-shape.webp') }}" alt="shape">
                        </div>
                    </a>
                </div>
                <div class="bd-course-content mb-20">
                    <h5 class="bd-course-title underline ul-title"><a href="{{route('courses.detail.home', ['alias' => $course->alias])}}" class="">{{$course->name}}</a></h5>
                    <p class="des-news">{{$course->description}}</p>
                </div>

            </div>
        </div>
    @endforeach
@endif
