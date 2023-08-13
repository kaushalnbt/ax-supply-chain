<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <style>
        .round {
            position: relative;
        }

        .round label {
            border: 1px solid transparent;
            border-radius: 50%;
            cursor: pointer;
            height: 28px;
            left: 0;
            position: absolute;
            top: 0;
            width: 28px;
        }

        .round label:after {
            border: 2px solid #fff;
            border-top: none;
            border-right: none;
            content: "";
            height: 6px;
            left: 7px;
            opacity: 0;
            position: absolute;
            top: 8px;
            transform: rotate(-45deg);
            width: 12px;
        }

        .round input[type="checkbox"] {
            visibility: hidden;
        }

        .round input[type="checkbox"]:checked+label {
            background-color: #66bb6a;
            border-color: #66bb6a;
        }

        .round input[type="checkbox"]:checked+label:after {
            opacity: 1;
        }
    </style>
</head>

<div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
        <?php $__currentLoopData = $item_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="w-full flex-col divide-y-2 divide-gray-600 ">
                <div class="relative">
                    <label for="checkbox1<?php echo e($item->id); ?>">
                        <div class="block h-48 rounded bg-dark shadow-2xl cursor-pointer hover:bg-gray-700">
                            <img alt="ecommerce" class="object-center object-contain w-full h-full block"
                                src="<?php echo e(asset('assets/images/pro-30g-vegan-3.webp')); ?>">
                        </div>
                        <div
                            class="absolute inline-flex items-center justify-center w-10 h-10 text-xs font-bold text-white rounded-full -top-6 -right-3">
                            <div class="round">
                                <input type="checkbox" id="checkbox1<?php echo e($item->id); ?>" />
                                <label for="checkbox1<?php echo e($item->id); ?>"></label>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="mt-4 py-4">

                    <h2 class="text-white title-font text-lg font-medium"><?php echo e($item->name); ?></h2>
                    <button
                        class="inline-flex my-2 text-white bg-green-500 border-0 py-1 px-4 focus:outline-none rounded text-sm">Add</button>
                    <button
                        class="inline-flex my-2 text-white bg-secondary border-0 py-1 px-4 focus:outline-none rounded text-sm">Remove</button>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<div class="flex justify-center">
    <a href="./order.html"
        class="text-lg text-white flex items-center bg-green-500 border-0 py-2 px-3 focus:outline-none hover:bg-green-800 rounded text-base mt-4 md:mt-0">Create<svg
            fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            class="w-4 h-4 ml-1 mt-1" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg></a>
</div>
<?php /**PATH D:\Supply Chain\ax-supply-chain\resources\views/livewire/order/supplement/item-list.blade.php ENDPATH**/ ?>