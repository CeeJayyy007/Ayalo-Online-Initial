<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\City;
use App\Models\Product;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class HomepageComponent extends Component
{
   public $city_id;
    
    public function render()
    {

        
        $latest_items = Product::orderBy('created_at',"DESC")->paginate(4);
        $top_rated_items = Product::all()->random(4);
        
        $available_items = Product::where('availability','available')->paginate(4);
        $categories = Category::all();


        return view('livewire.homepage-component',[
            'categories' => $categories,
            'latest_items' => $latest_items,
            'top_rated_items' => $top_rated_items,
            'available_items' => $available_items
            
            ])->layout('layouts.authbase');
    }
}
