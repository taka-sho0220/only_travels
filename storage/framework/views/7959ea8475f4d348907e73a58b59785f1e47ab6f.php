<?php $__env->startSection('title', '一人でいけるモン。'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>一人でいけるモン（詳細）</h1>
<?php $__env->stopSection(); ?>
<style>
    table,
    thead,
    tr,
    th,
    td {
        width: 100%;
        display: block;
    }
</style>

<?php $__env->startSection('content'); ?>
<div class="container">
    <?php if(session('err_msg')): ?>
    <p class="text-danger"><?php echo e(session('err_msg')); ?></p>
    <?php endif; ?>
    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th>ニックネーム</th>
                <td><?php echo e($travel->name); ?></td>
                <th>投稿日</th>
                <td><?php echo e($travel->updated_at); ?></td>
                <th>場所</th>
                <td><?php echo e($travel->place); ?></td>
                <th>性別</th>
                <td><?php echo e($travel->gender); ?></td>
                <th>年齢層</th>
                <td><?php echo e($travel->age); ?></td>
                <th>評価</th>
                <td><?php echo e($travel->evaluation); ?></td>
                <th>感想</th>
                <td><?php echo e($travel->impressions); ?></td>
                <th>写真</th>
                <td><img src="<?php echo e(asset('storage/profiles/'. $travel->photos)); ?>" class="w-75"></td>
            </tr>
        </thead>
    </table>
    <a class="btn btn-secondary" href="<?php echo e(route('home')); ?>">戻る</a>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-travel\resources\views/travel-pages/detail.blade.php ENDPATH**/ ?>