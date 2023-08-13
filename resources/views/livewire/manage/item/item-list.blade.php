<div x-data="{ open_modal: false }">
    <div class="w-full mx-auto overflow-auto">
        <div class="flex justify-end mb-4">
            <button @click="open_modal = true"
                class="ml-auto font-medium title-font text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-sm">
                New Items
            </button>
        </div>
        <x-table>
            <x-table.thead>
                <x-table.tr class="border-t">
                    <x-table.th>ID</x-table.th>
                    <x-table.th>Part Map</x-table.th>
                    <x-table.th class="flex">
                        <div class="flex-grow">Name</div>
                        <div class="flex-grow">Archived</div>
                    </x-table.th>
                    <x-table.th>Item Cost</x-table.th>
                    <x-table.th>Item Weight</x-table.th>
                    <x-table.th>Supplier</x-table.th>
                    <x-table.th>Category</x-table.th>
                    <x-table.th>On Hand</x-table.th>
                    <x-table.th>On Order</x-table.th>
                </x-table.tr>
            </x-table.thead>
            <x-table.tbody>
                @foreach ($items as $item)
                    <x-table.tr>
                        <x-table.td>{{ $item->id }}</x-table.td>
                        <x-table.td><i class="fa fa-solid fa-list" aria-hidden="true"></i></x-table.td>
                        <x-table.td class="flex">
                            <div class="flex-grow">{{ $item->name }}</div>
                            <div class="flex-grow"> {{ $item->archived }}</div>
                        </x-table.td>
                        <x-table.td>{{ $item->unit_cost }}</x-table.td>
                        <x-table.td>{{ $item->case_weight }}</x-table.td>
                        <x-table.td>{{ $item->supplier_item_name }}</x-table.td>
                        <x-table.td>{{ $item->category }}</x-table.td>
                        <x-table.td class="flex">
                            <div class="flex-grow">{{ $item->pallet_qty }}</div>
                            <div class="flex-grow"><i class="fa fa-solid fa-list" aria-hidden="true"></i></div>
                        </x-table.td>
                        <x-table.td></x-table.td>
                    </x-table.tr>
                @endforeach
            </x-table.tbody>
        </x-table>
        <div class="pt-4">
            {{ $items->links() }}
        </div>
    </div>
    @livewire('manage.item.item-form')
</div>
