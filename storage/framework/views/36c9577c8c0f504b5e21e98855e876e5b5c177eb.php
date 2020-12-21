<?php $__currentLoopData = config('adminlte.plugins'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pluginName => $plugin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($plugin['active'] || View::getSection('plugins.' . ($plugin['name'] ?? $pluginName))): ?>
        <?php $__currentLoopData = $plugin['files']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($file['type'] == $type && $type == 'css'): ?>
                <link rel="stylesheet" href="<?php echo e($file['asset'] ? asset($file['location']) : $file['location']); ?>">
            <?php elseif($file['type'] == $type && $type == 'js'): ?>
                <script src="<?php echo e($file['asset'] ? asset($file['location']) : $file['location']); ?>"></script>
            <?php endif; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\laravel-travel\vendor\jeroennoten\laravel-adminlte\src/../resources/views/plugins.blade.php ENDPATH**/ ?>