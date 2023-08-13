<?php

namespace App\Http\Livewire\Order;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{
    public function render()
    {
        $item_category = Item::where('category', '=', 'Supplements')->get();
        
        return view('livewire.order.supplement.item-list')->with('item_category', $item_category);
    }
}
