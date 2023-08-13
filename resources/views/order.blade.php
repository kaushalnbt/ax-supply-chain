{{dd($category)}}
@extends('layouts.app')

@section('content')
    <section class="text-gray-400  body-font">
        <div class="container px-5 py-10 mx-auto flex flex-wrap justify-center">
            <x-breadcrumb :breadcrumbs="[
                ['url'=> route('home'), 'name'=> 'Home'],
                ['url'=> '', 'name'=> 'Order']
            ]">
            </x-breadcrumb>
            <div class="grid grid-cols-1 md:grid-cols-2 w-full mt-7 pt-4 gap-10">
                <div class="w-full">
                    <a href="{{ route('order.supplements') }}">
                        <div class="flex border-tertiary p-8 flex-col bg-dark hover:bg-gray-700 shadow-2xl">
                            <div class="flex items-center justify-center">
                                <img src="{{ asset('storage\menu-stack-30g.webp') }}" class="h-48">
                            </div>
                            <div class="flex-grow">
                                <h2 class="text-white text-xl mt-4 text-center title-font font-medium mb-3">{{$category->category}}</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w-full">
                    <a href="{{ route('order.apparel') }}">
                        <div class="flex border-tertiary p-8 flex-col bg-dark hover:bg-gray-700 shadow-2xl">
                            <div class="flex items-center justify-center">
                                <img src="{{ asset('storage\B-RBEAST-front.webp') }}" class="h-48">
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
                                <img src="{{ asset('assets/images/xtreme-band.webp') }}" class="h-48">
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
                                <img src="{{ asset('assets/images/parts.jpg') }}" class="h-48">
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
@endsection
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