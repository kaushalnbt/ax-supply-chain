<div x-data="{ open_modal: false }">
    <div class="w-full mx-auto overflow-auto">
        <div class="flex justify-end mb-4">
            <button @click="open_modal = true"
                class="ml-auto font-medium title-font text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-sm">
                New Products
            </button>
        </div>
        <x-table>
            <x-table.thead>
                <x-table.tr class="border-t">
                    <x-table.th>SKU</x-table.th>
                    <x-table.th>Items</x-table.th>
                    {{-- <x-table.th class="flex">
                        <div class="flex-grow">Name</div>
                        <div class="flex-grow">Archived</div>
                    </x-table.th> --}}
                    <x-table.th>Name</x-table.th>
                    <x-table.th>Unit Cost</x-table.th>
                    <x-table.th>Sell Price</x-table.th>
                    <x-table.th>Company</x-table.th>
                    <x-table.th>Digital</x-table.th>
                    <x-table.th>Allow in feed</x-table.th>
                </x-table.tr>
            </x-table.thead>
            <x-table.tbody>
                @foreach ($products as $product)
                    <x-table.tr>
                        <x-table.td>{{ $product->sku }}</x-table.td>
                        {{-- <x-table.td><i class="fa fa-solid fa-list" aria-hidden="true"></i></x-table.td> --}}
                        <x-table.td class="flex">
                            <div class="flex-grow"><i class="fa fa-solid fa-list" aria-hidden="true"></i></div>
                            <div class="flex-grow"> ({{ $product->digital }}) </div>
                        </x-table.td>
                        <x-table.td>{{ $product->name }}</x-table.td>
                        <x-table.td>{{ $product->unit_cost }}</x-table.td>
                        <x-table.td>{{ $product->sale_price }}</x-table.td>
                        <x-table.td>{{ $product->company }}</x-table.td>
                        <x-table.td></x-table.td>
                        <x-table.td></x-table.td>
                    </x-table.tr>
                @endforeach
            </x-table.tbody>
        </x-table>
        <div class="pt-4">
            {{ $products->links() }}
        </div>
    </div>
     @livewire('manage.product.product-form')
</div>
