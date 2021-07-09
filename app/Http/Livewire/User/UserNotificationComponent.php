<?php

namespace App\Http\Livewire\User;

use App\Models\Category;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserNotificationComponent extends Component
{
  public $owner_id;

    public function render()
    {
        $this->owner_id = Auth::user()->id;
        $requests = Request::where('owner_id',$this->owner_id)->orderBy('created_at','DESC')->paginate(20);
        $categories = Category::all();
        return view('livewire.user.user-notification-component',[
            'categories'=>$categories,
            'requests'=>$requests
            ])->layout('layouts.authbase');
    }
}
