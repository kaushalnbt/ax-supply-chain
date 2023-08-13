<?php

namespace App\Http\Livewire\Manage\Item;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination;

class ItemList extends Component
{
    use WithPagination;

    protected $listeners = ['newItemCreated' => 'ItemCreation'];

    public function render()
    {
        return view('livewire.manage.item.item-list',[
            'items' => Item::paginate(10)
        ]);
    }

    public function handleNewSupplierCreation(){
        // $this->render();
        $this->gotoPage(Item::paginate(10)->lastPage());
    }
}
