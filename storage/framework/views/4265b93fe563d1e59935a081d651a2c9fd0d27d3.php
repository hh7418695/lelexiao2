<div class="<?php echo e($viewClass['form-group'], false); ?>">

    <div  class="<?php echo e($viewClass['label'], false); ?> control-label">
        <span><?php echo $label; ?></span>
    </div>

    <div class="<?php echo e($viewClass['field'], false); ?>">

        <?php echo $__env->make('admin::form.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <select class="form-control <?php echo e($class, false); ?>" style="width: 100%!important;" name="<?php echo e($name, false); ?>[]" multiple="multiple" data-placeholder="<?php echo e($placeholder, false); ?>" <?php echo $attributes; ?> >
            <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $select => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($select, false); ?>" <?php echo e(in_array($select, (array) $value) ?'selected':'', false); ?>><?php echo e($option, false); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <input type="hidden" name="<?php echo e($name, false); ?>[]" />

        <?php echo $__env->make('admin::form.help-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>

<?php echo $__env->make('admin::form.select-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /Users/vercetti/Project/admit/lelexiao2/vendor/dcat/laravel-admin/src/../resources/views/form/multipleselect.blade.php ENDPATH**/ ?>