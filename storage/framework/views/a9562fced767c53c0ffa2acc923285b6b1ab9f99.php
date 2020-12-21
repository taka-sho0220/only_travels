<?php $__env->startSection('title', '一人でいけるモン。'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>一人でいけるモン</h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<h2>中国</h2>
<div class="container">
    <p>鳥取県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $tottoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tottori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($tottori->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $tottori->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>島根県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $shimanes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shimane): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($shimane->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $shimane->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>岡山県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $okayamas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $okayama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($okayama->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $okayama->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>広島県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $hiroshimas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hiroshima): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($hiroshima->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $hiroshima->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>山口県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $yamaguchis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yamaguchi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($yamaguchi->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $yamaguchi->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-travel\resources\views/travel-pages/place_parts/cyugoku.blade.php ENDPATH**/ ?>