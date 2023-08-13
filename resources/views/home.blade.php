@extends('layouts.app')

@section('content')
    <section class="text-gray-400  body-font">
        <div class="container px-5 py-10 mx-auto flex flex-wrap justify-center">
            <x-breadcrumb :breadcrumbs="[
                ['url'=> route('home'), 'name'=> 'Home']
            ]">
            </x-breadcrumb>
            <div class="grid grid-cols-1 md:grid-cols-2 w-full mt-7 pt-4 gap-10">
                <a href="{{ route('order.index') }}">
                    <div class="shadow-2xl p-8 flex-col bg-dark hover:bg-gray-700">
                        <div
                            class="w-16 h-16 mb-4 flex items-center justify-center rounded-full bg-secondary text-white text-2xl">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-white text-lg title-font font-medium mb-3">Order</h2>
                            <p class="leading-relaxed text-base">Order your favorite product from the wide range of
                                products we provide, which gives you lot of variety.</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="shadow-2xl p-8 flex-col bg-dark hover:bg-gray-700">
                        <div
                            class="w-16 h-16 mb-4 flex items-center justify-center rounded-full bg-secondary text-white text-2xl">
                            <i class="fa fa-usd" aria-hidden="true"></i>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-white text-lg title-font font-medium mb-3">Transact</h2>
                            <p class="leading-relaxed text-base">Complete the transaction process, we support many
                                transaction methods so you can use one suits you.</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="shadow-2xl p-8 flex-col bg-dark hover:bg-gray-700">
                        <div
                            class="w-16 h-16 mb-4 flex items-center justify-center rounded-full bg-secondary text-white text-2xl">
                            <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-white text-lg title-font font-medium mb-3">Analyze</h2>
                            <p class="leading-relaxed text-base">We provide complete analysis here, please check it out
                                you will get better clearity and understanding.</p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manage.index') }}">
                    <div class="shadow-2xl p-8 flex-col bg-dark hover:bg-gray-700">
                        <div
                            class="w-16 h-16 mb-4 flex items-center justify-center rounded-full bg-secondary text-white text-2xl">
                            <i class="fa fa-database" aria-hidden="true"></i>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-white text-lg title-font font-medium mb-3">Manage</h2>
                            <p class="leading-relaxed text-base">Manage your all orders from here, we give you full
                                control of all of your orders. Check it out.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
