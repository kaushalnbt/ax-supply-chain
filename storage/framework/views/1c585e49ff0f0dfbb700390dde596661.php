<div class="relative mb-4">
    <label for="<?php echo e($for); ?>" class="leading-7 text-sm text-gray-400 block"><?php echo e($label); ?></label>
    <?php echo e($slot); ?>

    <?php if(isset($error)): ?>
        <p class="text-red-500 text-sm">
            <?php echo e($error); ?>

        </p>
    <?php endif; ?>
</div><?php /**PATH D:\Supply Chain\ax-supply-chain\resources\views/components/inputs/input-group.blade.php ENDPATH**/ ?>