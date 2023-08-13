<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('auth.login')->html();
} elseif ($_instance->childHasBeenRendered('5yYgxna')) {
    $componentId = $_instance->getRenderedChildComponentId('5yYgxna');
    $componentTag = $_instance->getRenderedChildComponentTagName('5yYgxna');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5yYgxna');
} else {
    $response = \Livewire\Livewire::mount('auth.login');
    $html = $response->html();
    $_instance->logRenderedChild('5yYgxna', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Supply Chain\ax-supply-chain\resources\views/auth/login.blade.php ENDPATH**/ ?>