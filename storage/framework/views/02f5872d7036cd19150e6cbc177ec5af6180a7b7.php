<?php $__env->startSection('title', '一人でいけるモン。'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>一人でいけるモン</h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<h2>九州、沖縄</h2>
<div class="container">
    <p>福岡県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $hukuokas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hukuoka): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($hukuoka->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $hukuoka->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>佐賀県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $sagas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $saga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($saga->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $saga->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>長崎県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $nagasakis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nagasaki): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($nagasaki->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $nagasaki->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>熊本県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $kumamotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kumamoto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($kumamoto->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $kumamoto->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>大分県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $oitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($oita->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $oita->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>宮崎県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $miyazakis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $miyazaki): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($miyazaki->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $miyazaki->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>鹿児島県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $kagoshimas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kagoshima): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($kagoshima->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $kagoshima->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>沖縄県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $okinawas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $okinawa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($okinawa->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $okinawa->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-travel\resources\views/travel-pages/place_parts/kyu_oki.blade.php ENDPATH**/ ?>