<?php

namespace App\Http\Livewire\Manage\Supplier;

use App\Models\Supplier;
use Livewire\Component;
use Livewire\WithPagination;

class SupplierList extends Component
{
    use WithPagination;

    protected $listeners = ['newSupplierCreated' => 'handleNewSupplierCreation'];

    public function render()
    {
        return view('livewire.manage.supplier.supplier-list',[
            'suppliers' => Supplier::paginate(10)
        ]);
    }

    public function handleNewSupplierCreation(){
        // $this->render();
        $this->gotoPage(Supplier::paginate(10)->lastPage());
    }
}
