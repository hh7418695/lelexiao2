<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(isset($page_title) ? $page_title : '', false); ?> | <?php echo e(dujiaoka_config_get('title'), false); ?></title>
    <meta name="Keywords" content="<?php echo e(dujiaoka_config_get('keywords'), false); ?>">
    <meta name="Description" content="<?php echo e(dujiaoka_config_get('description'), false); ?>">
    <?php if(\request()->getScheme() == "https"): ?>
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <?php endif; ?>
    <link rel="stylesheet" href="/assets/unicorn/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/unicorn/css/base.css">
    <link rel="stylesheet" href="/assets/unicorn/css/common.css">
    <link rel="stylesheet" href="/assets/unicorn/css/index.css">
</head>

<?php /**PATH /Users/vercetti/Project/lelexiao2/resources/views/unicorn/layouts/_header.blade.php ENDPATH**/ ?>