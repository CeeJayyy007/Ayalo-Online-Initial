<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddCategoryComponent extends Component
{

    public $name;
    public $slug;

    //creates slug from the category name 
    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }
    
    public function updated($fields){

        $this->validateOnly($fields,[
            'name'=>'required',
            'slug'=>'required|unique:categories'

        ]);
    }



    //function to store categories into database
    public function storeCategory(){
        //validates inputs in the different input fields
        $this->validate([
            'name'=>'required',
            'slug'=>'required|unique:categories'

        ]);

        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message','New Category Created Successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.authbase');
    }
}
