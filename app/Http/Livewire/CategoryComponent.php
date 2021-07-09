<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    public $category_slug;
    public $search;
    public $searchForm;
    public $sorting;
    public $city_id;
 

    public function mount($category_slug){
        $this->category_slug = $category_slug;
        $this->sorting = 'default';

    }

    use WithPagination;
    public function render()
    {

          // return view('livewire.user.user-category-component')->layout('layouts.authbase');
          $categories = Category::all();
          $category = Category::where('slug',$this->category_slug)->first();
          $category_id = $category->id;
          $category_name = $category->name;
          $this->city_id = Auth::user()->city_id;
  
        
          if($this->sorting==='near_you'){
            $products = Product::where('category_id', $category_id)->where('city_id',$this->city_id)->paginate(24);
        }elseif($this->sorting==='price'){
            $products = Product::where('category_id', $category_id)->orderBy('daily_rate','ASC')->paginate(24);
        }elseif($this->sorting==='price_desc'){
            $products = Product::where('category_id', $category_id)->orderBy('daily_rate','DESC')->paginate(24);
        }elseif($this->sorting==='availability'){
            $products = Product::where('category_id', $category_id)->where('availability','available')->paginate(24);
        }
        else{
            $products = Product::where('category_id', $category_id)->paginate(24);
        }


         
      
          return view('livewire.category-component',[
              'category_name'=>$category_name,
              'products'=> $products,
              'categories' => $categories
              ])->layout('layouts.authbase');
      }
   
   

}

