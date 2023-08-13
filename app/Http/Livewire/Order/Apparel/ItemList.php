<?php

namespace App\Http\Livewire\Order\Apparel;

use App\Models\Item;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class ItemList extends Component
{
    use WithPagination;

    public function render()
    {
        $item_category = Item::where('category', '=', 'Apparel')->get();

        return view('livewire.order.apparel.item-list', compact('item_category'));
    }

    public function toggleItem($itemId)
    {
        $selectedItems = session('selected_items', []);
        if (in_array($itemId, $selectedItems)) {
            $selectedItems = array_diff($selectedItems, [$itemId]);
        } else {
            $selectedItems[] = $itemId;
        }
        session(['selected_items' => $selectedItems]);
    }

    public function createItems()
    {
        $selectedItems = session('selected_items', []);
        return redirect()->route('order.apparel.create', ['selected_items' => $selectedItems]);
    }
    public function createPO(Request $request)
    {
        $selectedItemIds = $request->input('selectedItems', []);
        $selectedItems = Item::whereIn('id', $selectedItemIds)->get();

        return view('livewire.order.apparel.create', compact('selectedItems'));
    }
}
