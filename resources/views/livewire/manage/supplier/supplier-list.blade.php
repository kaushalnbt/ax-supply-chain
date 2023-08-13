<div x-data="{ open_modal: false }">
    <div class="w-full mx-auto overflow-auto">
        <div class="flex justify-end mb-4">
            <button @click="open_modal = true"
                class="ml-auto font-medium title-font text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-sm">New
                Supplier</button>
        </div>
        <x-table>
            <x-table.thead>
                <x-table.tr class="border-t">
                    <x-table.th>Display Name</x-table.th>
                    <x-table.th>Name</x-table.th>
                    <x-table.th>Parts</x-table.th>
                    <x-table.th>Items</x-table.th>
                    <x-table.th>Address 1</x-table.th>
                    <x-table.th>Address 2</x-table.th>
                    <x-table.th>City</x-table.th>
                    <x-table.th>State</x-table.th>
                    <x-table.th>Zip</x-table.th>
                    <x-table.th>Phone</x-table.th>
                    <x-table.th>Email</x-table.th>
                </x-table.tr>
            </x-table.thead>
            <x-table.tbody>
                @foreach($suppliers as $supplier)
                    <x-table.tr>
                        <x-table.td>{{ $supplier->display_name }}</x-table.td>
                        <x-table.td>{{ $supplier->name }}</x-table.td>
                        <x-table.td><i class="fa fa-solid fa-list" aria-hidden="true"></i></x-table.td>
                        <x-table.td><i class="fa fa-solid fa-list" aria-hidden="true"></i></x-table.td>
                        <x-table.td>{{ $supplier->address1 }}</x-table.td>
                        <x-table.td>{{ $supplier->address2 }}</x-table.td>
                        <x-table.td>{{ $supplier->city }}</x-table.td>
                        <x-table.td>{{ $supplier->state }}</x-table.td>
                        <x-table.td>{{ $supplier->zip }}</x-table.td>
                        <x-table.td>{{ $supplier->phone }}</x-table.td>
                        <x-table.td>{{ $supplier->email }}</x-table.td>
                    </x-table.tr>
                @endforeach
            </x-table.tbody>
        </x-table>
        <div class="pt-4">
            {{ $suppliers->links() }}
        </div>
    </div>
    @livewire('manage.supplier.supplier-form')
</div>