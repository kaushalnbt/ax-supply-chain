<!-- Place your HTML and Blade code for the create page here -->
<!-- For example: -->
<div class="container mx-auto">
    <h1>Create Order</h1>
    <p>Selected Items:</p>
    <ul>
        <?php $__currentLoopData = $selectedItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemId): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($itemId); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <!-- Add more HTML and Blade code for the create page as needed -->
</div>
<?php /**PATH D:\Supply Chain\ax-supply-chain\resources\views/livewire/order/apparel/create.blade.php ENDPATH**/ ?>