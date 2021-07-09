<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use App\Models\User;
use Livewire\Component;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\RequestNotification;

class MyRequestsComponent extends Component
{
    public $request_id;
    public $product_id;
    public $owner_id;
    public $renter_id;
    public $start_date;
    public $end_date;
    public $address;
    public $total_price;
    public $payment_status;
    public $pick_up_status;
    public $delivery_status;
    public $return_status;
    public $status;
    public $showButton = true;
    public $showText = false;


    
    public function render()
    {
        $this->renter_id = Auth::user()->id;
        $requests = Request::where('renter_id',$this->renter_id)
        ->orderBy('created_at','DESC')->paginate(20);
        return view('livewire.user.my-requests-component',['requests'=>$requests])->layout('layouts.authbase');
    }
}
