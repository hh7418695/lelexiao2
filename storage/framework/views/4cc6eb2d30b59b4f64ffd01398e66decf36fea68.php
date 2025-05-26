<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_','-',strtolower(app()->getLocale())), false); ?>">
<body>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(isset($page_title) ? $page_title : '', false); ?> | <?php echo e(dujiaoka_config_get('title'), false); ?></title>
    <meta name="keywords" content="<?php echo e($gd_keywords, false); ?>">
    <meta name="description" content="<?php echo e($gd_description, false); ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?php echo e($picture, false); ?>">
    <meta property="og:title" content="<?php echo e(isset($page_title) ? $page_title : '', false); ?>">
    <meta property="og:description" content="<?php echo e($gd_description, false); ?>">    
    <meta property="og:release_date" content="<?php echo e($updated_at, false); ?>">
    <?php if(\request()->getScheme() == "https"): ?>
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <?php endif; ?>
    <link rel="stylesheet" href="/assets/unicorn/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/unicorn/css/base.css">
    <link rel="stylesheet" href="/assets/unicorn/css/common.css">
    <link rel="stylesheet" href="/assets/unicorn/css/index.css">
</head>
<?php echo $__env->make('unicorn.layouts._nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('unicorn.layouts._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<?php echo $__env->make('unicorn.layouts._script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('js'); ?>
<?php echo $__env->yieldSection(); ?>
</html>
<?php /**PATH /Users/vercetti/Project/admit/lelexiao2/resources/views/unicorn/layouts/seo.blade.php ENDPATH**/ ?>