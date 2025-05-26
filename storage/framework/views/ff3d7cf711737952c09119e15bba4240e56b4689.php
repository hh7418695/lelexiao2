<?php $__env->startSection('content'); ?>
    <!-- main start -->
    <section class="main-container">
        <div class="container">
            <div class="good-card">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-12">
                        <div class="card m-3">
                            <div class="card-body p-4 text-center">
                                <h3 class="card-title text-primary"><?php echo e(__('dujiaoka.scan_qrcode_to_pay'), false); ?></h3>
                                <h6>
                                    <small class="text-muted"><?php echo e(__('dujiaoka.payment_method'), false); ?>：[<?php echo e($payname, false); ?>], <?php echo e(__('dujiaoka.pay_order_expiration_date_prompt', ['min' => dujiaoka_config_get('order_expire_time', 5)]), false); ?></small>
                                </h6>
                                <div class="err-messagep-3">
                                    <img src="data:image/png;base64,<?php echo base64_encode(QrCode::format('png')->size(200)->generate($qr_code)); ?>" alt="<?php echo e(__('dujiaoka.scan_qrcode_to_pay'), false); ?>" srcset="">
                                </div>
                                <h6>
                                    <small class="text-warning"><?php echo e(__('dujiaoka.amount_to_be_paid'), false); ?>: <?php echo e($actual_price, false); ?></small>
                                </h6>
                                <?php if(Agent::isMobile() && isset($jump_payuri)): ?>
                                    <a href="<?php echo e($jump_payuri, false); ?>" type="button" class="btn btn-dark">
                                        <?php echo e(__('dujiaoka.open_the_app_to_pay'), false); ?></a>
                                <?php endif; ?>
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
    <script>
        var getting = {
            url:'<?php echo e(url('check-order-status', ['orderSN' => $orderid]), false); ?>',
            dataType:'json',
            success:function(res) {
                if (res.code == 400001) {
                    window.clearTimeout(timer);
                    alert("<?php echo e(__('dujiaoka.prompt.order_is_expired'), false); ?>")
                    setTimeout("window.location.href ='/'",3000);
                }
                if (res.code == 200) {
                    window.clearTimeout(timer);
                    alert("<?php echo e(__('dujiaoka.prompt.payment_successful'), false); ?>")
                    setTimeout("window.location.href ='<?php echo e(url('detail-order-sn', ['orderSN' => $orderid]), false); ?>'",3000);
                }
            }
        };
        var timer = window.setInterval(function(){$.ajax(getting)},5000);
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('unicorn.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vercetti/Project/admit/lelexiao2/resources/views/unicorn/static_pages/qrpay.blade.php ENDPATH**/ ?>