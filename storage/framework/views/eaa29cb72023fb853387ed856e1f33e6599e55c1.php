<?php $__env->startSection('content'); ?>
    <!-- main start -->
    <section class="main-container">
        <div class="container">
            <div class="good-card">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="card mt-3">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="<?php echo e(picture_ulr($picture), false); ?>"
                                         class="card-img-top p-5" alt="<?php echo e($gd_name, false); ?>">
                                    <?php if($type == \App\Models\Goods::AUTOMATIC_DELIVERY): ?>
                                        <h6><small class="badge bg-success  position-absolute top-0 start-0">
                                                <i class="ali-icon">&#xe7db;</i>
                                                <?php echo e(__('goods.fields.automatic_delivery'), false); ?></small>

                                        </h6>
                                    <?php else: ?>
                                        <h6>
                                            <small class="badge bg-warning  position-absolute top-0 start-0">
                                                <i class="ali-icon">&#xe7db;</i>
                                                <?php echo e(__('goods.fields.manual_processing'), false); ?>

                                            </small>
                                        </h6>
                                    <?php endif; ?>

                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-4">
                                        <h3 class="card-title"><?php echo e($gd_name, false); ?></h3>
                                        <h6>
                                            <small class="text-muted"><?php echo e(__('goods.fields.in_stock'), false); ?>：<?php echo e($in_stock, false); ?></small>
                                        </h6>
                                        <?php if($buy_limit_num > 0): ?>
                                            <h6><small class="badge bg-danger">
                                                    <?php echo e(__('dujiaoka.purchase_limit'), false); ?>(<?php echo e($buy_limit_num, false); ?>)</small>
                                            </h6>
                                        <?php endif; ?>
                                        <?php if(!empty($wholesale_price_cnf) && is_array($wholesale_price_cnf)): ?>
                                            <div class="sale">
                                                <?php $__currentLoopData = $wholesale_price_cnf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ws): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <span class="badge bg-dark mt-1 mb-1">
                                                     <i class="ali-icon">&#xe77d;</i>
                                                    <?php echo e(__('dujiaoka.by_amount'), false); ?><?php echo e($ws['number'], false); ?><?php echo e(__('dujiaoka.or_the_above'), false); ?>,<?php echo e(__('dujiaoka.each'), false); ?>：<?php echo e($ws['price'], false); ?><?php echo e(__('dujiaoka.money_symbol'), false); ?>

                                                    </span>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        <?php endif; ?>

                                        <div class="buy-form mt-3">
                                            <form  action="<?php echo e(url('create-order'), false); ?>" method="post">
                                                <?php echo e(csrf_field(), false); ?>

                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <h6><?php echo e(__('dujiaoka.price'), false); ?>：<?php echo e(__('dujiaoka.money_symbol'), false); ?> <?php echo e($actual_price, false); ?></h6>
                                                    </div>
                                                    <div class="col-xs-12 col-md-6">
                                                        <input type="hidden" name="gid" value="<?php echo e($id, false); ?>">
                                                        <label for="email" class=" col-form-label"><?php echo e(__('dujiaoka.email'), false); ?>:</label>
                                                        <input type="email" class="form-control form-control-sm"
                                                               name="email" id="email" required placeholder="<?php echo e(__('dujiaoka.email'), false); ?>">
                                                    </div>
                                                    <div class="col-xs-12 col-md-4">
                                                        <label for="shop-number"
                                                               class="col-form-label"><?php echo e(__('dujiaoka.by_amount'), false); ?>:</label>
                                                        <input type="number" class="form-control form-control-sm"
                                                               id="shop-number" name="by_amount" placeholder="" min="1" value="1">
                                                    </div>
                                                    <?php if(isset($open_coupon)): ?>
                                                        <div class="col-xs-12 col-md-6">
                                                            <label for="coupon" class="col-form-label"><?php echo e(__('dujiaoka.coupon_code'), false); ?>:</label>
                                                            <input type="text"
                                                                   class=" control form-control form-control-sm"
                                                                   id="coupon" name="coupon_code"   placeholder="" value="" >
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if(dujiaoka_config_get('is_open_search_pwd') == \App\Models\Goods::STATUS_OPEN): ?>
                                                        <div class="col-xs-12 col-md-6">
                                                            <label for="search_pwd" class="col-form-label"><?php echo e(__('dujiaoka.search_password'), false); ?>:</label>
                                                            <input type="text"
                                                                   class=" control form-control form-control-sm"
                                                                   id="search_pwd" name="search_pwd" required  placeholder="" value="" >
                                                        </div>
                                                    <?php endif; ?>

                                                    <?php if(dujiaoka_config_get('is_open_img_code') == \App\Models\Goods::STATUS_OPEN): ?>
                                                        <div class="col-12 col-md-6">
                                                            <label for="verifyCode" class=" col-form-label"><?php echo e(__('dujiaoka.img_verify_code'), false); ?>:</label>
                                                            <div class="input-group">
                                                                <input type="text" name="img_verify_code" class="form-control form-control-sm"
                                                                       id="verifyCode" required placeholder="">
                                                                <img style="margin-left: 10px;" src="<?php echo e(captcha_src('buy') . time(), false); ?>"
                                                                     height="33px" alt="<?php echo e(__('dujiaoka.img_verify_code'), false); ?>"  onclick="refresh()" id="imageCode">
                                                                <script>
                                                                    function refresh(){
                                                                        $('#imageCode').attr('src','<?php echo e(captcha_src('buy'), false); ?>'+Math.random());
                                                                    }
                                                                </script>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="form-group row">
                                                    <?php if($type == \App\Models\Goods::MANUAL_PROCESSING && is_array($other_ipu)): ?>
                                                        <?php $__currentLoopData = $other_ipu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ipu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="col-xs-12 col-md-6">
                                                                <label for="<?php echo e($ipu['field'], false); ?>" class="col-form-label"><?php echo e($ipu['desc'], false); ?>:</label>
                                                                <input type="text"
                                                                       class=" control form-control form-control-sm"
                                                                       id="<?php echo e($ipu['field'], false); ?>" name="<?php echo e($ipu['field'], false); ?>"  <?php if($ipu['rule'] !== false): ?> required <?php endif; ?> placeholder="<?php echo e($ipu['desc'], false); ?>">
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    <?php endif; ?>
                                                        <div class="col-12">
                                                            <fieldset>
                                                                <label for="coupon" class="col-form-label"><?php echo e(__('dujiaoka.payment_method'), false); ?>：</label>
                                                                <?php $__currentLoopData = $payways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $way): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div class="form-check form-check-inline">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input"
                                                                                   name="payway" value="<?php echo e($way['id'], false); ?>" <?php if($index == 0): ?> checked="checked" <?php endif; ?>>
                                                                            <?php echo e($way['pay_name'], false); ?>

                                                                        </label>
                                                                    </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                            </fieldset>
                                                        </div>
                                                    <div class="col-12 mt-2">
                                                        <button type="submit" id="submit" class="btn btn-outline-primary"> <i
                                                                class="ali-icon">&#xe7d8;</i> <?php echo e(__('dujiaoka.order_now'), false); ?></button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="card mt-3 mb-3">
                            <div class="card-header">
                                <h5><?php echo e(__('goods.fields.description'), false); ?></h5>
                            </div>
                            <div class="card-body">
                                <?php echo $description; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- main end -->
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><?php echo e(__('goods.fields.buy_prompt'), false); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo $buy_prompt; ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__('dujiaoka.close'), false); ?></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="/assets/unicorn/js/bootstrap-input-spinner.js"></script>
<script>
            <?php if(!empty($buy_prompt)): ?>
            var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'))
            $(function(){
                myModal.show()
            });
            <?php endif; ?>
            $("input[type='number']").inputSpinner();
            $('#submit').click(function(){
                if($("input[name='by_amount']").val() > <?php echo e($in_stock, false); ?>){
                    
                    $(".modal-body").html("<?php echo e(__('dujiaoka.prompt.inventory_shortage'), false); ?>")
                    myModal.show()
                    return false;
                }
                <?php if($buy_limit_num > 0): ?>
                if($("input[name='by_amount']").val() > <?php echo e($buy_limit_num, false); ?>){
                    
                    $(".modal-body").html("<?php echo e(__('dujiaoka.prompt.purchase_limit_exceeded'), false); ?>")
                    myModal.show()
                    return false;
                }
                <?php endif; ?>
            });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('unicorn.layouts.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vercetti/Project/admit/lelexiao2/resources/views/unicorn/static_pages/buy.blade.php ENDPATH**/ ?>