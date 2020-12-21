<?php $__env->startSection('title', '一人でいけるモン。'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>一人でいけるモン</h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<h2>北海道,東北</h2>
<h3>北海道</h3>
<?php $__currentLoopData = $hoka_tohos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hoka_toho): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p><?php echo e($hoka_toho->place); ?></p>
<a href="/travel/<?php echo e($hoka_toho->id); ?>"><img src="<?php echo e(asset('storage/profiles/'. $hoka_toho->photos)); ?>" class="img-responsive img-rounded w-25" alt=""></a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-travel\resources\views/travel-pages/photolist.blade.php ENDPATH**/ ?>