<x-modal x-show="open_modal" wire:ignore body_class="flex flex-col" x-data="product_form">
    <x-slot name="header">
        <h2 class="flex justify-between ">
            <span>New Product</span>
            <span>
                <i @click="open_modal = false" class="fa fa-times text-red-500 cursor-pointer" aria-hidden="true"></i>
            </span>
        </h2>
    </x-slot>

    <x-inputs.input-group label="Name" for="name">
        <x-inputs.input type="text" id="name" x-model="form_values.name" />
        <x-slot name="error" x-show="errors.name"><span x-text="errors.name"></span></x-slot>
    </x-inputs.input-group>

    <x-inputs.input-group label="SKU" for="sku">
        <x-inputs.input type="text" id="sku" x-model="form_values.sku" />
    </x-inputs.input-group>

    <x-inputs.input-group label="Unit Cost" for="unit_cost">
        <x-inputs.input type="text" id="unit_cost" x-model="form_values.unit_cost" />
    </x-inputs.input-group>

    <x-inputs.input-group label="Sale Price" for="sale_price">
        <x-inputs.input type="text" id="sale_price" x-model="form_values.sale_price" />
    </x-inputs.input-group>

    <x-inputs.input-group label="Company" for="company">
        <x-inputs.input type="text" id="company" x-model="form_values.company" />
    </x-inputs.input-group>

    <div class="flex">
        <div class="flex-grow">
        <x-inputs.input-group label="Digital" for="digital" >
            <x-inputs.input type="checkbox" id="digital" x-model="form_values.digital"  />
        </x-inputs.input-group>
        </div>
        <div class="flex-grow">
        <x-inputs.input-group label="Archive" for="archive">
            <x-inputs.input type="checkbox" id="archive" x-model="form_values.archive"  />
        </x-inputs.input-group>
        </div>
        <div class="flex-grow">
        <x-inputs.input-group label="In Feed" for="allow_in_feed" >
            <x-inputs.input type="checkbox" id="allow_in_feed" x-model="form_values.allow_in_feed"/>
        </x-inputs.input-group>
        </div>
    </div>

    <x-inputs.input-group label="Sub Category" for="sub_category">
        <x-inputs.input type="text" id="sub_category" x-model="form_values.sub_category" />
    </x-inputs.input-group>

    <x-inputs.input-group label="Tags" for="tags">
        <x-inputs.input type="text" id="tags" x-model="form_values.tags" />
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
            Alpine.data('product_form', () => ({
                form_values: {
                    name: '',
                    sku: '',
                    unit_cost: '',
                    sale_price: '',
                    company: '',
                    digital: '',
                    archive: '',
                    allow_in_feed: '',
                    sub_category: '',
                    tags: '',
                },
                errors: [],
                async submit() {
                    this.errors = [];
                    await this.$wire.submit(this.form_values).then(result => {
                        if (result && JSON.parse(result).errors) {
                            this.errors = JSON.parse(result).errors;
                        } else {
                            this.open_modal = false;
                            this.reset();
                            Swal.fire({
                                title: 'Success!',
                                text: 'Supplier Saved Successfully.',
                                icon: 'success',
                                theme: 'dark', // Specify the theme option as 'dark'
                            });
                        }
                    });
                },
                reset() {
                    this.form_values = {
                        name: '',
                        sku: '',
                        unit_cost: '',
                        sale_price: '',
                        company: '',
                        digital: '',
                        archive: '',
                        allow_in_feed: '',
                        sub_category: '',
                        tags: '',
                    };
                }
            }));

        });
    </script>
@endpush
