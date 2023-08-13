<?php

namespace App\Http\Livewire\Manage\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ProductForm extends Component
{
    public function render()
    {
        return view('livewire.manage.product.product-form');
    }

    public function submit($product){
        $validator = Validator::make(
            [
                'name' => $product['name'],
                'sku' => $product['sku'],
                'unit_cost' => $product['unit_cost'],
                'sale_price' => $product['sale_price'],
                'company' => $product['company'],
                'digital' => $product['digital'],
                'archive' => $product['archive'],
                'allow_in_feed' => $product['allow_in_feed'],
                'sub_category' => $product['sub_category'],
                'tags' => $product['tags'],
            ],
            [
                "name" => "required",
                "sku" => "required",
                "unit_cost" => "required",
                "sale_price" => "required",
                "company" => "required",
                "digital" => "required",
                "archive" => "required",
                "allow_in_feed" => "required",
                "sub_category" => "required",
                "tags" => "required",
            ]
        );

        if ($validator->fails()) {
            return json_encode(['errors' => $validator->getMessageBag()]);
        }

        Product::create($product);

        $this->emit('newProductCreated');
    }
}
