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
    <section class="bd-postbox-area section-space">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-xxl-8 col-lg-8">
                    <div class="bd-postbox-wrapper">
                        <div class="bd-blog-feature-thumb"><img src="assets/images/blog/blog-thumb-01.webp"
                                alt="blog feature image"></div>
                        <div class="bd-postbox-content">
                            <p class="bd-postbox-desc">With the advent of AI and machine learning, personalized
                                learning is becoming more accessible than ever. Students
                                can now receive tailored content that suits their individual needs, enhancing
                                engagement and retention. Adaptive
                                learning systems analyze student performance in real-time, adjusting lessons,
                                quizzes, and content delivery
                                according to their progress.</p>
                            <h3 class="bd-details-content-title">Online Learning Platforms</h3>
                            <p class="bd-postbox-desc">
                                Online learning platforms have grown exponentially, offering flexibility and access
                                to a wealth of resources. Platforms like Coursera and edX have made quality
                                education available to anyone with an internet connection, providing courses from
                                top universities and industry leaders
                                around the world. This democratization of education opens doors to new
                                opportunities, especially for
                                learners in remote or underserved areas.
                            </p>
                            <div class="post-details-blockquote mb-30">
                                <blockquote>
                                    <span class="icon"><i class="fa-solid fa-quote-right"></i></span>
                                    <h3 class="title">"Education is the most powerful weapon which you can use to
                                        change the world."</h3>
                                    <span class="name">Nelson Mandela</span>
                                </blockquote>
                            </div>
                            <p class="bd-postbox-desc">
                                Moreover, online platforms offer diverse courses that can be accessed at any time,
                                allowing learners to study at
                                their own pace. The rise of micro-credentials and online certifications is also
                                transforming how skills are
                                recognized in the workforce, enabling continuous learning and professional
                                development.
                            </p>
                            <div class="bd-postbox-thumb-wrapper mb-30">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="bd-postbox-thumb"><img src="assets/images/blog/blog-thumb-04.webp"
                                                alt="image"></div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bd-postbox-thumb"><img src="assets/images/blog/blog-thumb-05.webp"
                                                alt="image"></div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="bd-details-content-title">Collaborative Learning</h3>
                            <p class="bd-postbox-desc">
                                Collaborative learning encourages teamwork and critical thinking, preparing students
                                for real-world challenges. This
                                approach fosters a sense of community and allows students to learn from each other,
                                whether in a physical classroom
                                or through online platforms. Tools like Google Classroom, Zoom, and Microsoft Teams
                                have made it easier for students
                                to collaborate, discuss, and complete group projects remotely.
                            </p>
                            <div class="bd-post-details-list mb-30">
                                <ul>
                                    <li>Interactive Online Learning Courses</li>
                                    <li>Self-paced Modules Available for Flexibility</li>
                                    <li>Refundable Security Deposit of <strong>USD 120</strong> at the Time of
                                        Admission</li>
                                    <li>Live Webinars with Industry Experts</li>
                                    <li>Access to Exclusive Study Materials and Resources</li>
                                </ul>
                            </div>
                            <h3 class="bd-details-content-title">The Rise of EdTech and Gamification</h3>
                            <p class="bd-postbox-desc">
                                Educational technology (EdTech) is rapidly transforming classrooms with the
                                integration of virtual reality (VR),
                                augmented reality (AR), and gamified learning experiences. Gamification—where
                                elements of game design like scoring,
                                leaderboards, and rewards are used in learning—keeps students engaged and motivated.
                            </p>
                            <h3 class="bd-details-content-title">Challenges and Opportunities Ahead</h3>
                            <p class="bd-postbox-desc">
                                As education continues to evolve, there are still challenges to overcome, such as
                                bridging the digital divide and ensuring that all students have access to the
                                technologies that enable modern
                                learning. However, the opportunities that lie ahead—such as more inclusive,
                                accessible, and effective education—are
                                immense.
                            </p>
                            <p class="bd-postbox-desc">
                                Educators, policymakers, and technology developers must work together to ensure that
                                these innovations benefit all
                                learners, regardless of their background or location. As we look to the future, the
                                goal is to create a more
                                equitable and empowered learning environment for everyone.
                            </p>
                            <div class="bd-postbox-meta">
                                <div class="bd-postbox-tag">
                                    <div class="tagcloud">
                                        <a href="blog-details.html">Online Learning</a>
                                        <a href="blog-details.html">Future of Education</a>
                                        <a href="blog-details.html">Innovation</a>
                                    </div>
                                </div>
                                <div class="bd-postbox-share">
                                    <div class="theme-social">
                                        <ul class="social-icon-list">
                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bd-postbox-navigation">
                            <div class="row gy-30 align-items-center">
                                <div class="col-md-6">
                                    <div class="bd-postbox-more-left">
                                        <div class="bd-postbox-more-link">
                                            <a href="blog-details.html">
                                                <span class="mr-10">
                                                    <i class="fa-sharp fa-solid fa-arrow-left"></i>
                                                </span>
                                                Previous
                                            </a>
                                        </div>
                                        <h5 class="title underline"><a href="blog-details.html">The Evolution of
                                                Online Education</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bd-postbox-more-right text-md-end">
                                        <div class="bd-postbox-more-link">
                                            <a href="blog-details.html">
                                                Next
                                                <span class="ml-10">
                                                    <i class="fa-sharp fa-solid fa-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <h5 class="title underline"><a href="blog-details.html">The Rise of Virtual
                                                Classrooms</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bd-postbox-author mb-30">
                            <div class="thumb">
                                <a href="#"><img src="assets/images/avatar/avatar.webp" alt="Author image"></a>
                            </div>
                            <div class="bd-postbox-author-info">
                                <div class="mb-5">
                                    <h6 class="name underline"><a href="#">Sarah Collins</a></h6>
                                    <span class="designation">Senior Education Consultant</span>
                                </div>
                                <div class="bd-postbox-author-bio mb-15">
                                    <p>Sarah is an EdTech Consultant with over 8 years of experience in integrating
                                        technology into education to enhance learning experiences.</p>
                                </div>
                                <div class="theme-social circle">
                                    <ul class="social-icon-list">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-xxl-4 col-lg-4">
                    <div class="bd-blog-sidebar sidebar-right sidebar-sticky">
                      
                        <div class="bd-blog-widget widget-latest-posts">
                            <h5 class="bd-widget-title mb-20">Latest Post</h5>
                            <div class="bd-widget-posts">
                                <div class="bd-recent-post-item">
                                    <div class="bd-recent-post-thumb">
                                        <a href="blog-details.html"><img src="assets/images/blog/blog-thumb-17.webp"
                                                alt="image"></a>
                                    </div>
                                    <div class="bd-recent-post-content">
                                        <div class="bd-recent-post-meta">
                                            <span class="icon"><i class="fa-light fa-calendar-days"></i></span>
                                            <span class="date"> 10 Oct, 2024</span>
                                        </div>
                                        <h6 class="bd-recent-post-title underline"><a href="blog-details.html">Exploring
                                                Online Learning Strategies</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="bd-recent-post-item">
                                    <div class="bd-recent-post-thumb">
                                        <a href="blog-details.html"><img src="assets/images/blog/blog-thumb-18.webp"
                                                alt="image"></a>
                                    </div>
                                    <div class="bd-recent-post-content">
                                        <div class="bd-recent-post-meta">
                                            <span class="icon"><i class="fa-light fa-calendar-days"></i></span>
                                            <span class="date"> 25 Sep, 2024</span>
                                        </div>
                                        <h6 class="bd-recent-post-title underline"><a href="blog-details.html">The
                                                Future of University Education</a></h6>
                                    </div>
                                </div>
                                <div class="bd-recent-post-item">
                                    <div class="bd-recent-post-thumb">
                                        <a href="blog-details.html"><img src="assets/images/blog/blog-thumb-22.webp"
                                                alt="image"></a>
                                    </div>
                                    <div class="bd-recent-post-content">
                                        <div class="bd-recent-post-meta">
                                            <span class="icon"><i class="fa-light fa-calendar-days"></i></span>
                                            <span class="date"> 05 Aug, 2024</span>
                                        </div>
                                        <h6 class="bd-recent-post-title underline"><a
                                                href="blog-details.html">Kindergarten Learning Through Play</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bd-blog-widget widget_categories">
                            <h5 class="bd-widget-title mb-20">Categories</h5>
                            <div class="bd-widget-list">
                                <ul>
                                    <li class="underline"><a href="blog-details.html">Online Learning</a>(10)</li>
                                    <li class="underline"><a href="blog-details.html">Study Tips</a>(06)</li>
                                    <li class="underline"><a href="blog-details.html">Teaching Methods</a>(04)</li>
                                    <li class="underline"><a href="blog-details.html">Career Advice</a>(05)</li>
                                    <li class="underline"><a href="blog-details.html">Educational Resources</a>(08)
                                    </li>
                                    <li class="underline"><a href="blog-details.html">Skill Development</a>(09)</li>
                                    <li class="underline"><a href="blog-details.html">Parenting Tips</a>(03)</li>
                                    <li class="underline"><a href="blog-details.html">Academic Success</a>(07)</li>
                                    <li class="underline"><a href="blog-details.html">Distance Learning</a>(04)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bd-blog-widget widget_tag_cloud">
                            <h5 class="bd-widget-title mb-20">Tags</h5>
                            <div class="tagcloud">
                                <a href="blog-details.html">Learning</a>
                                <a href="blog-details.html">Motivation</a>
                                <a href="blog-details.html">Education</a>
                                <a href="blog-details.html">Data Science</a>
                                <a href="blog-details.html">Tips</a>
                                <a href="blog-details.html">Course</a>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
