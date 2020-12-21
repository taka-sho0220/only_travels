<?php $__env->startSection('title', '一人でいけるモン。'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1><?php echo e($subtitle); ?></h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="bg-light p-5">
    <form action="" method="post" class="needs-validation" novalidate>
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        <table class="table">
            <tr>
                <th scope="row">ニックネーム</th>
                <td><?php echo e($request->name); ?></td>
            </tr>
            <input type="hidden" name="name" value="<?php echo e($request->name); ?>" />            
            <tr>
                <th scope="row">旅行先</th>
                <td><?php echo e($request->place); ?></td>
            </tr>
            <input type="hidden" name="name" value="<?php echo e($request->place); ?>" />
                <th scope="row">評価</th>
                <td><?php echo e($request->evaluation); ?></td>
            </tr>
            <input type="hidden" name="name" value="<?php echo e($request->evaluation); ?>" />
            <tr>
                <th scope="row">感想欄</th>
                <td><?php echo e($request->impressions); ?></td>
            </tr>
            <input type="hidden" name="name" value="<?php echo e($request->impressions); ?>" />
            <tr>
                <th scope="row">利用規約</th>
                <td><?php echo e($request->terms); ?></td>
            </tr>
            <input type="hidden" name="name" value="<?php echo e($request->terms); ?>" />
        </table>
        <div class="form-group row">
            <div class="col-sm-12 text-center">
                <button type="button" class="btn btn-info" onClick="history.back()">戻る</button>
                <button type="submit" class="btn btn-info" disabled>送信 (※無効にしています)</button>
            </div>
        </div>
    </form>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-travel\resources\views/admin-page/confirm.blade.php ENDPATH**/ ?>