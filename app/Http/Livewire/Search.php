<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class Search extends Component
{
    public $search = '', $searchResult = [], $searchResult2 = [];

    public function render()
    {
        $searchString = '%'. $this->search . '%';

        if($this->search<> null){
            $this->searchResult = User::where('name', 'like', $searchString)->get();
            $this->searchResult2 = Product::where('name', 'like', $searchString)->get();
        }else{
            $this->searchResult = [];
            $this->searchResult2 = [];
        }

        return view('livewire.search');
    }
}
