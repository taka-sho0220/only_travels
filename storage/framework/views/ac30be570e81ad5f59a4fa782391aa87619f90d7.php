<?php $__env->startSection('title', '一人でいけるモン。'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>一人でいけるモン</h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<h2>関西</h2>
<div class="container">
    <p>三重県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $mies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($mie->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $mie->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>滋賀県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $shigas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shiga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($shiga->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $shiga->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>京都府</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $kyotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kyoto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($kyoto->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $kyoto->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>大阪府</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $osakas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $osaka): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($osaka->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $osaka->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>兵庫県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $hyogos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hyogo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($hyogo->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $hyogo->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>奈良県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $naras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nara): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($nara->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $nara->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>和歌山県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $wakayamas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wakayama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($wakayama->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $wakayama->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-travel\resources\views/travel-pages/place_parts/kansai.blade.php ENDPATH**/ ?>