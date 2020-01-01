<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <div class="page-content__inner">
            <?php echo $__env->make('layouts.partials.breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <h1>All Courses</h1>

            <div class="section-small">
                <browse-courses m-class="uk-child-width-1-4@m uk-child-width-1-3@s course-card-grid"/>
            </div>

            <!-- pagination menu -->
            <bottom-paginator :offset="3"></bottom-paginator>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myschexpress\resources\views/courses/index.blade.php ENDPATH**/ ?>