<?php

namespace App\Http\Livewire\Manage\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    protected $listeners = ['newProductCreated' => 'ProductCreation'];

    public function render()
    {
        return view('livewire.manage.product.product-list',[
            'products' => Product::paginate(10)
        ]);
    }
   

    public function handleNewSupplierCreation(){
        // $this->render();
        $this->gotoPage(Product::paginate(10)->lastPage());
    }
}
