<?php $__env->startSection('title', '一人でいけるモン。'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>一人でいけるモン</h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<h2>四国</h2>
<div class="container">
    <p>徳島県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $tokushimas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tokushima): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($tokushima->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $tokushima->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>香川県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $kagawas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kagawa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($kagawa->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $kagawa->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>愛媛県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $ehimes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ehime): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($ehime->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $ehime->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>高知県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $kouchis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kouchi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($kouchi->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $kouchi->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-travel\resources\views/travel-pages/place_parts/shikoku.blade.php ENDPATH**/ ?>