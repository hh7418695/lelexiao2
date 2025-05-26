<?php $__env->startSection('content'); ?>
    <!-- main start -->
    <section class="main-container">
        <div class="container">
            <div class="good-card">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-12">
                        <div class="card m-3">
                            <div class="card-body p-2 text-center">
                                <h3 class="card-title text-primary ali-icon">&#xe832;<?php echo e(__('dujiaoka.confirm_order'), false); ?></h3>
                            </div>
                            <div class="card card-body p-3 border-0">
                                <div class="mx-auto">
                                    <h5>
                                        <small class="text-muted"><?php echo e(__('order.fields.order_sn'), false); ?>：<?php echo e($order_sn, false); ?></small>
                                    </h5>
                                    <div class="mb-1">
                                        <label><?php echo e(__('order.fields.title'), false); ?>：</label><span><?php echo e($title, false); ?></span>
                                    </div>
                                    <div class="mb-1"><label><?php echo e(__('order.fields.goods_price'), false); ?>：</label><span> <?php echo e($goods_price, false); ?></span></div>
                                    <div class="mb-1"><label><?php echo e(__('order.fields.buy_amount'), false); ?>：</label><span><?php echo e($buy_amount, false); ?></span></div>
                                    <div class="mb-1"><label><?php echo e(__('order.fields.email'), false); ?>：</label><span><?php echo e($email, false); ?></span></div>
                                    <div class="mb-1">
                                        <label><?php echo e(__('order.fields.type'), false); ?>：</label>
                                        <?php if($type == \App\Models\Order::AUTOMATIC_DELIVERY): ?>
                                            <span class="badge bg-success"><?php echo e(__('goods.fields.automatic_delivery'), false); ?></span>
                                        <?php else: ?>
                                            <span class="badge bg-warning"><?php echo e(__('goods.fields.manual_processing'), false); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(!empty($coupon)): ?>
                                        <div class="mb-1"><label><?php echo e(__('order.fields.coupon_id'), false); ?>：</label><span><?php echo e($coupon['coupon'], false); ?></span></div>
                                        <div class="mb-1"><label><?php echo e(__('order.fields.coupon_discount_price'), false); ?>：</label><span><?php echo e(__('dujiaoka.money_symbol'), false); ?><?php echo e($coupon_discount_price, false); ?></span></div>
                                    <?php endif; ?>
                                    <?php if($wholesale_discount_price > 0 ): ?>
                                        <div class="mb-1"><label><?php echo e(__('order.fields.wholesale_discount_price'), false); ?>：</label><span><?php echo e(__('dujiaoka.money_symbol'), false); ?><?php echo e($wholesale_discount_price, false); ?></span></div>
                                    <?php endif; ?>
                                    <?php if(!empty($info)): ?>
                                        <div class="mb-1"><label><?php echo e(__('dujiaoka.order_information'), false); ?>：</label><p><?php echo e($info, false); ?></p></div>
                                    <?php endif; ?>
                                    <div class="mb-1"><label><?php echo e(__('order.fields.actual_price'), false); ?>：</label><span><?php echo e(__('dujiaoka.money_symbol'), false); ?><?php echo e($actual_price, false); ?></span></div>
                                    <div class="mb-1"><label><?php echo e(__('dujiaoka.payment_method'), false); ?>：</label><span><?php echo e($pay['pay_name'], false); ?></span></div>
                                    <div class="mb-1"><label><?php echo e(__('order.fields.order_created'), false); ?>：</label><span><?php echo e($created_at, false); ?></span></div>

                                    <div class="pay-now text-center mt-3">
                                        <a href="<?php echo e(url('pay-gateway', ['handle' => urlencode($pay['pay_handleroute']),'payway' => $pay['pay_check'], 'orderSN' => $order_sn]), false); ?>" type="button" class="btn btn-dark"><i class="ali-icon">&#xe673;</i>
                                            <?php echo e(__('dujiaoka.pay_immediately'), false); ?>

                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main end -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('unicorn.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vercetti/Project/admit/lelexiao2/resources/views/unicorn/static_pages/bill.blade.php ENDPATH**/ ?>