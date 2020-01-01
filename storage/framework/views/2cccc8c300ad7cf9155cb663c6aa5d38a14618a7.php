<div uk-slider="finite: true" class="course-grid-slider">
    <smooth-scroll text="Progress" highlight="Courses" link="<?php echo e(route('courses.index')); ?>" ></smooth-scroll>

    <ul
        class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m uk-grid">
        <li> <a href="course-lesson-1.html">
                <div class="course-card-resume">
                    <div class="course-card-resume-thumbnail">
                        <img src="<?php echo e(asset('images/course/7.png')); ?>">
                    </div>
                    <div class="course-card-resume-body">
                        <h5> Learn The Complete Ruby on Rails Developer </h5>
                        <span class="number"> 3/20 </span>
                        <div class="course-progressbar">
                            <div class="course-progressbar-filler" style="width:65%"></div>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li> <a href="course-lesson-1.html">
                <div class="course-card-resume">
                    <div class="course-card-resume-thumbnail">
                        <img src="<?php echo e(asset('images/course/2.png')); ?>">
                    </div>
                    <div class="course-card-resume-body">
                        <h5> Learn Programming Game From Scratch </h5>
                        <span class="number"> 3/20 </span>
                        <div class="course-progressbar">
                            <div class="course-progressbar-filler" style="width:65%"></div>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="course-path-level.html" class="skill-card">
                <i class="icon-brand-python skill-card-icon" style="color:#154f5f"></i>
                <div>
                    <h2 class="skill-card-title"> Python Courses</h2>
                    <p class="skill-card-subtitle"> 12 courses <span
                            class="skill-card-bullet"></span> 4
                        bundles
                    </p>
                </div>
            </a>
        </li>
    </ul>

</div>
<?php /**PATH C:\xampp\htdocs\myschexpress\resources\views/home/my-courses.blade.php ENDPATH**/ ?>