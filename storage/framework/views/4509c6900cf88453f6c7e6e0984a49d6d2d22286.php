<?php $__env->startSection('title', '一人でいけるモン。'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>一人でいけるモン</h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<h2>中部</h2>
<div class="container">
    <p>新潟県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $nigatas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nigata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($nigata->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $nigata->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>富山県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $toyamas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $toyama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($toyama->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $toyama->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>石川県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $ishikawas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ishikawa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($ishikawa->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $ishikawa->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>福井県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $hukuis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hukui): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($hukui->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $hukui->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>山梨県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $yamanashis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yamanashi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($yamanashi->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $yamanashi->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>長野県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $naganos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nagano): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($nagano->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $nagano->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>岐阜県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $gihus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gihu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($gihu->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $gihu->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>静岡県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $shizuokas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shizuoka): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($shizuoka->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $shizuoka->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>愛知県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $aichis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aichi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($aichi->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $aichi->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-travel\resources\views/travel-pages/place_parts/tubu.blade.php ENDPATH**/ ?>