<main id="main" style="background-color: #E5E5E5;">
  
   <div class="notification-section" style="margin-top: 90px; margin-left:100px !important;">
       <div class="notification-wrapper">

             <div class="notification-header">
              <h2 class="notificationh2">Requests for my Items</h2>
               <hr>
           </div>

              <div wire:loading.delay>
                
                <div class="loader"></div>
              </div>
               
          
          

        @foreach ($requests as $request)
        <div class="person">
           <div class="first-column">
             <img src="{{ asset('assets/images/Stella.png') }}" alt="Stella">
           </div>
           <div class="second-column">
               <div class="personInfo">
                 <h4>{{ $request->renter->name }}</h4>
                 <p class="text-muted">Has requested to rent your<span class="text-primary">
                 {{ $request->product->name }}</span>
                 at <b>{{ $request->address }}</b>, from  <b>{{  date('d-m-Y', strtotime($request->start_date))}}</b> to <b>{{date('d-m-Y', strtotime($request->end_date))}}</b><small class="text-muted">{{ $request->created_at->diffForHumans() }}</small></p>
             </div>
                 <div class="personbtn">
                   @if ($showButton)
                       <a class="btn accept" onclick="confirm('Are you sure you want to accept this request?')|| event.stopImmediatePropagation()" wire:click="acceptRequest({{ $request->id }})">Accept</a>
                 
                       <a class="btn decline" onclick="confirm('Are you sure you want to decline this request?')|| event.stopImmediatePropagation()" wire:click="declineRequest({{ $request->id }})">Decline</a>
                     
                       
                   @endif
                   @if ($showText)
                   <a style="color: green; margin-top:10px;">Accepted<span class="glyphicon glyphicon-ok" style="color: green"></span></a>
                       
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