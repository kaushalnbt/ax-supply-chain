<?php

namespace App\Http\Livewire\Order\Apparel;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class Create extends Component
{
    public $selectedItems = [];

    public function mount($selectedItems)
    {
        $this->selectedItems = $selectedItems;
    }

    public function render()
    {
        return view('livewire.order.apparel.create');
    }
    public function createItems()
    {
        return Redirect::route('create.order', ['selectedItems' => $this->selectedItems]);
    }
}
