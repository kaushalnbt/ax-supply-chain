@props(['class' => ""])

<table {{ $attributes->merge(['class' => 'table-auto w-full text-left whitespace-no-wrap border-b border-gray-500 ']) }}>
    {{ $slot }}
</table>    