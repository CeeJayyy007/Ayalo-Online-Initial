<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

use Illuminate\Support\Str; 

class AdminEditCategoryComponent extends Component
{
    public $category_id,$category_name,$category_slug;
    public $name,$slug;

    public function mount($category_slug){

        $this->category_slug = $category_slug;
        $category = Category::where('slug',$category_slug)->first();
        $this->category_id= $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
    } 

    //creates slug from the category name 
    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }

    //function to update category in database
public function updateCategory(){
    $this->validate([
        'name'=>'required',
        'slug'=>'required|unique:categories'

    ]);

    $category = Category::find($this->category_id);
    $category->name = $this->category_name;
    $category->slug = $this->category_slug;

    $category->save();

    session()->flash('message','Category Updated Successfully!');
}

    public function render()
    {

        return view('livewire.admin.admin-edit-category-component')->layout('layouts.authbase');

    }
}
