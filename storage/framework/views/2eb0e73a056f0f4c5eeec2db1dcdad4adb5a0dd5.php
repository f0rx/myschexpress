<!-- breadcrumbs -->
<nav id="breadcrumbs">
    <ul>
        <li><a href="<?php echo e(route('/')); ?>"> Home </a></li>
        <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(! $loop->last): ?>
                <li><a href="<?php echo e(url($url)); ?>"><?php echo e(ucfirst($key)); ?></a></li>
            <?php else: ?>
                <li><?php echo e(ucfirst($key)); ?></li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</nav>
<?php /**PATH C:\xampp\htdocs\myschexpress\resources\views/layouts/partials/breadcrumbs.blade.php ENDPATH**/ ?>