<ul class="pagination pagination-sm no-margin pull-right shadow-100" style="border-radius: 1.5rem">
    <!-- Previous Page Link -->
    <?php if($paginator->onFirstPage()): ?>
    <li class="page-item previous disabled"><span class="page-link"></span></li>
    <?php else: ?>
    <li class="page-item previous"><a class="page-link" href="<?php echo e($paginator->previousPageUrl(), false); ?>" rel="prev"></a></li>
    <?php endif; ?>

    <?php if(! empty($elements)): ?>
    <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- "Three Dots" Separator -->
        <?php if(is_string($element)): ?>
        <li class="page-item disabled"><span class="page-link"><?php echo e($element, false); ?></span></li>
        <?php endif; ?>

        <!-- Array Of Links -->
        <?php if(is_array($element)): ?>
            <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($page == $paginator->currentPage()): ?>
                <li class="page-item active"><span class="page-link"><?php echo e($page, false); ?></span></li>
                <?php else: ?>
                <li class="page-item"><a class="page-link" href="<?php echo e($url, false); ?>"><?php echo e($page, false); ?></a></li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <!-- Next Page Link -->
    <?php if($paginator->hasMorePages()): ?>
    <li class="page-item next"><a class="page-link" href="<?php echo e($paginator->nextPageUrl(), false); ?>" rel="next"></a></li>
    <?php else: ?>
    <li class="page-item next disabled"><span class="page-link"></span></li>
    <?php endif; ?>
</ul>
<?php /**PATH /Users/vercetti/Project/lelexiao2/vendor/dcat/laravel-admin/src/../resources/views/grid/pagination.blade.php ENDPATH**/ ?>