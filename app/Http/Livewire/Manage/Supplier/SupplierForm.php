<?php

namespace App\Http\Livewire\Manage\Supplier;

use App\Models\Supplier;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class SupplierForm extends Component
{
    public function render()
    {
        return view('livewire.manage.supplier.supplier-form');
    }

    public function submit($supplier){
        $validator = Validator::make(
            [
                'display_name' => $supplier['display_name'],
                'name' => $supplier['name'],
                'name_line_2' => $supplier['name2'],
                'address_line_1' => $supplier['address1'],
                'address_line_2' => $supplier['address2'],
                'city' => $supplier['city'],
                'state' => $supplier['state'],
                'zip' => $supplier['zip'],
                'phone' => $supplier['phone'],
                'fax' => $supplier['fax'],
                'email' => $supplier['email'],
            ],
            [
                "name" => "required",
                "email" => "email|nullable",
            ]
        );

        if ($validator->fails()) {
            return json_encode(['errors' => $validator->getMessageBag()]);
        }

        Supplier::create($supplier);

        $this->emit('newSupplierCreated');
    }
}
