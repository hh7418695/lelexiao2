<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
    
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?php if(! empty($header)): ?><?php echo e($header, false); ?> | <?php endif; ?> <?php echo e(Dcat\Admin\Admin::title(), false); ?></title>

    <?php if(! config('admin.disable_no_referrer_meta')): ?>
        <meta name="referrer" content="no-referrer"/>
    <?php endif; ?>

    <?php if(! empty($favicon = Dcat\Admin\Admin::favicon())): ?>
        <link rel="shortcut icon" href="<?php echo e($favicon, false); ?>">
    <?php endif; ?>

    <?php echo admin_section(Dcat\Admin\Admin::SECTION['HEAD']); ?>


    <?php echo Dcat\Admin\Admin::asset()->headerJsToHtml(); ?>


    <?php echo Dcat\Admin\Admin::asset()->cssToHtml(); ?>

</head>



<?php echo $__env->make('admin::layouts.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vercetti/Project/admit/lelexiao2/vendor/dcat/laravel-admin/src/../resources/views/layouts/page.blade.php ENDPATH**/ ?>