<!-- Navigation -->
<nav class="navbar navbar-light static-top">
    <div class="container">
        <a class="navbar-brand" href="#">一人でいけるモン</a>
        <?php if(Route::has('login')): ?>
        <a class="btn btn-primary" href="<?php echo e(route('login')); ?>">ログイン</a>
        <?php endif; ?>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\laravel-travel\resources\views/parts/nav.blade.php ENDPATH**/ ?>