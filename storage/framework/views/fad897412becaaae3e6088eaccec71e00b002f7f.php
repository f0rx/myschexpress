<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Favicon -->
    <link href="/images/favicon.png" rel="icon" type="image/png">

    <title><?php echo e(config('app.name', 'My School Express')); ?></title>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/night-mode.css">
    <link rel="stylesheet" href="/css/framework.css">
    <link rel="stylesheet" href="/css/icons.css">
    <link href="/css/app.css" rel="stylesheet">
    <?php echo $__env->yieldPushContent('styles'); ?>

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="assets/css/icons.css">

    <!-- Google font -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;display=swap" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <mobile-header></mobile-header>
        <search></search>
        <mobile-search></mobile-search>
        <side-nav></side-nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- For Night mode -->
    <script>
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);


        (function (window, document, undefined) {

            'use strict';

            // Feature test
            if (!('localStorage' in window)) return;

            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;

            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('night-mode');
                if (document.documentElement.classList.contains('night-mode')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);

        })(window, document);
    </script>


    <!-- javaScripts
    ================================================== -->
    <!-- Scripts -->
    <script src="/js/bootstrap.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/framework.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/simplebar.js"></script>
    <script src="/js/main.js"></script>

    <?php echo $__env->yieldPushContent('script'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\myschexpress\resources\views/layouts/app.blade.php ENDPATH**/ ?>