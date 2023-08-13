@extends('layouts.app')

@section('content')
    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 pt-10 pb-24 mx-auto">
            <x-breadcrumb :breadcrumbs="[
                ['url'=> route('home'), 'name'=> 'Home'],
                ['url'=> route('order.index'), 'name'=> 'Order'],
                ['url'=> '', 'name'=> 'Apparel']
            ]" class="pb-10">
            </x-breadcrumb>
            @livewire('order.apparel.item-list')
        </div>
    </section>
@endsection