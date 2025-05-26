<?php $__env->startSection('content'); ?>
    <div class="page-wrapper">
        <!-- main start -->
        <section class="main-container">
            <div class="container">
                <div class="good-card">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-12">
                            <div class="card m-3 border-0">
                                <div class="card-body p-4">
                                    <h3 class="card-title ali-icon">&#xe651; <?php echo e($title, false); ?>： </h3>
                                    <h6>
                                        <small class="text-muted">似乎遇到了一点问题~</small>
                                    </h6>
                                    <div class="err-message text-center p-3">
                                        <h5>
                                            <?php echo e($content, false); ?>

                                        </h5>
                                    </div>
                                    <div class="col-12 mt-3 text-center">
                                        <?php if(!$url): ?>
                                            <a href="javascript:history.back(-1);"  class="btn btn-outline-dark"><?php echo e(__('dujiaoka.callback'), false); ?></a>
                                        <?php else: ?>
                                            <a href="<?php echo e($url, false); ?>"  class="btn btn-outline-dark"><?php echo e(__('dujiaoka.callback'), false); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- main end -->
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('unicorn.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vercetti/Project/admit/lelexiao2/resources/views/unicorn/errors/error.blade.php ENDPATH**/ ?>