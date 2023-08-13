

<?php $__env->startSection('content'); ?>
    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 pt-10 pb-24 mx-auto">
            <?php if (isset($component)) { $__componentOriginal269900abaed345884ce342681cdc99f6 = $component; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['breadcrumbs' => [
                ['url'=> route('home'), 'name'=> 'Home'],
                ['url'=> route('order.index'), 'name'=> 'Order'],
                ['url'=> '', 'name'=> 'Apparel']
            ],'class' => 'pb-10'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Breadcrumb::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal269900abaed345884ce342681cdc99f6)): ?>
<?php $component = $__componentOriginal269900abaed345884ce342681cdc99f6; ?>
<?php unset($__componentOriginal269900abaed345884ce342681cdc99f6); ?>
<?php endif; ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('order.apparel.item-list')->html();
} elseif ($_instance->childHasBeenRendered('cseK8id')) {
    $componentId = $_instance->getRenderedChildComponentId('cseK8id');
    $componentTag = $_instance->getRenderedChildComponentTagName('cseK8id');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('cseK8id');
} else {
    $response = \Livewire\Livewire::mount('order.apparel.item-list');
    $html = $response->html();
    $_instance->logRenderedChild('cseK8id', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Supply Chain\ax-supply-chain\resources\views/order/apparel/apparel.blade.php ENDPATH**/ ?>