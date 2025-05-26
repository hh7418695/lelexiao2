<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_','-',strtolower(app()->getLocale())), false); ?>">
<body>
<?php echo $__env->make('unicorn.layouts._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('unicorn.layouts._nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('unicorn.layouts._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<?php echo $__env->make('unicorn.layouts._script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('js'); ?>
<?php echo $__env->yieldSection(); ?>
</html>

<?php /**PATH /Users/vercetti/Project/lelexiao2/resources/views/unicorn/layouts/default.blade.php ENDPATH**/ ?>