<?php

namespace App\Http\Livewire\User;

use App\Models\Category;
use Livewire\Component;

class ReturnAnItemComponent extends Component
{
    public function render()
    {

        $categories = Category::all();
        return view('livewire.user.return-an-item-component',['categories'=>$categories])->layout('layouts.authbase');
    }
}
