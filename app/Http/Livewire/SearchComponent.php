<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;


class SearchComponent extends Component
{

    public $search;
    
    public $name;
    public $address;
    public $description;
    public $searchTerm;
    
    public $category_slug;


 
    
    public function searchForm()
    {
            
    dd($this->search);

    // $searchTerm = '%'.$this->search.'%';
    
    
    //     $categories = Category::all();
    
//     $products = Product::where('name', 'LIKE', $searchTerm)
//     ->orWhere('address', 'LIKE', $searchTerm)
//     ->orWhere('description', 'LIKE', $searchTerm)
//     ->orderBy('id', 'DESC')->paginate(24);

        $categories = Category::all();
                
        $productSearch = Product::
        // where('name', 'LIKE', $searchTerm)
        //             ->orWhere('address', 'LIKE', $searchTerm)
        //             ->orWhere('description', 'LIKE', $searchTerm)
        orderBy('id', 'DESC')->paginate(24);

        return redirect()->route('search')->with(['categories' => $categories,
        'products'=> $productSearch
        ])->layout('layouts.authbase');

// return view('livewire.search-component',[
    // 'categories' => $categories,
    // 'products'=> $products
    // ])->layout('layouts.authbase');
}

    use WithPagination;
    public function render()
    {
        $categories = Category::all();
        
        $productSearch = Product::
        // where('name', 'LIKE', $searchTerm)
        //             ->orWhere('address', 'LIKE', $searchTerm)
        //             ->orWhere('description', 'LIKE', $searchTerm)
        orderBy('id', 'DESC')->paginate(24);
        
        
        return view('livewire.search-component',[
            'categories' => $categories,
            'products'=> $productSearch,
            ])->layout('layouts.authbase');
        }  


 
}