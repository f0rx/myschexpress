<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <div class="page-content__inner">
            <?php echo $__env->make('layouts.partials.breadcrumbs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <h1>Courses</h1>

            <h4> <?php echo e($category->name); ?> <a href="<?php echo e(route('courses.categorize', $category)); ?>" class="text-success">Courses</a> </h4>

            <nav class="responsive-tab">
                <ul>
                    <tabs></tabs>
                </ul>
            </nav>

            <div class="section-small">
                <browse-courses :cat-courses="<?php echo e($category->courses()->paginate(12)->toJson()); ?>" m-class="uk-child-width-1-4@m uk-child-width-1-3@s course-card-grid"/>
            </div>

            <!-- pagination menu -->
            <bottom-paginator :category="<?php echo e($category->toJson()); ?>" :offset="3"></bottom-paginator>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myschexpress\resources\views/courses/show-category.blade.php ENDPATH**/ ?>