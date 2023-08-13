<x-modal x-show="open_modal" wire:ignore body_class="flex flex-col" x-data="item_form">
    <x-slot name="header">
        <h2 class="flex justify-between ">
            <span>New Item</span>
            <span>
                <i @click="open_modal = false" class="fa fa-times text-red-500 cursor-pointer" aria-hidden="true"></i>
            </span>
        </h2>
    </x-slot>

    <x-inputs.input-group label="Name" for="name">
        <x-inputs.input type="text" id="name" x-model="form_values.name" />
        <x-slot name="error" x-show="errors.name"><span x-text="errors.name"></span></x-slot>
    </x-inputs.input-group>

    <x-inputs.input-group label="Category" for="category" >
        <x-inputs.select x-model="form_values.category">
            <option value="Apparel">Apparel</option>
            <option value="Other">Other</option>
            <option value="Supplements">Supplements</option>
        </x-inputs.select>
    </x-inputs.input-group>

    <div class="flex">
    <x-inputs.input-group label="Archived" for="archived">
        <div class="flex-grow">
        <x-inputs.input type="checkbox" id="archived" x-model="form_values.archived" />
        </div>
    </x-inputs.input-group>
    </div>

    <div class="flex">
    <x-inputs.input-group label="Supplier" for="supplier_id">
        <div class="flex-grow">
        <x-inputs.select wire:model="selectedSupplierId">
                <option value="">Select Supplier Name</option>
            @foreach ($suppliers as $supplier)
                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
            @endforeach
        </x-inputs.select>
        </div>
    </x-inputs.input-group>

    <x-inputs.input-group label="Velocity Based On" for="velocity_calc_type">
        <div class="flex-grow">
        <x-inputs.select x-model="form_values.velocity_calc_type">
            <option value="sales">Sales</option>
            <option value="inv">Inv Change</option>
        </x-inputs.select>
        </div>
    </x-inputs.input-group>
    </div>

    <x-inputs.input-group label="Supplier Item Name" for="supplier_item_name">
        <x-inputs.input type="text" id="supplier_item_name" x-model="form_values.supplier_item_name" />
    </x-inputs.input-group>

    <x-inputs.input-group label="Supplier Description" for="supplier_desc">
        <x-inputs.input type="text" id="supplier_desc" x-model="form_values.supplier_desc" />
    </x-inputs.input-group>

    <x-inputs.input-group label="Item Cost Per Unit" for="unit_cost">
        <x-inputs.input type="text" id="unit_cost" x-model="form_values.unit_cost" />
    </x-inputs.input-group>

    <x-inputs.input-group label="Unit Weight (lbs)" for="unit_weight">
        <x-inputs.input type="text" id="unit_weight" x-model="form_values.unit_weight" />
    </x-inputs.input-group>

    <x-inputs.input-group label="Low Point" for="low_point">
        <x-inputs.input type="text" id="low_point" x-model="form_values.low_point" />
    </x-inputs.input-group>

    <x-inputs.input-group label="Reorder Amount" for="reorder_amount">
        <x-inputs.input type="text" id="reorder_amount" x-model="form_values.reorder_amount" />
    </x-inputs.input-group>

    <x-inputs.input-group label="Case Quantity" for="case_qty">
        <x-inputs.input type="text" id="case_qty" x-model="form_values.case_qty" />
    </x-inputs.input-group>

    <x-inputs.input-group label="Pallet Quantity" for="pallet_qty">
        <x-inputs.input type="text" id="pallet_qty" x-model="form_values.pallet_qty" />
    </x-inputs.input-group>

    <x-inputs.input-group label="Case Weight (lbs)" for="case_weight">
        <x-inputs.input type="text" id="case_weight" x-model="form_values.case_weight" />
    </x-inputs.input-group>

    <x-inputs.input-group label="Pallet Weight (lbs)" for="pallet_weight">
        <x-inputs.input type="text" id="pallet_weight" x-model="form_values.pallet_weight" />
    </x-inputs.input-group>

    <x-inputs.input-group label="Upload Thumbnail" for="image">
        <input type="file" id="image" wire:model="image" />
    </x-inputs.input-group>

    <x-slot name="footer">
        <button
            class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
            x-on:click="submit">Save</button>
        <button
            class="mt-4 text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
            x-on:click="reset">Reset</button>
    </x-slot>
</x-modal>


<x-loader wire:loading>
</x-loader>


@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('item_form', () => ({
                form_values: {
                    name: '',
                    category: '',
                    archived: '',
                    supplier_id: '',
                    velocity_calc_type: '',
                    supplier_item_name: '',
                    supplier_desc: '',
                    unit_cost: '',
                    unit_weight: '',
                    low_point: '',
                    reorder_amount: '',
                    case_qty: '',
                    pallet_qty: '',
                    case_weight: '',
                    pallet_weight: '',
                    image: '',
                },
                errors: [],
                async submit() {
                    this.errors = [];
                    await this.$wire.submit({...this.form_values, image: this.image}).then(result => {
                        if (result && JSON.parse(result).errors) {
                            this.errors = JSON.parse(result).errors;
                        } else {
                            this.open_modal = false;
                            this.reset();
                            Swal.fire({
                                title: 'Success!',
                                text: 'Item Saved Successfully.',
                                icon: 'success',
                                theme: 'dark', // Specify the theme option as 'dark'
                            });
                        }
                    });
                },
                reset() {
                    this.form_values = {
                        name: '',
                        category: '',
                        archived: '',
                        supplier_id: '',
                        velocity_calc_type: '',
                        supplier_item_name: '',
                        supplier_desc: '',
                        unit_cost: '',
                        unit_weight: '',
                        low_point: '',
                        reorder_amount: '',
                        case_qty: '',
                        pallet_qty: '',
                        case_weight: '',
                        pallet_weight: '',
                        image: '',
                    };
                }
            }));

        });
    </script>
@endpush
