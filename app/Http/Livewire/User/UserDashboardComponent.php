<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use App\Models\User;
use Livewire\Component;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\RequestNotification;

class UserDashboardComponent extends Component
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


    //function is called when accept button is clicked
    public function acceptRequest($request_id){

        $request = Request::find($request_id)->first();
        $request->status = 'approved';
        $request->product_id = $request->product_id;
        $request->owner_id = $request->owner_id ;
        $request->renter_id =   $request->renter_id ;
        $request->start_date = $request->start_date;
        $request->end_date =  $request->end_date;
        $request->address = $request->address;
        $request->created_at = $request->created_at;
        $request->updated_at = $request->updated_at;
        $request->save();

        $order = new Order();
        $order->product_id = $request->product_id;
        $order->owner_id = $request->owner_id;
        $order->renter_id =   $request->renter_id ;
        $order->start_date = $request->start_date;
        $order->end_date =  $request->end_date;
        $order->address = $request->address;
        $order->save();
        $this->sendAcceptRequestNotification($request->renter_id );
        $this->showButton = false;
        $this->showText = true;

    }


     //function is called when decline button is clicked
     public function declineRequest($request_id){

        $request = Request::find($request_id)->first();
        $request->status = 'declined';
        $request->product_id = $request->product_id;
        $request->owner_id = $request->owner_id ;
        $request->renter_id =   $request->renter_id ;
        $request->start_date = $request->start_date;
        $request->end_date =  $request->end_date;
        $request->address = $request->address;
        $request->save();
        $this->sendDeclineRequestNotification($request->renter_id );

    }


      //function to send accept request notification to renter of item
      public function sendAcceptRequestNotification($renter_id){
        $user = User::where('id',$renter_id)->first();
        $requestData = [
            'body'=> 'Congratulation! Your request has been accepted!',
            'requestText' => 'Kindly respond to the request and make payment',
            'url' => url('/'),
            'thankyou' => 'Thank you for using Ayaloonline'
    
        ];
    
        $user->notify(new RequestNotification($requestData));
    
       }


        //function to send declined request notification to renter of item
      public function sendDeclineRequestNotification($renter_id){
        $user = User::where('id',$renter_id)->first();
        $requestData = [
            'body'=> 'We are sorry,your request has been declined!',
            'requestText' => 'Kindly make a request from other owners of similar item',
            'url' => url('/'),
            'thankyou' => 'Thank you for using Ayaloonline'
    
        ];
    
        $user->notify(new RequestNotification($requestData));
    
       }

    public function render()
    {
        $this->owner_id = Auth::user()->id;
        $requests = Request::where('owner_id',$this->owner_id)
        ->orderBy('created_at','DESC')->paginate(20);
        return view('livewire.user.user-dashboard-component',['requests'=>$requests])->layout('layouts.authbase');
    }
}
