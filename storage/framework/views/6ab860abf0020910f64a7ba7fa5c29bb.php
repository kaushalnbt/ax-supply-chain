<?php echo e(dd($category)); ?>



<?php $__env->startSection('content'); ?>
    <section class="text-gray-400  body-font">
        <div class="container px-5 py-10 mx-auto flex flex-wrap justify-center">
            <?php if (isset($component)) { $__componentOriginal269900abaed345884ce342681cdc99f6 = $component; } ?>
<?php $component = App\View\Components\Breadcrumb::resolve(['breadcrumbs' => [
                ['url'=> route('home'), 'name'=> 'Home'],
                ['url'=> '', 'name'=> 'Order']
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
                <div class="w-full">
                    <a href="<?php echo e(route('order.supplements')); ?>">
                        <div class="flex border-tertiary p-8 flex-col bg-dark hover:bg-gray-700 shadow-2xl">
                            <div class="flex items-center justify-center">
                                <img src="<?php echo e(asset('storage\menu-stack-30g.webp')); ?>" class="h-48">
                            </div>
                            <div class="flex-grow">
                                <h2 class="text-white text-xl mt-4 text-center title-font font-medium mb-3">Supplements</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w-full">
                    <a href="<?php echo e(route('order.apparel')); ?>">
                        <div class="flex border-tertiary p-8 flex-col bg-dark hover:bg-gray-700 shadow-2xl">
                            <div class="flex items-center justify-center">
                                <img src="<?php echo e(asset('storage\B-RBEAST-front.webp')); ?>" class="h-48">
                            </div>
                            <div class="flex-grow">
                                <h2 class="text-white text-xl mt-4 text-center title-font font-medium mb-3">Apparel</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w-full">
                    <a href="#">
                        <div class="flex border-tertiary p-8 flex-col bg-dark hover:bg-gray-700 shadow-2xl">
                            <div class="flex items-center justify-center">
                                <img src="<?php echo e(asset('assets/images/xtreme-band.webp')); ?>" class="h-48">
                            </div>
                            <div class="flex-grow">
                                <h2 class="text-white text-xl mt-4 text-center title-font font-medium mb-3">Equipment</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w-full">
                    <a href="#">
                        <div class="flex border-tertiary p-8 flex-col bg-dark hover:bg-gray-700 shadow-2xl">
                            <div class="flex items-center justify-center">
                                <img src="<?php echo e(asset('assets/images/parts.jpg')); ?>" class="h-48">
                            </div>
                            <div class="flex-grow">
                                <h2 class="text-white text-xl mt-4 text-center title-font font-medium mb-3">Parts</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    background: '#E1E4E9',
                    text: '#272C2F',
                    secondary: '#C40000',
                    tertiary: "#999999",
                    dark: "#1E2534",
                }
            }
        }
    }
</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Supply Chain\ax-supply-chain\resources\views/order.blade.php ENDPATH**/ ?>