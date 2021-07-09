<?php

namespace App\Http\Livewire\User;

use App\Models\Request;
use Livewire\Component;

class RentalComponent extends Component
{
    public $request_id;
    public function mount($request_id){
        $this->request_id = $request_id;

    }
    public function render()
    {
        $request = Request::where('id',$this->request_id)->first();
        return view('livewire.user.rental-component',['request'=>$request])->layout('layouts.authbase');
    }
}
