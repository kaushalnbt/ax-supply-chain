@props(['body_class'])

<div {{ $attributes->merge(['class' => 'flex justify-center' ]) }}>
    <div class="fixed h-5/6 top-14 lg:w-2/6 md:w-1/2 bg-gray-800 rounded-lg p-8 md:mx-auto w-full mt-10 md:mt-0 {{ isset($body_class) ? $body_class : "" }}">
        <div class="text-lg font-medium title-font mb-5">
            {{ $header }}
        </div>
        <div class="overflow-y-scroll [&::-webkit-scrollbar]:hidden [-ms-overflow-style:'none'] [scrollbar-width:'none']">
            {{ $slot }}
        </div>
        {{ $footer }}
    </div>
</div>