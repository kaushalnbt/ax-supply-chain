<div class="flex flex-wrap w-full <?php echo e($class); ?>">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3 ">
            <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($breadcrumb['url']): ?>
                    <li>
                        <div class="flex items-center">
                            <a href="<?php echo e($breadcrumb['url']); ?>" class="body-font dark:text-gray-400 dark:hover:text-white"><?php echo e($breadcrumb['name']); ?></a>
                        </div>
                    </li>
                <?php else: ?>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <a class="text-gray-500 dark:text-gray-400" href="<?php echo e($breadcrumb['url']); ?>"><?php echo e($breadcrumb['name']); ?></a>
                        </div>
                    </li>
                <?php endif; ?>
                <?php if(!$loop->last): ?>
                    <li class="flex items-center pt-1">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>
    </nav>
</div><?php /**PATH D:\Supply Chain\ax-supply-chain\resources\views/components/breadcrumb.blade.php ENDPATH**/ ?>