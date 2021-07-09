<?php

namespace App\Http\Livewire;


use Livewire\Component;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\City;
use App\Models\State;


class UserRegistrationComponent extends Component
{
    public $selectedState ;
    public $selectedCity;
    
    public $cities = [];

    

    //function called when a state is selected
    public function updatedSelectedState($state_id){
        
        $this->cities = City::where('state_id',$state_id)->get();
    }

    public function render()
    {
        $states = State::all();
        return view('livewire.user-registration-component',['states'=>$states])->layout('layouts.authbase');
    }



      

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => ['required', 'string',  'max:15', 'unique:users'],
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'selectedState' => 'required',
            'selectedCity' => 'required',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
        return redirect('login');
    }


    public function create(array $data)
    {
      User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'state_id' => $data['selectedState'],
        'city_id' => $data['selectedCity'],
        'password' => Hash::make($data['password'])
      ]);
      return session()->flash('message',"Registration successful,please login!");
    }    
    
}
