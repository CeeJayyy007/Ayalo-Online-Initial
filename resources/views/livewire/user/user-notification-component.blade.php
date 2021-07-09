<main id="main" style="background-color: #E5E5E5;">
    <div class="sidebar">
        <div class="hover">
          <div>
           
            <div class="hover-details">
             
              <p style="color: white; text-decoration:none; padding-left:10px;
              margin-top:5px;" ><img src="{{ asset('assets/images/akar-icons_grid.svg') }}"/>Categories</p>
              @foreach ($categories as $category)
                <a href="/second.html" class="sidebar-text">{{ Str::ucfirst($category->name)  }}</a>
              @endforeach
                
            </div>

            <a href="{{ route('user.add_new_item') }}"class="sidebar-text"><img src="{{ asset('assets/images/bx_bx-list-plus.svg') }}"/>Add an Item</a>
            <a href="/"class="sidebar-text"><img src="{{ asset('assets/images/ic_outline-assignment-return.svg') }}"/>Return an Item</a>
            <a href="{{ route('user.notifications') }}" class="sidebar-text"><img src="{{ asset('assets/images/bi_bell.svg') }}"/>Notifications</a>
            <a href="/"class="sidebar-text"><img src="{{ asset('assets/images/bx_bx-help-circle.svg') }}"/>Help</a>
            <a href="/"class="sidebar-text"><img src="{{ asset('assets/images/bytesize_settings.svg') }}"/>Settings</a>
    

            
            <a href="{{ route('logout') }}" style="margin-top: 5px;"  class="sidebar-text" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img src="{{ asset('assets/images/bx_bx-log-out.svg') }}"/>Logout</a>
            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                @csrf
            </form>
        </div>
            
        </div>
    </div>
    <div class="notification-section" style="margin-top: 90px;">
        <div class="notification-wrapper">

              <div class="notification-header">
                <h2 class="notificationh2">Notifications</h2>
                <hr>
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
                <button class="accept">Accept</button>
                  <button class="decline">Decline</button>
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