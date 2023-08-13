<div x-data="{ open_modal: false }">
    <div class="w-full mx-auto overflow-auto">
        <div class="flex justify-end mb-4">
            <button @click="open_modal = true"
                class="ml-auto font-medium title-font text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-sm">
                New Part
            </button>
        </div>
        <x-table>
            <x-table.thead>
                <x-table.tr class="border-t">
                    <x-table.th>ID</x-table.th>
                    <x-table.th>
                        <div>Items</div>
                        <div>used in</div>
                    </x-table.th>
                    <x-table.th>Name</x-table.th>
                    <x-table.th>On Hand</x-table.th>
                    <x-table.th>On Order</x-table.th>
                    <x-table.th>Supplier</x-table.th>
                    <x-table.th>Supplier SKU</x-table.th>
                    <x-table.th>Low Point</x-table.th>
                    <x-table.th>Reorder Qty</x-table.th>
                </x-table.tr>
            </x-table.thead>
            <x-table.tbody>
                @foreach($parts as $part)
                    <x-table.tr>
                        <x-table.td>{{ $part->id }}</x-table.td>
                        <x-table.td><i class="fa fa-solid fa-list" aria-hidden="true"></i></x-table.td>
                        <x-table.td>{{ $part->name }}</x-table.td>
                        <x-table.td> <i class="fa fa-solid fa-list" aria-hidden="true"></i></x-table.td>
                        <x-table.td> </x-table.td>
                        <x-table.td>{{ $part->supplierDetails->name }}</x-table.td>
                        <x-table.td>{{ $part->supplier_sku }}</x-table.td>
                        <x-table.td>{{ $part->low_point }}</x-table.td>
                        <x-table.td>{{ $part->reorder_amount }}</x-table.td>
                    </x-table.tr>
                @endforeach
            </x-table.tbody>
        </x-table>
        <div class="pt-4">
            {{ $parts->links() }}
        </div>
    </div>
    {{-- @livewire('manage.supplier.supplier-form') --}}
</div>