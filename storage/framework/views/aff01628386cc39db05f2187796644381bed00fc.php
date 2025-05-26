<?php $__env->startSection('content'); ?>
    <!-- main start -->
    <section class="main-container">
        <div class="container">
            <div class="good-card">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-12">
                        <div class="card m-3">
                            <div class="card-body p-4">
                                <h3 class="card-title"><?php echo e(__('dujiaoka.order_search'), false); ?></h3>
                                <h6>
                                    <small class="text-muted"><?php echo e(__('dujiaoka.prompt.search_order_browser_tips'), false); ?></small>
                                </h6>
                                <div class="buy-form mt-3">
                                    <ul class="nav nav-pills mb-3">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#order_search_by_sn"><?php echo e(__('dujiaoka.order_search_by_sn'), false); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#order_search_by_email"><?php echo e(__('dujiaoka.order_search_by_email'), false); ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#order_search_by_browser"><?php echo e(__('dujiaoka.order_search_by_browser'), false); ?></a>
                                        </li>

                                    </ul>
                                    <div id="searchTabContent" class="tab-content">
                                        <div class="tab-pane fade active show" id="order_search_by_sn">
                                            <form action="<?php echo e(url('search-order-by-sn'), false); ?>" method="post" >
                                                <?php echo e(csrf_field(), false); ?>

                                                <div class="form-group row">
                                                    <div class="col-12 col-md-8">
                                                        <label for="orderSN" class="col-form-label"><?php echo e(__('order.fields.order_sn'), false); ?>:</label>
                                                        <input type="text" class="form-control form-control-sm"
                                                               id="orderSN"  name="order_sn" required placeholder="<?php echo e(__('order.fields.order_sn'), false); ?>">
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <button type="submit" class="btn btn-outline-primary">
                                                            <i class="ali-icon">&#xe65c;</i> <?php echo e(__('dujiaoka.search_now'), false); ?></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="order_search_by_email">
                                            <form  action="<?php echo e(url('search-order-by-email'), false); ?>" method="post">
                                                <?php echo e(csrf_field(), false); ?>

                                                <div class="form-group row">
                                                    <div class="col-12 col-md-8">
                                                        <label for="email" class="col-form-label"><?php echo e(__('order.fields.email'), false); ?>:</label>
                                                        <input type="email" class="form-control form-control-sm"
                                                               id="email" name="email" required placeholder="">
                                                    </div>
                                                    <?php if(dujiaoka_config_get('is_open_search_pwd', \App\Models\BaseModel::STATUS_CLOSE) == \App\Models\BaseModel::STATUS_OPEN): ?>
                                                        <div class="col-12 col-md-8">
                                                            <label for="searchPwd" class="col-form-label"><?php echo e(__('order.fields.search_pwd'), false); ?>:</label>
                                                            <input type="password" class="form-control form-control-sm"
                                                                   id="searchPwd" name="search_pwd" required placeholder="">
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="col-12 mt-3">
                                                        <button type="submit" class="btn btn-outline-primary">
                                                            <i class="ali-icon">&#xe65c;</i> <?php echo e(__('dujiaoka.search_now'), false); ?></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="order_search_by_browser">
                                            <form  action="<?php echo e(url('search-order-by-browser'), false); ?>"  method="post">
                                                <?php echo e(csrf_field(), false); ?>

                                                <div class="form-group row">
                                                    <div class="col-12 mt-3">
                                                        <button type="submit" class="btn btn-outline-primary">
                                                            <i class="ali-icon">&#xe65c;</i> <?php echo e(__('dujiaoka.search_now'), false); ?></button>
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
            </div>
        </div>
    </section>
    <!-- main end -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('unicorn.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vercetti/Project/admit/lelexiao2/resources/views/unicorn/static_pages/searchOrder.blade.php ENDPATH**/ ?>