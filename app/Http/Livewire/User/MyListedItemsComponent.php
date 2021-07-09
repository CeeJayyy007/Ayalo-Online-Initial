<?php

namespace App\Http\Livewire\User;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class MyListedItemsComponent extends Component
{
    use WithPagination;
    public $owner_id;
    public function render()
    {

        $this->owner_id = Auth::user()->id;
        $products = Product::where('user_id',$this->owner_id)->paginate(10);
        $categories = Category::all();
        return view('livewire.user.my-listed-items-component',[
            'categories'=>$categories,
            'products' => $products
            ])->layout('layouts.authbase');
    }
}
