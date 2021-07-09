<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Request;
use App\Notifications\RequestNotification;
use Illuminate\Support\Facades\Auth;





class UserRequestSummaryComponent extends Component
{
    public $product_id;
    public $owner_id;
    public $renter_id;
    public $start_date;
    public $end_date;
    public $address;
    public $status;
    public $showButton = true;


    public function mount($product_id){
        $this->product_id = $product_id;
        $this->status = "pending";
    }


    //function to send notification to owner of item
    public function sendRequestNotification($owner_id){
    $user = User::where('id',$owner_id)->first();
    $requestData = [
        'body'=> 'You have a new request notification',
        'requestText' => 'Kindly respond to the request of your item',
        'url' => url('/'),
        'thankyou' => 'Thank you for using Ayaloonline'

    ];

    $user->notify(new RequestNotification($requestData));

   }


//function to request an item
  public function requestItem(){


        $this->validate([
            'start_date' => 'required',
            'end_date' => 'required',
            'address' => 'required'

        ]);
        $this->showButton = false;

        $wanted_product = Product::where('id',$this->product_id)->first();
        $owner_id = $wanted_product->user_id;

        $request = new Request();
        $request->product_id = $this->product_id;
        $request->owner_id = $owner_id ;
        $request->renter_id = Auth::user()->id;
        $request->start_date = $this->start_date;
        $request->end_date = $this->end_date;
        $request->address = $this->address;
        $request->status = $this->status;
        $request->save();
        
        $this->sendRequestNotification($owner_id);
        return redirect()->route('user.request_successful');


  }



    public function render()
    {
        $categories = Category::all();
        return view('livewire.user.user-request-summary-component',['categories'=>$categories])->layout('layouts.authbase');
    }
}
