<div class="filter-input col-sm-<?php echo e($width, false); ?>"  style="<?php echo $style; ?>">
    <div class="form-group">
        <div class="input-group input-group-sm">

            <div class="input-group-prepend">
                <span class="input-group-text bg-white text-capitalize"><b><?php echo $label; ?></b>&nbsp;<i class="feather icon-calendar"></i></span>
            </div>

            <input autocomplete="off" type="text" class="form-control" id="<?php echo e($id['start'], false); ?>" placeholder="<?php echo e($label, false); ?>" name="<?php echo e($name['start'], false); ?>" value="<?php echo e(request($name['start'], \Illuminate\Support\Arr::get($value, 'start')), false); ?>">
            <span class="input-group-addon" style="border-left: 0; border-right: 0;">To</span>
            <input autocomplete="off" type="text" class="form-control" id="<?php echo e($id['end'], false); ?>" placeholder="<?php echo e($label, false); ?>" name="<?php echo e($name['end'], false); ?>" value="<?php echo e(request($name['end'], \Illuminate\Support\Arr::get($value, 'end')), false); ?>">
        </div>
    </div>
</div>

<script require="@moment,@bootstrap-datetimepicker">
    var options = <?php echo admin_javascript_json($dateOptions); ?>;

    $('#<?php echo e($id['start'], false); ?>').datetimepicker(options);
    $('#<?php echo e($id['end'], false); ?>').datetimepicker($.extend(options, {useCurrent: false}));
    $("#<?php echo e($id['start'], false); ?>").on("dp.change", function (e) {
        $('#<?php echo e($id['end'], false); ?>').data("DateTimePicker").minDate(e.date);
    });
    $("#<?php echo e($id['end'], false); ?>").on("dp.change", function (e) {
        $('#<?php echo e($id['start'], false); ?>').data("DateTimePicker").maxDate(e.date);
    });
</script><?php /**PATH /Users/vercetti/Project/admit/lelexiao2/vendor/dcat/laravel-admin/src/../resources/views/filter/between-datetime.blade.php ENDPATH**/ ?>