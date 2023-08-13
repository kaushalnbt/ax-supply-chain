<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
        <?php echo \Livewire\Livewire::styles(); ?>

    </head>

    <body class="bg-gray-900 text-gray-400">
        <?php echo $__env->make('layouts.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>

        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
        <?php echo \Livewire\Livewire::scripts(); ?>

        <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
</html><?php /**PATH D:\Supply Chain\ax-supply-chain\resources\views/layouts/app.blade.php ENDPATH**/ ?>