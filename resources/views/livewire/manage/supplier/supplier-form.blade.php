<x-modal x-show="open_modal" wire:ignore body_class="flex flex-col" x-data="supplier_form">
    <x-slot name="header">
        <h2 class="flex justify-between ">
            <span>New Supplier</span>
            <span>
                <i @click="open_modal = false" class="fa fa-times text-red-500 cursor-pointer" aria-hidden="true"></i>
            </span>
        </h2>
    </x-slot>
    <x-inputs.input-group label="Display Name" for="display_name">
        <x-inputs.input type="text" id="display_name" x-model="form_values.display_name"/>
        <x-slot name="error" x-show="errors.display_name"><span x-text="errors.display_name"></span></x-slot>
    </x-inputs.input-group>

    <x-inputs.input-group label="Name" for="name">
        <x-inputs.input type="text" id="name" x-model="form_values.name"/>
        <x-slot name="error" x-show="errors.name"><span x-text="errors.name"></span></x-slot>
    </x-inputs.input-group>

    <x-inputs.input-group label="Name Line 2" for="name_line_2">
        <x-inputs.input type="text" id="name_line_2" x-model="form_values.name2"/>
    </x-inputs.input-group>

    <x-inputs.input-group label="Address Line 1" for="address_line_1">
        <x-inputs.input type="text" id="address_line_1" x-model="form_values.address1"/>
    </x-inputs.input-group>

    <x-inputs.input-group label="Address Line 2" for="address_line_2">
        <x-inputs.input type="text" id="address_line_2" x-model="form_values.address2"/>
    </x-inputs.input-group>

    <x-inputs.input-group label="City" for="city">
        <x-inputs.input type="text" id="city" x-model="form_values.city"/>
    </x-inputs.input-group>

    <x-inputs.input-group label="State" for="state">
        <x-inputs.input type="text" id="state" x-model="form_values.state"/>
    </x-inputs.input-group>

    <x-inputs.input-group label="Zip" for="zip">
        <x-inputs.input type="text" id="zip" x-model="form_values.zip"/>
    </x-inputs.input-group>

    <x-inputs.input-group label="Phone" for="phone">
        <x-inputs.input type="text" id="phone" x-model="form_values.phone"/>
    </x-inputs.input-group>

    <x-inputs.input-group label="Fax" for="fax">
        <x-inputs.input type="text" id="fax" x-model="form_values.fax"/>
    </x-inputs.input-group>

    <x-inputs.input-group label="Email" for="email">
        <x-inputs.input type="email" id="email" x-model="form_values.email"/>
        <x-slot name="error" x-show="errors.email"><span x-text="errors.email"></span></x-slot>
    </x-inputs.input-group>

    {{-- <x-inputs.input-group label="Order Template" for="order_template">
        <x-inputs.select>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
        </x-inputs.select>
    </x-inputs.input-group> --}}


    <x-slot name="footer">
        <button 
            class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" x-on:click="submit">Save</button>
        <button
            class="mt-4 text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" x-on:click="reset">Reset</button>
    </x-slot>
</x-modal>


<x-loader wire:loading>
</x-loader>


@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('supplier_form', () => ({
                form_values: {
                    display_name : '',
                    name : '',
                    name2 : '',
                    address1 : '',
                    address2 : '',
                    city : '',
                    state : '',
                    zip : '',
                    phone : '',
                    fax : '',
                    email : '',
                },
                errors: [],
                async submit() {
                    this.errors = [];
                    await this.$wire.submit(this.form_values).then(result => { 
                        if(result && JSON.parse(result).errors){
                            this.errors = JSON.parse(result).errors;
                        }else{
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
                        display_name : '',
                        name : '',
                        name2 : '',
                        address1 : '',
                        address2 : '',
                        city : '',
                        state : '',
                        zip : '',
                        phone : '',
                        fax : '',
                        email : '',
                    };
                }
            }));
            
        });
        
    </script>
@endpush
