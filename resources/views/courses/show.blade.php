@extends('layouts.app')

@section('content')
    <!-- content -->
<div class="page-content">
    <div class="page-content__inner">

        @include('layouts.partials.breadcrumbs')

        <div class="uk-grid-large" uk-grid>
            <div class="uk-width-1-3@m uk-flex-last@m">


                <div uk-sticky="top: 30 ;offset:40 ; media: @m; bottom:true">

                    <div class="course-thumbnail">
                        <img src="/images/course/1.png" alt="">
                        <a class="play-button-trigger show" href="#trailer-modal" uk-toggle> </a>
                    </div>

                    <!-- video demo model -->
                    <div id="trailer-modal" uk-modal>
                        <div class="uk-modal-dialog">
                            <button class="uk-modal-close-default mt-2  mr-1" type="button" uk-close></button>
                            <div class="uk-modal-header">
                                <h4> Trailer video </h4>
                            </div>
                            <div class="video-responsive">
                                <iframe src="https://www.youtube.com/embed/nOCXXHGMezU"
                                    class="uk-padding-remove" uk-video="automute: true" frameborder="0"
                                    allowfullscreen uk-responsive></iframe>
                            </div>

                            <div class="uk-modal-body">
                                <h3>Build Responsive Websites </h3>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                                    in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>

                    <div class="uk-flex uk-flex-right mt-4">
                        <a href="course-lesson-1.html" class="btn-course-start w-100"> Enroll Now</a>
                    </div>
                    <div class="course-info-list">
                        <div class="course-info-list-single">
                            <div class="course-info-list-single-label">
                                <span> Eneroled </span> : <strong> 13 students </strong>
                            </div>
                            <div class="course-info-list-single-icon">
                                <i class="icon-feather-users"></i>
                            </div>
                        </div>

                        <div class="course-info-list-single">
                            <div class="course-info-list-single-label">
                                <span> Duration </span> : <strong> 6 hours </strong>
                            </div>
                            <div class="course-info-list-single-icon">
                                <i class="icon-feather-clock"></i>
                            </div>
                        </div>

                        <div class="course-info-list-single">
                            <div class="course-info-list-single-label">
                                <span> Lectures </span> : <strong> 6 </strong>
                            </div>
                            <div class="course-info-list-single-icon">
                                <i class="icon-feather-video"></i>
                            </div>
                        </div>

                        <div class="course-info-list-single">
                            <div class="course-info-list-single-label">
                                <span> Eneroled </span> : <strong> 13 students </strong>
                            </div>
                            <div class="course-info-list-single-icon">
                                <i class="icon-feather-video"></i>
                            </div>
                        </div>

                        <div class="course-info-list-single">
                            <div class="course-info-list-single-label">
                                <span> Level</span> : <strong> Advanced </strong>
                            </div>
                            <div class="course-info-list-single-icon">
                                <i class="icon-feather-bar-chart"></i>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="uk-width-2-3@m">

                <div class="course-details">
                    <h1>{{ $course->title }}</h1>
                    <p> {{ $course->summary }}</p>

                    <div class="course-details-info mt-4">
                        <ul>
                            <li>
                                <div class="star-rating"><span class="avg"> 4.9 </span> <span
                                        class="star"></span><span class="star"></span><span
                                        class="star"></span><span class="star"></span><span class="star"></span>
                                </div>
                            </li>
                            <li> <i class="icon-feather-users"></i> 1200 Enerolled </li>
                        </ul>
                    </div>

                    <div class="course-details-info">

                        <ul>
                            <li> Created by <a href="#"> {{ $author->user->full_name }} </a> </li>
                            <li> Last updated {{ $course->created_at->diffForHumans() }}</li>
                        </ul>

                    </div>
                </div>

                <nav class="responsive-tab mt-4">
                    <ul uk-switcher="connect: #course-intro-tab ;animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                        <li><a href="#">Overview</a></li>
                        <li><a href="#">Curriculum</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Announcement</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </nav>


                <ul id="course-intro-tab" class="uk-switcher mt-4">

                    <!-- course description -->
                    <li class="course-description-content">

                        <h5> Description </h5>
                        <p> {{ $course->summary }} <br> {{ $course->overview }}</p>
                        <p> consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                            exerci</p>


                        <h5> What youâ€™ll learn </h3>
                            <div class="uk-child-width-1-2@s" uk-grid>
                                <div>
                                    <ul class="list-2">
                                        <li>Setting up the environment </li>
                                        <li>Advanced HTML Practices</li>
                                        <li>Build a portfolio website</li>
                                        <li>Responsive Designs</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul class="list-2">
                                        <li>Understand HTML Programming</li>
                                        <li>Code HTML</li>
                                        <li>Start building beautiful websites</li>
                                    </ul>
                                </div>
                            </div>


                            <h5> Requirements </h5>
                            <ul class="list-1">
                                <li>Any computer will work: Windows, macOS or Linux</li>
                                <li>Basic programming HTML and CSS.</li>
                                <li>Basic/Minimal understanding of JavaScript</li>
                            </ul>

                            <h5> Here is exactly what we cover in this course: </h5>
                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                minim laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                                quis
                                nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                commodo
                                consequat</p>

                            <p> consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                exerci</p>

                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend
                                option
                                congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem
                                ipsum
                                dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                                veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                                ex
                                ea commodo consequat.</p>


                    </li>

                    <!-- course Curriculum-->
                    <li>

                        <ul class="course-curriculum" uk-accordion="multiple: true">

                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#"> Html Introduction <span
                                        class="duration">
                                        02:42 </span> </a>
                                <div class="uk-accordion-content">

                                    <!-- course-video-list -->
                                    <ul class="course-curriculum-list">
                                        <li> What is HTML <span> 23 min </span>
                                        <li> What is a Web page? <span> 23 min </span> </li>
                                        <li> Your First Web Page <a href="#trailer-modal" uk-toggle> Preview
                                            </a> <span> 23 min </span>
                                        </li>
                                        <li> Brain Streak <span> 23 min </span> </li>
                                    </ul>

                                </div>
                            </li>

                            <li>
                                <a class="uk-accordion-title" href="#"> Your First webpage <span
                                        class="duration">
                                        02:12 </span> </a>
                                <div class="uk-accordion-content">

                                    <!-- course-video-list -->
                                    <ul class="course-curriculum-list">
                                        <li> Headings <span> 23 min </span>
                                        <li> Paragraphs <span> 23 min </span> </li>
                                        <li> Emphasis and Strong Tag <a href="#trailer-modal" uk-toggle> Preview
                                            </a> <span> 23 min
                                            </span>
                                        </li>
                                        <li> Brain Streak <span> 23 min </span> </li>
                                        <li> Live Preview Feature <span> 23 min </span> </li>
                                    </ul>

                                </div>
                            </li>

                            <li>
                                <a class="uk-accordion-title" href="#"> Some Special Tags <span
                                        class="duration">
                                        02:12 </span> </a>
                                <div class="uk-accordion-content">

                                    <!-- course-video-list -->
                                    <ul class="course-curriculum-list">
                                        <li> The paragraph tag <span> 23 min </span> </li>
                                        <li> The break tag <a href="#trailer-modal" uk-toggle> Preview </a>
                                            <span> 23 min </span> </li>
                                        <li> Headings in HTML <span> 23 min </span> </li>
                                        <li> Bold, Italics Underline <span> 23 min </span>
                                        </li>
                                    </ul>

                                </div>
                            </li>

                            <li>
                                <a class="uk-accordion-title" href="#"> HTML Advanced level <span
                                        class="duration">
                                        02:12 </span> </a>
                                <div class="uk-accordion-content">

                                    <!-- course-video-list -->
                                    <ul class="course-curriculum-list">
                                        <li> Something to Ponder<span> 23 min </span> </li>
                                        <li> Tables <span> 23 min </span> </li>
                                        <li> HTML Entities <a href="#trailer-modal" uk-toggle> Preview
                                            </a><span> 23 min </span> </li>
                                        <li> HTML Iframes <span> 23 min </span> </li>
                                        <li> Some important things <span> 23 min </span> </li>
                                    </ul>

                                </div>
                            </li>

                        </ul>

                    </li>

                    <!-- course Faq-->
                    <li>

                        <h3 class="my-4"> Course Faq</h3>

                        <ul class="course-faq" uk-accordion>

                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#"> Html Introduction </a>
                                <div class="uk-accordion-content">
                                    <p> The primary goal of this quick start guide is to introduce you to Unreal
                                        Engine 4`s (UE4) development environment. By the end of this guide,
                                        you`ll
                                        know how to set up and develop C++ Projects in UE4. This guide shows you
                                        how
                                        to create a new Unreal Engine project, add a new C++ class to it,
                                        compile
                                        the project, and add an instance of a new class to your level. By the
                                        time
                                        you reach the end of this guide, you`ll be able to see your programmed
                                        Actor
                                        floating above a table in the level. </p>
                                </div>
                            </li>

                            <li>
                                <a class="uk-accordion-title" href="#"> Your First webpage</a>
                                <div class="uk-accordion-content">
                                    <p> The primary goal of this quick start guide is to introduce you to Unreal
                                        Engine 4`s (UE4) development environment. By the end of this guide,
                                        you`ll
                                        know how to set up and develop C++ Projects in UE4. This guide shows you
                                        how
                                        to create a new Unreal Engine project, add a new C++ class to it,
                                        compile
                                        the project, and add an instance of a new class to your level. By the
                                        time
                                        you reach the end of this guide, you`ll be able to see your programmed
                                        Actor
                                        floating above a table in the level. </p>
                                </div>
                            </li>

                            <li>
                                <a class="uk-accordion-title" href="#"> Some Special Tags </a>
                                <div class="uk-accordion-content">
                                    <p> The primary goal of this quick start guide is to introduce you to Unreal
                                        Engine 4`s (UE4) development environment. By the end of this guide,
                                        you`ll
                                        know how to set up and develop C++ Projects in UE4. This guide shows you
                                        how
                                        to create a new Unreal Engine project, add a new C++ class to it,
                                        compile
                                        the project, and add an instance of a new class to your level. By the
                                        time
                                        you reach the end of this guide, you`ll be able to see your programmed
                                        Actor
                                        floating above a table in the level. </p>
                                </div>
                            </li>

                            <li>
                                <a class="uk-accordion-title" href="#"> Html Introduction </a>
                                <div class="uk-accordion-content">
                                    <p> The primary goal of this quick start guide is to introduce you to Unreal
                                        Engine 4`s (UE4) development environment. By the end of this guide,
                                        you`ll
                                        know how to set up and develop C++ Projects in UE4. This guide shows you
                                        how
                                        to create a new Unreal Engine project, add a new C++ class to it,
                                        compile
                                        the project, and add an instance of a new class to your level. By the
                                        time
                                        you reach the end of this guide, you`ll be able to see your programmed
                                        Actor
                                        floating above a table in the level. </p>
                                </div>
                            </li>

                        </ul>

                    </li>

                    <!-- course Announcement-->
                    <li>
                        <h4> Announcement </h4>

                        <div class="user-details-card">
                            <div class="user-details-card-avatar">
                                <img src="/images/avatars/avatar-2.jpg" alt="">
                            </div>
                            <div class="user-details-card-name">
                                Stella Johnson <span> Instructor <span> 1 year ago </span> </span>
                            </div>
                        </div>



                        <article class="uk-article">

                            <p class="uk-text-lead"> Nam liber tempor cum soluta nobis eleifend option congue
                                nihil imperdiet doming.</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia
                                deserunt mollit anim id est laborum.</p>

                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend
                                option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                aliquip ex ea commodo consequat.</p>


                        </article>
                    </li>

                    <!-- course Reviews-->
                    <li>

                        <div class="review-summary">
                            <h4 class="review-summary-title"> Student feedback </h4>
                            <div class="review-summary-container">
                                <div class="review-summary-avg">
                                    <div class="avg-number">
                                        4.8
                                    </div>
                                    <div class="review-star">
                                        <div class="star-rating"><span class="star"></span><span
                                                class="star"></span><span class="star"></span><span
                                                class="star"></span><span class="star half"></span></div>
                                    </div>
                                    <span>Course Rating</span>
                                </div>


                                <div class="review-summary-rating">
                                    <div class="review-summary-rating-wrap">
                                        <div class="review-bars">
                                            <div class="full_bar">
                                                <div class="bar_filler" style="width:95%"></div>
                                            </div>
                                        </div>
                                        <div class="review-stars">
                                            <div class="star-rating"><span class="star"></span><span
                                                    class="star"></span><span class="star"></span><span
                                                    class="star"></span><span class="star"></span></div>
                                        </div>
                                        <div class="review-avgs">
                                            95 %
                                        </div>
                                    </div>
                                    <div class="review-summary-rating-wrap">
                                        <div class="review-bars">
                                            <div class="full_bar">
                                                <div class="bar_filler" style="width:80%"></div>
                                            </div>
                                        </div>
                                        <div class="review-stars">
                                            <div class="star-rating"><span class="star"></span><span
                                                    class="star"></span><span class="star"></span><span
                                                    class="star"></span><span class="star empty"></span></div>
                                        </div>
                                        <div class="review-avgs">
                                            80 %
                                        </div>
                                    </div>
                                    <div class="review-summary-rating-wrap">
                                        <div class="review-bars">
                                            <div class="full_bar">
                                                <div class="bar_filler" style="width:60%"></div>
                                            </div>
                                        </div>
                                        <div class="review-stars">
                                            <div class="star-rating"><span class="star"></span><span
                                                    class="star"></span><span class="star"></span><span
                                                    class="star empty"></span><span class="star empty"></span>
                                            </div>
                                        </div>
                                        <div class="review-avgs">
                                            60 %
                                        </div>
                                    </div>
                                    <div class="review-summary-rating-wrap">
                                        <div class="review-bars">
                                            <div class="full_bar">
                                                <div class="bar_filler" style="width:45%"></div>
                                            </div>
                                        </div>
                                        <div class="review-stars">
                                            <div class="star-rating"><span class="star"></span><span
                                                    class="star"></span><span class="star empty"></span><span
                                                    class="star empty"></span><span class="star empty"></span>
                                            </div>
                                        </div>
                                        <div class="review-avgs">
                                            45 %
                                        </div>
                                    </div>
                                    <div class="review-summary-rating-wrap">
                                        <div class="review-bars">
                                            <div class="full_bar">
                                                <div class="bar_filler" style="width:25%"></div>
                                            </div>
                                        </div>
                                        <div class="review-stars">
                                            <div class="star-rating"><span class="star"></span><span
                                                    class="star empty"></span><span
                                                    class="star empty"></span><span
                                                    class="star empty"></span><span class="star empty"></span>
                                            </div>
                                        </div>
                                        <div class="review-avgs">
                                            25 %
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class="comments">
                            <h3>Reviews
                                <span class="comments-amount"> (4610) </span>
                            </h3>

                            <ul>
                                <li>
                                    <div class="avatar"><img src="/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-by">Stella Johnson<span>Student</span>
                                            <div class="comment-stars">
                                                <div class="star-rating"><span class="star"></span><span
                                                        class="star"></span><span class="star"></span><span
                                                        class="star"></span><span class="star"></span></div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                            ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                        <div class="comment-footer">
                                            <span> Was this review helpful? </span>
                                            <button> Yes </button>
                                            <button> No </button>
                                            <a href="#"> Report</a>
                                        </div>
                                    </div>

                                </li>

                                <li>
                                    <div class="avatar"><img src="/images/avatars/avatar-3.jpg" alt="">
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-by"> Adrian Mohani <span>Instructor </span>
                                            <div class="comment-stars">
                                                <div class="star-rating"><span class="star"></span><span
                                                        class="star"></span><span class="star"></span><span
                                                        class="star"></span><span class="star half"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                            suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber
                                            tempor cum soluta nobis eleifend
                                        </p>
                                        <div class="comment-footer">
                                            <span> Was this review helpful? </span>
                                            <button> Yes </button>
                                            <button> No </button>
                                            <a href="#"> Report</a>
                                        </div>
                                    </div>

                                </li>

                                <li>
                                    <div class="avatar"><img src="/images/avatars/avatar-3.jpg" alt="">
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-by"> Adrian Mohani <span>Student</span>
                                            <div class="comment-stars">
                                                <div class="star-rating"><span class="star"></span><span
                                                        class="star"></span><span class="star"></span><span
                                                        class="star"></span><span class="star"></span></div>
                                            </div>
                                        </div>
                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil
                                            imperdiet doming id quod mazim placerat facer possim assum. Lorem
                                            ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat.
                                        </p>
                                        <div class="comment-footer">
                                            <span> Was this review helpful? </span>
                                            <button> Yes </button>
                                            <button> No </button>
                                            <a href="#"> Report</a>
                                        </div>
                                    </div>

                                </li>

                                <li>
                                    <div class="avatar"><img src="/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-by">Stella Johnson<span>Student</span>
                                            <div class="comment-stars">
                                                <div class="star-rating"><span class="star"></span><span
                                                        class="star"></span><span class="star"></span><span
                                                        class="star"></span><span class="star"></span></div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                            nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
                                            volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                            ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                        <div class="comment-footer">
                                            <span> Was this review helpful? </span>
                                            <button> Yes </button>
                                            <button> No </button>
                                            <a href="#"> Report</a>
                                        </div>
                                    </div>

                                </li>

                            </ul>

                        </div>

                        <div class="comments">
                            <h3>Submit Review </h3>
                            <ul>
                                <li>
                                    <div class="avatar"><img src="/images/avatars/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="comment-content">
                                        <form class="uk-grid-small" uk-grid>
                                            <div class="uk-width-1-2@s">
                                                <label class="uk-form-label">Name</label>
                                                <input class="uk-input" type="text" placeholder="Name">
                                            </div>
                                            <div class="uk-width-1-2@s">
                                                <label class="uk-form-label">Email</label>
                                                <input class="uk-input" type="text" placeholder="Email">
                                            </div>
                                            <div class="uk-width-1-1@s">
                                                <label class="uk-form-label">Comment</label>
                                                <textarea class="uk-textarea"
                                                    placeholder="Enter Your Comments her..."
                                                    style=" height:160px"></textarea>
                                            </div>
                                            <div class="uk-grid-margin">
                                                <input type="submit" value="submit" class="button grey">
                                            </div>
                                        </form>

                                    </div>
                                </li>
                            </ul>
                        </div>

                    </li>

                </ul>



            </div>
        </div>


        <!-- footer
        ================================================== -->
        <div class="footer">
            <div class="uk-grid-collapse" uk-grid>
                <div class="uk-width-expand@s uk-first-column">
                    <p>Â© 2019 <strong>Courseplus</strong>. All Rights Reserved. </p>
                </div>
                <div class="uk-width-auto@s">
                    <nav class="footer-nav-icon">
                        <ul>
                            <li><a href="#"><i class="icon-brand-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-brand-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-brand-youtube"></i></a></li>
                            <li><a href="#"><i class="icon-brand-twitter"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


    </div>

</div>
@endsection
