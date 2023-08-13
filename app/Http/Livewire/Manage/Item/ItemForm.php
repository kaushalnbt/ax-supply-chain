<?php

namespace App\Http\Livewire\Manage\Item;

use App\Models\Item;
use App\Models\Supplier;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class ItemForm extends Component
{
    use WithFileUploads;
    public $items;
    public $selectedSupplierId;
    public $image;

    public function mount()
    {
        $this->items = Item::all();
    } 

    public function render()
    {
        $suppliers = Supplier::all();

        return view('livewire.manage.item.item-form', compact('suppliers'));
    }

    public function submit($item){
        $validator = Validator::make(
            [
                'name' => $item['name'],
                'category' => $item['category'],
                'archived' => $item['archived'],
                'supplier_id' => $item['supplier_id'] = $this->selectedSupplierId,
                'velocity_calc_type' => $item['velocity_calc_type'],
                'supplier_item_name' => $item['supplier_item_name'],
                'supplier_desc' => $item['supplier_desc'],
                'unit_cost' => $item['unit_cost'],
                'unit_weight' => $item['unit_weight'],
                'low_point' => $item['low_point'],
                'reorder_amount' => $item['reorder_amount'],
                'case_qty' => $item['case_qty'],
                'pallet_qty' => $item['pallet_qty'],
                'case_weight' => $item['case_weight'],
                'pallet_weight' => $item['pallet_weight'],
                'image' => $this->image,
            ],
            [
                "name" => "required",
                "category" => "required",
                "archived" => "required",
                "supplier_id" => "required",
                "velocity_calc_type" => "required",
                "supplier_item_name" => "required",
                "supplier_desc" => "required",
                "unit_cost" => "required",
                "unit_weight" => "required",
                "low_point" => "required",
                "reorder_amount" => "required",
                "case_qty" => "required",
                "pallet_qty" => "required",
                "case_weight" => "required",
                "pallet_weight" => "required",
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]
        );

        if ($validator->fails()) {
            return json_encode(['errors' => $validator->getMessageBag()]);
        }
        
        // if ($this->image) {
        //     $imagePath = $this->image->store('uploads', 'public');
        //     $item['image'] = $imagePath;
        // }
        if ($this->image) {
            // Store the uploaded image and get its path
            $imagePath = $this->image->store('uploads', 'public');
            $item['image'] = $imagePath;
        }

        Item::create($item);

        $this->emit('newItemCreated');
    }
}
