<?php

namespace App\Http\Livewire\User;

use App\Models\Category;
use App\Models\City;
use App\Models\State;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class UserAddNewItemComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $category_id;
    public $user_id;
    public $availability;
    public $address;
    public $colour;
    public $size;
    public $condition;
    public $description;
    public $image1;
    public $image2;
    public $image3;
    public $image4;
    public $image5;
    public $daily_rate;
    public $causion_fee;
    

    public $selectedState ;
    public $selectedCity;
    
    public $cities = [];


  


    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }

    public function mount(){
        $this->availability = 'available';
    }

    //function called when a state is selected
  public function updatedSelectedState($state_id){
      $this->cities = City::where('state_id',$state_id)->get();
  }


  
    

    public function updated($fields){
        $this->validateOnly($fields,[
            "name" => 'required',
            "slug" => 'required',
            "category_id" => 'required',
            "user_id" => 'required',
            "address" => 'required',
            "condition" => 'required',
            "selectedState" => 'required',
            "selectedCity" => 'required',
            "description" => 'required',
            'image1' => 'required|mimes:jpeg,png,jpg|max:5048',
            'image2' => 'required|mimes:jpeg,png,jpg|max:5048',
            'image3' => 'required|mimes:jpeg,png,jpg|max:5048',
            'image4' => 'mimes:jpeg,png,jpg|max:5048',
            'image5' => 'mimes:jpeg,png,jpg|max:5048',
            "daily_rate" => 'required|numeric',
            "causion_fee" => 'required|numeric',
                
    
    
        ]);
    }
    
        //function for user to add new item to be  borrowed
        public function addProduct(){
          
            $this->validate([
                "name" => 'required',
                "slug" => 'required',
                "category_id" => 'required',
                "address" => 'required',
                "condition" => 'required',
                "selectedState" => 'required',
                "selectedCity" => 'required',
                "description" => 'required',
                'image1' => 'required|mimes:jpeg,png,jpg|max:5048',
                'image2' => 'required|mimes:jpeg,png,jpg|max:5048',
                'image3' => 'required|mimes:jpeg,png,jpg|max:5048',
                'image4' => 'mimes:jpeg,png,jpg|max:5048',
                'image5' => 'mimes:jpeg,png,jpg|max:5048',
                "daily_rate" => 'required|numeric',
                "causion_fee" => 'required|numeric',
            ]);
    
            $product = new Product();
            $product->name = $this->name;
            $product->slug = $this->slug;
            $product->description = $this->description;

            $image1Name = time() . '-' . $this->image1->getClientOriginalName() .  '.' . $this->image1->extension();
            $this->image1->storeAs('public',$image1Name);
            $product->image1 = $image1Name;

            $image2Name = time() . '-' . $this->image2->getClientOriginalName() . '.' . $this->image2->extension();
            $this->image2->storeAs('public',$image2Name);
            $product->image2 = $image2Name;

            $image3Name = time() . '-' . $this->image3->getClientOriginalName() . '.' . $this->image3->extension();
            $this->image3->storeAs('public',$image3Name);
            $product->image3 = $image3Name;

            $image4Name = time() .  '-' . $this->image4->getClientOriginalName() . '.' . $this->image4->extension();
            $this->image4->storeAs('public',$image4Name);
            $product->image4 = $image4Name;

        

            $image5Name = time() .  '-' . $this->image5->getClientOriginalName() .  '.' . $this->image5->extension();
            $this->image5->storeAs('public',$image5Name);
            $product->image5 = $image5Name;

            $product->daily_rate = $this->daily_rate;
            $product->causion_fee = $this->causion_fee;
            $product->availability = $this->availability;
            $product->address = $this->address;
            $product->size = $this->size;
            $product->colour = $this->colour;
            $product->condition = $this->condition;
            $product->state_id = $this->selectedState;
            $product->city_id = $this->selectedCity;
            $product->category_id = $this->category_id;
            $product->user_id = Auth::user()->id;
            $product->save();
            session()->flash('message','Your new item added Successfully!');
            return redirect()->route('homepage');
            
        }

    public function render()
    {
        $categories = Category::all();
        $states = State::all();
        return view('livewire.user.user-add-new-item-component',[
            'categories' => $categories,
            'states'=> $states
         
            ])->layout('layouts.authbase');
    }
}
  