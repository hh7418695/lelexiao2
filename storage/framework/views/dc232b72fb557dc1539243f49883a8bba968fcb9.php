<script>Dcat.wait();</script>

<style>
    .form-content .row {
        margin-right: 0;
        margin-left: 0;
    }
</style>


<?php $__env->startSection('content'); ?>
    <section class="form-content"><?php echo $content; ?></section>
<?php $__env->stopSection(); ?>

<?php echo Dcat\Admin\Admin::asset()->cssToHtml(); ?>

<?php echo Dcat\Admin\Admin::asset()->jsToHtml(); ?>


<?php echo Dcat\Admin\Admin::asset()->styleToHtml(); ?>


<?php echo $__env->yieldContent('content'); ?>

<?php echo Dcat\Admin\Admin::asset()->scriptToHtml(); ?>

<div class="extra-html"><?php echo Dcat\Admin\Admin::html(); ?></div>


<style>.select2-dropdown {z-index: 99999999999}</style>
<?php /**PATH /Users/vercetti/Project/admit/lelexiao2/vendor/dcat/laravel-admin/src/../resources/views/layouts/form-content.blade.php ENDPATH**/ ?>