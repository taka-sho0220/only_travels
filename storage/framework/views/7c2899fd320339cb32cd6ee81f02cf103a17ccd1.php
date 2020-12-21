<!DOCTYPE html>
<html lang="ja">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php if(isset($title)): ?>
    <title><?php echo e($title); ?> 一人でいけるモン。</title>
    <?php else: ?>
    <title>一人でいけるモン。</title>
    <?php endif; ?>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/simple-line-icons/css/simple-line-icons.css')); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('css/landing-page.min.css')); ?>" rel="stylesheet">
</head>

<body>
    <?php echo $__env->make('parts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Footer -->
    <footer class="footer bg-light">
    <?php echo $__env->make('parts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
</body>
</html>
    
<?php /**PATH C:\xampp\htdocs\laravel-travel\resources\views/parts/travel.blade.php ENDPATH**/ ?>