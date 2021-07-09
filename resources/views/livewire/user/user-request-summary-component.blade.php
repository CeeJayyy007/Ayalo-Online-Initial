<main id="main">

    <div class="">
        <div class="">

            <div class="col-md-4">
                <div class="sidebar">
                    <div class="hover">
                      <div>
                       
                        <div class="hover-details">
            
                          <a href="#"><img src="{{ asset('assets/images/akar-icons_grid.svg') }}"/>Categories</a>
            
                          @foreach ($categories as $category)
                            <a href="{{ route('product.category',['category_slug'=>$category->slug]) }}" class="sidebar-text">{{ Str::ucfirst($category->name)  }}</a>
                          @endforeach
                            
                        </div>
            
                        <a href="{{ route('user.add_new_item') }}"class="sidebar-text"><img src="{{ asset('assets/images/bx_bx-list-plus.svg') }}"/>Add an Item</a>
                        <a href="/"class="sidebar-text"><img src="{{ asset('assets/images/ic_outline-assignment-return.svg') }}"/>Return an Item</a>
            
                        @if (Auth::user())
                      <a href="{{ route('user.notifications') }}" class="sidebar-text"><img src="{{ asset('assets/images/bi_bell.svg') }}"/>Notifications</a>
                          
                      @endif
                      
            
                      <a href="/"class="sidebar-text"><img src="{{ asset('assets/images/bx_bx-help-circle.svg') }}"/>Help</a>
                      <a href="/"class="sidebar-text"><img src="{{ asset('assets/images/bytesize_settings.svg') }}"/>Settings</a>
              
            
                      @if (Auth::user())
                      <a href="{{ route('logout') }}" style="margin-top: 5px;"  class="sidebar-text" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img src="{{ asset('assets/images/bx_bx-log-out.svg') }}"/>Logout</a>
                          
                      @endif
                      
                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    </div>
                        
                    </div>

                </div>  
            </div>

            <div class="main-section">
             <section id="add-item" style="margin-top: 0px;">
   
                <div class="add-item d-flex align-items-center font-weight-bold mt-4" style="margin: auto">
                    <h1 class="ml-5">Request for this Item</h1>
                </div>                
            
                <div class="request-summary" style="margin: auto;">
            
                <div class="mt-5">
                <div class="row">
                <div class = "col-md-12" style = "margin-bottom: 50px;">
                    
                    <form class="form-horizontal" wire:submit.prevent="requestItem" enctype="multipart/form-data">
                    @csrf
                </div>

                <div class="form-group col-md-6 mt-5">
                <label class="">From:</label>
                    <input type="date" class="form-control request-input" wire:model="start_date" required>
                        @error('start_date')
                         <p class="text-danger">{{ $message }}</p>
                         @enderror
                        </div>

                <div class="col-md-6 mt-5">
                <label class="">To:</label>
                        <input type="date" class="form-control request-input" wire:model="end_date" required>
                         @error('end_date')
                         <p class="text-danger">{{ $message }}</p>
                         @enderror
                </div>

                <div class="form-group col-md-12 mt-5">
                         <label class="">Location Item is Needed:</label>
                         <input type="text" class="form-control request-input" placeholder="30 Iwofe Road,Port Harcourt,Rivers State" wire:model="address" height="60">
                         @error('address')
                         <p class="text-danger">{{ $message }}</p>
                         @enderror
                </div>

            <div class="col-md-12 mt-5" style = "margin-bottom: 120px;">
               
                <button wire:loading.remove type="submit"  class="request-btn btn btn-primary btn-block">Send Request</button>
                <div class="loader" wire:loading.delay  style="align-self: center">

                </div>
                
                 
                    
               
                
               
            </div>        
`          </form>
        </div>
        </div>
</div>
    </div>
</section>
</div>
</div>
</div> 

</main>










