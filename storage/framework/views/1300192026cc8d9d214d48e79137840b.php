<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['class' => ""]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['class' => ""]); ?>
<?php foreach (array_filter((['class' => ""]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<thead <?php echo e($attributes); ?>>
    <?php echo e($slot); ?>

</thead><?php /**PATH D:\Supply Chain\ax-supply-chain\resources\views/components/table/thead.blade.php ENDPATH**/ ?>