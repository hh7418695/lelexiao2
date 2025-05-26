<?php $__env->startSection('content'); ?>
    <div class="notice" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="jumbotron jumbotron-fluid p-1">
                                <div class="container">
                                    <h4 class=""><?php echo e(__('dujiaoka.site_announcement'), false); ?>：</h4>
                                    <p class="lead"><?php echo dujiaoka_config_get('notice'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- main start -->
    <section class="main-container">
        <!-- category start -->
        <div class="category">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">
                                <span style="vertical-align: inherit;">
                                    <?php echo e(__('dujiaoka.equipment.what_do_you_need_today'), false); ?>

                                </span>
                        </h3>
                        <div class="separator"></div>
                        <p class="lead text-center">
                                <span style="vertical-align: inherit;">
                                    <?php echo e(__('dujiaoka.equipment.self_promotion'), false); ?>

                                </span>
                        </p>
                    </div>
                    <div class="col-md-12">
                        <div class="category-menus">
                                <ul class="nav nav-pills  justify-content-center">
                                    <li class="nav-item">
                                        <a href="#group-all" data-bs-toggle="tab" class="btn btn-outline-secondary active"><?php echo e(__('dujiaoka.group_all'), false); ?></a>
                                    </li>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="nav-item">
                                            <a href="#group-<?php echo e($group['id'], false); ?>" data-bs-toggle="tab" class="btn btn-outline-secondary"><?php echo e($group['gp_name'], false); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- category end -->
        <!-- goods start -->
        <div class="goods">
            <div class="container">
                <div class="goods-list mb-5">
                    <div id="goodsTabContent" class="tab-content">

                        <div class="tab-pane fade active show" id="group-all">
                            <div class="row row-cols-2 row-cols-md-5 g-4">
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $__currentLoopData = $group['goods']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goods): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col">
                                            <div class="card position-relative">
                                                <?php if($goods['type'] == \App\Models\Goods::AUTOMATIC_DELIVERY): ?>
                                                    <span class="badge bg-success position-absolute top-0 start-0">
                                            <i class="ali-icon">&#xe7db;</i>
                                            <?php echo e(__('goods.fields.automatic_delivery'), false); ?>

                                        </span>
                                                <?php else: ?>
                                                    <span class="badge bg-warning position-absolute top-0 start-0">
                                                        <i class="ali-icon">&#xe74b;</i>
                                                        <?php echo e(__('goods.fields.manual_processing'), false); ?>

                                                    </span>
                                                <?php endif; ?>
                                                <img src="<?php echo e(picture_ulr($goods['picture']), false); ?>" class="card-img-top" alt="<?php echo e($goods['gd_name'], false); ?>">
                                                <div class="card-body">

                                                    <h6 class="card-title text-truncate">
                                                        <?php echo e($goods['gd_name'], false); ?>

                                                    </h6>

                                                    <button type="button" class="btn btn-sm btn-outline-success">
                                                        <i class="ali-icon">&#xe703;</i>
                                                        <strong><?php echo e($goods['actual_price'], false); ?></strong>
                                                    </button>
                                                    <?php if($goods['wholesale_price_cnf']): ?>
                                                        <button type="button" class="btn btn-sm btn-outline-warning">
                                                            <i class="ali-icon">&#xe77d;</i>
                                                            <?php echo e(__('dujiaoka.home_discount'), false); ?>

                                                        </button>
                                                    <?php endif; ?>
                                                    <h6 class="mt-2"><small class="text-muted"><?php echo e(__('goods.fields.in_stock'), false); ?>：<?php echo e($goods['in_stock'], false); ?></small></h6>
                                                    <a href="<?php echo e(url("/buy/{$goods['id']}"), false); ?>" class="btn btn-primary fr">
                                                        <i class="ali-icon">&#xe7d8;</i>
                                                        <?php echo e(__('dujiaoka.order_now'), false); ?>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>



                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tab-pane fade" id="group-<?php echo e($group['id'], false); ?>">
                                <div class="row row-cols-2 row-cols-md-5 g-4">
                                    <?php $__currentLoopData = $group['goods']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goods): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col">
                                            <div class="card position-relative">
                                                <?php if($goods['type'] == \App\Models\Goods::AUTOMATIC_DELIVERY): ?>
                                                    <span class="badge bg-success position-absolute top-0 start-0">
                                            <i class="ali-icon">&#xe7db;</i>
                                            <?php echo e(__('goods.fields.automatic_delivery'), false); ?>

                                        </span>
                                                <?php else: ?>
                                                    <span class="badge bg-warning position-absolute top-0 start-0">
                                        <i class="ali-icon">&#xe74b;</i>
                                        <?php echo e(__('goods.fields.manual_processing'), false); ?>

                                    </span>
                                                <?php endif; ?>
                                                <img src="<?php echo e(picture_ulr($goods['picture']), false); ?>" class="card-img-top" alt="<?php echo e($goods['gd_name'], false); ?>">
                                                <div class="card-body">

                                                    <h6 class="card-title text-truncate">
                                                        <?php echo e($goods['gd_name'], false); ?>

                                                    </h6>

                                                        <button type="button" class="btn btn-sm btn-outline-success">
                                                            <i class="ali-icon">&#xe703;</i>
                                                            <strong><?php echo e($goods['actual_price'], false); ?></strong>
                                                        </button>
                                                        <?php if($goods['wholesale_price_cnf']): ?>
                                                            <button type="button" class="btn btn-sm btn-outline-warning">
                                                                <i class="ali-icon">&#xe77d;</i>
                                                                <?php echo e(__('dujiaoka.home_discount'), false); ?>

                                                            </button>
                                                        <?php endif; ?>
                                                    <h6 class="mt-2"><small class="text-muted"><?php echo e(__('goods.fields.in_stock'), false); ?>：<?php echo e($goods['in_stock'], false); ?></small></h6>
                                                    <a href="<?php echo e(url("/buy/{$goods['id']}"), false); ?>" class="btn btn-primary fr">
                                                        <i class="ali-icon">&#xe7d8;</i>
                                                        <?php echo e(__('dujiaoka.order_now'), false); ?>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            </div>
        </div>
        <!-- goods end -->

    </section>
    <!-- main end -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $("#searchBtn").on("click",function(e){
            var search_content = $("#searchText").val();
            //var search_content = search_content.toLowerCase();
            if($.trim(search_content)!="") {
                console.log($.trim(search_content));
                $(".col").hide().filter(":contains('"+search_content+"')").show();
            } else {
                $(".col").show();
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('unicorn.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/vercetti/Project/lelexiao2/resources/views/unicorn/static_pages/home.blade.php ENDPATH**/ ?>