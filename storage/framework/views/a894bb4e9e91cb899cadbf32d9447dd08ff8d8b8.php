<?php $__env->startSection('title', '一人でいけるモン。'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>一人でいけるモン</h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<h2>関東</h2>
<div class="container">
    <p>茨城県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $ibarakis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ibaraki): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($ibaraki->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $ibaraki->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>栃木県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $tochigis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tochigi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($tochigi->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $tochigi->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>群馬県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $gunmas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gunma): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($gunma->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $gunma->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>埼玉県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $saitamas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $saitama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($saitama->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $saitama->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>千葉県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $chibas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chiba): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($chiba->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $chiba->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>東京都</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $tokyos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tokyo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($tokyo->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $tokyo->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container">
    <p>神奈川県</p>
    <div class="row">
        <div class="d-flex">
            <?php $__currentLoopData = $kanagawas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kanagawa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm"><a href="/travel/<?php echo e($kanagawa->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $kanagawa->photos)); ?>" class="img-rounded w-100" alt=""></a></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-travel\resources\views/travel-pages/place_parts/kanto.blade.php ENDPATH**/ ?>