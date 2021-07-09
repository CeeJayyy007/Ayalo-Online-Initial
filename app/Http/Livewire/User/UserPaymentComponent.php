<?php

namespace App\Http\Livewire\User;

use App\Models\Category;
use Livewire\Component;

class UserPaymentComponent extends Component
{
    public function render()
    {
      // return view('livewire.user.user-payment-component');
      $categories = Category::all();
      return view('livewire.user.user-payment-component',['categories'=>$categories])->layout('layouts.authbase');
    }
}
