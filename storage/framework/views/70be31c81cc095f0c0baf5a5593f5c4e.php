<?php $__env->startSection('content'); ?>
    <section class="text-gray-400  body-font">
        <div class="container px-5 py-10 mx-auto flex flex-wrap justify-center">
            <?php if (isset($component)) { $__componentOriginal269900abaed345884ce342681cdc99f6 = $component; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['breadcrumbs' => [
                ['url'=> route('home'), 'name'=> 'Home'],
                ['url'=> '', 'name'=> 'Manage']
            ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
            <div class="grid grid-cols-1 md:grid-cols-2 w-full mt-7 pt-4 gap-10">
                <a href="<?php echo e(route('manage.suppliers')); ?>">
                    <div class="shadow-2xl p-8 flex-col bg-dark hover:bg-gray-700">
                        <div
                            class="w-16 h-16 mb-4 flex items-center justify-center rounded-full bg-secondary text-white text-2xl">
                            <i class="fa fa-handshake-o" aria-hidden="true"></i>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-white text-lg title-font font-medium mb-3">Suppliers</h2>
                            <p class="leading-relaxed text-base">Our suppliers.</p>
                        </div>
                    </div>
                </a>
                <a href="<?php echo e(route('manage.parts')); ?>">
                    <div class="shadow-2xl p-8 flex-col bg-dark hover:bg-gray-700">
                        <div
                            class="w-16 h-16 mb-4 flex items-center justify-center rounded-full bg-secondary text-white text-2xl">
                            <i class="fa fa-pie-chart" aria-hidden="true"></i>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-white text-lg title-font font-medium mb-3">Parts</h2>
                            <p class="leading-relaxed text-base">All parts</p>
                        </div>
                    </div>
                </a>
                <a href="<?php echo e(route('manage.items')); ?>">
                    <div class="shadow-2xl p-8 flex-col bg-dark hover:bg-gray-700">
                        <div
                            class="w-16 h-16 mb-4 flex items-center justify-center rounded-full bg-secondary text-white text-2xl">
                            <i class="fa fa-list" aria-hidden="true"></i>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-white text-lg title-font font-medium mb-3">Items</h2>
                            <p class="leading-relaxed text-base">All Items</p>
                        </div>
                    </div>
                </a>
                <a href="<?php echo e(route('manage.products')); ?>">
                    <div class="shadow-2xl p-8 flex-col bg-dark hover:bg-gray-700">
                        <div
                            class="w-16 h-16 mb-4 flex items-center justify-center rounded-full bg-secondary text-white text-2xl">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-white text-lg title-font font-medium mb-3">Products</h2>
                            <p class="leading-relaxed text-base">Our products</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Supply Chain\ax-supply-chain\resources\views/manage.blade.php ENDPATH**/ ?>