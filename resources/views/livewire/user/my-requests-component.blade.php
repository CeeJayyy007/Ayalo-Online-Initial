<main id="main" style="background-color: #E5E5E5;">
  
    <div class="notification-section" style="margin-top: 90px; margin-left:100px !important;">
        <div class="notification-wrapper">
 
              <div class="notification-header">
               <h2 class="notificationh2">My Requests</h2>
                <hr>
            </div>
 
            
                
           
           
 
         @foreach ($requests as $request)
         <div class="person">
            <div class="first-column">
              <img src="{{ asset('assets/images/Stella.png') }}" alt="Stella">
            </div>
            <div class="second-column">
                <div class="personInfo">
                  <h4>{{ $request->owner->name }}</h4>
                  <p class="text-muted">You sent a request to rent <span class="text-primary">
                  {{ $request->product->name }}</span>
                  at <b>{{ $request->address }}</b>, from  <b>{{  date('d-m-Y', strtotime($request->start_date))}}</b> to <b>{{date('d-m-Y', strtotime($request->end_date))}}</b><small class="text-muted">{{ $request->created_at->diffForHumans() }}</small></p>
              </div>
                  <div class="personbtn">
                     
                    @if ($request->status=='approved')
                    <h5 style="color:green; margin-top:20px;">Congratulation! request approved</h5>
                    <a class="btn btn-primary" href="{{ route('user.rental',['request_id'=>$request->id]) }}">Proceed to Payment</a>       
                        
                    @else
                    <h5 style="color:#218EDD ; margin-top:30px;">Waiting for owner's response</h5>
                        
                    @endif
                   
                  
                        
                    
                    
               

                   
                </div>
            </div>
         </div>      
         @endforeach
    
 
                    <div class="notification-link">
                     <a id="notification-link" href="#">Load more</a>
                    </div>
     </div>
 
   </div>
 
 
 </main>