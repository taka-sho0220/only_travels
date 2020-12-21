<?php $__env->startSection('title', '一人でいけるモン。'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>一人でいけるモン</h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<h2>北海道,東北</h2>

<div class="container">
    <p>北海道</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $hokkaidous; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hokkaidou): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($hokkaidou->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $hokkaidou->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>青森県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $aomoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aomori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($aomori->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $aomori->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>岩手県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $iwates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iwate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($iwate->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $iwate->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>宮城県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $miyagis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $miyagi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($miyagi->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $miyagi->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>秋田県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $akitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $akita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($akita->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $akita->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>山形県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $yamagatas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yamagata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($yamagata->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $yamagata->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>福島県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $hukushimas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hukushima): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($hukushima->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $hukushima->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-travel\resources\views/travel-pages/place_parts/hoka_toho.blade.php ENDPATH**/ ?>