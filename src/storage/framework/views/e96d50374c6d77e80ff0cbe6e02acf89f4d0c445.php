<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<header>
    <div class="logo">
        <img src="image/silhouette.png" alt="logo" width="120" height="120">
    </div>
    <h1>Beer's memo</h1>
</header>
<body>
    <?php echo $__env->yieldContent('content'); ?>;
</body>
</html><?php /**PATH /var/www/beers_memo/resources/views/layouts/layout.blade.php ENDPATH**/ ?>