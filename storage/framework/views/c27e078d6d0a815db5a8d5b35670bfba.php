<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['body_class']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['body_class']); ?>
<?php foreach (array_filter((['body_class']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php echo e($attributes->merge(['class' => 'flex justify-center' ])); ?>>
    <div class="fixed h-5/6 top-14 lg:w-2/6 md:w-1/2 bg-gray-800 rounded-lg p-8 md:mx-auto w-full mt-10 md:mt-0 <?php echo e(isset($body_class) ? $body_class : ""); ?>">
        <div class="text-lg font-medium title-font mb-5">
            <?php echo e($header); ?>

        </div>
        <div class="overflow-y-scroll [&::-webkit-scrollbar]:hidden [-ms-overflow-style:'none'] [scrollbar-width:'none']">
            <?php echo e($slot); ?>

        </div>
        <?php echo e($footer); ?>

    </div>
</div><?php /**PATH D:\Supply Chain\ax-supply-chain\resources\views/components/modal.blade.php ENDPATH**/ ?>