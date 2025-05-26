<?php $__env->startSection('content'); ?>
    <!-- main start -->
    <section class="main-container">
        <div class="container">
            <div class="order-card">
                <div class="row justify-content-center">

                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-8">
                        <div class="card mt-3">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-6">
                                    <div class="card card-body p-3 border-0">
                                        <div class="mx-auto">
                                            <h5>
                                                <small class="text-muted"><?php echo e(__('order.fields.order_sn'), false); ?>：<?php echo e($order['order_sn'], false); ?></small>
                                            </h5>
                                            <div class="mb-1">
                                                <label><?php echo e(__('order.fields.title'), false); ?>：</label><span><?php echo e($order['title'], false); ?></span>
                                            </div>

                                            <div class="mb-1"><label><?php echo e(__('order.fields.buy_amount'), false); ?>：</label><span><?php echo e($order['buy_amount'], false); ?></span></div>

                                            <div class="mb-1"><label><?php echo e(__('order.fields.order_created'), false); ?>：</label><span><?php echo e($order['created_at'], false); ?></span>
                                            </div>

                                            <div class="mb-1"><label><?php echo e(__('order.fields.email'), false); ?>：</label><span><?php echo e($order['email'], false); ?></span></div>
                                            <div class="mb-1">

                                                <label><?php echo e(__('order.fields.type'), false); ?>：</label>
                                                <?php if($order['type'] == \App\Models\Order::AUTOMATIC_DELIVERY): ?>
                                                    <span class="badge bg-success"><?php echo e(__('goods.fields.automatic_delivery'), false); ?></span>
                                                <?php else: ?>
                                                    <span class="badge bg-warning"><?php echo e(__('goods.fields.manual_processing'), false); ?></span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="mb-1">

                                                <label><?php echo e(__('order.fields.actual_price'), false); ?>：</label>
                                                <span><?php echo e($order['actual_price'], false); ?></span>
                                            </div>
                                            <div class="mb-1">

                                                <label><?php echo e(__('order.fields.status'), false); ?>：</label>
                                                <?php switch($order['status']):
                                                    case (\App\Models\Order::STATUS_EXPIRED): ?>
                                                    <span class="badge bg-dark"><?php echo e(__('order.fields.status_expired'), false); ?></span>
                                                    <?php break; ?>
                                                    <?php case (\App\Models\Order::STATUS_WAIT_PAY): ?>
                                                    <span class="badge bg-secondary"><?php echo e(__('order.fields.status_wait_pay'), false); ?></span>
                                                    <?php break; ?>
                                                    <?php case (\App\Models\Order::STATUS_PENDING): ?>
                                                    <span class="badge bg-info"><?php echo e(__('order.fields.status_pending'), false); ?></span>
                                                    <?php break; ?>
                                                    <?php case (\App\Models\Order::STATUS_PROCESSING): ?>
                                                    <span class="badge bg-primary"><?php echo e(__('order.fields.status_processing'), false); ?></span>
                                                    <?php break; ?>
                                                    <?php case (\App\Models\Order::STATUS_COMPLETED): ?>
                                                    <span class="badge bg-success"><?php echo e(__('order.fields.status_completed'), false); ?></span>
                                                    <?php break; ?>
                                                    <?php case (\App\Models\Order::STATUS_FAILURE): ?>
                                                    <span class="badge bg-danger"><?php echo e(__('order.fields.status_failure'), false); ?></span>
                                                    <?php break; ?>
                                                    <?php case (\App\Models\Order::STATUS_ABNORMAL): ?>
                                                    <span class="badge bg-danger"><?php echo e(__('order.fields.status_abnormal'), false); ?></span>
                                                    <?php break; ?>
                                                <?php endswitch; ?>
                                            </div>
                                            <div class="mb-1">

                                                <label><?php echo e(__('dujiaoka.payment_method'), false); ?>：</label>
                                                <span><?php echo e($order['pay']['pay_name'] ?? '', false); ?></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card-body">
                                        <h6 class="card-title"><?php echo e(__('order.fields.info'), false); ?></h6>
                                        <div class="card-info">
                                            <textarea class="form-control" rows="5"><?php echo e($order['info'], false); ?></textarea>
                                        </div>
                                        <button id="copy-card" class="btn btn-primary mt-2" data-clipboard-text="<?php echo e($order['info'], false); ?>"><?php echo e(__('dujiaoka.copy_text'), false); ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

    </section>
    <!-- main end -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="/assets/unicorn/js/clipboard.min.js"></script>
<script>
    var clipboard = new ClipboardJS("#copy-card")
    clipboard.on('success', function (e) {
       alert("<?php echo e(__('dujiaoka.prompt.copy_text_success'), false); ?>")
    });
    clipboard.on('error', function (e) {
        alert("<?php echo e(__('dujiaoka.prompt.copy_text_failed'), false); ?>")
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('unicorn.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vercetti/Project/admit/lelexiao2/resources/views/unicorn/static_pages/orderinfo.blade.php ENDPATH**/ ?>