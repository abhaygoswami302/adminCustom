<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class AdminProductCreate extends Component
{
    public $form = [
        'name' => '',
        'price' => '',
        'quantity' => '',
        'model_name' => '',
        'description' => '',
    ];

    public function ProductStore()
    {
        $this->validate([
            'form.name' => 'required|min:3|unique:products,name',
            'form.price' => 'required|numeric',
            'form.quantity' => 'required|numeric',
            'form.model_name' => 'required',
            'form.description' => 'required',
        ]);

        //dd($this->form);
        Product::create($this->form);

        return redirect()->route('products.index')->with('message', 'New Product Inserted Successfully');
    }

    public function render()
    {
        return view('livewire.admin-product-create');
    }
}
