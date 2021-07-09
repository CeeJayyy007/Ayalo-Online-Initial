<div class="main-section">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar">
                    <div class="hover">
                      <div>
                       
                        <div class="hover-details">
                          
                          <a href="#"><img src="{{ asset('assets/images/akar-icons_grid.svg') }}"/>Categories</a>
            
                          @foreach ($categories as $category)
                            <a href="{{ route('product.category',['category_slug'=>$category->slug]) }}" class="sidebar-text" >{{ Str::ucfirst($category->name)  }}</a>
                          @endforeach
                            
                        </div>
            
                        <a href="{{ route('user.add_new_item') }}"class="sidebar-text"><img src="{{ asset('assets/images/bx_bx-list-plus.svg') }}"/>Add an Item</a>
                        <a href="{{ route('user.return_an_item') }}"class="sidebar-text"><img src="{{ asset('assets/images/ic_outline-assignment-return.svg') }}"/>Return an Item</a>
            
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
            <div class="col-md-10" style="margin-top: 120px;">
                <div class="RT_main">

                    <div class="notification-header">
                        <h2 class="RT-1">My Listed Items</h2>
                        <hr>
                    </div>
            
                    @foreach ($products as $product)
                    <div class="li_section">
            
                        <div class="li_left">
                            <div>
                                <img src="{{ asset('storage') }}/{{ $product->image1 }}"width="170" height="175"/>
                            </div>
                            
                            <div class="li_desc_text">
                                <p class="li_desc_text_1">{{ $product->name }}</p>
                                <p><span style="color: #218EDD; font-weight: 600">{{ Str::ucfirst($product->category->name)  }}</span></p>
                                <p class="li_desc_text_2">Colour: {{ $product->colour }}, &nbsp; Condition:<span style="color: green;">{{Str::ucfirst($product->condition)  }},</span> &nbsp; Location: {{ $product->city->name }}, {{ $product->state->name }} </p>
                                <p>Brief Description: {{ $product->description }}</p>
                                <p class="li_desc_text_4">₦{{ number_format($product->daily_rate )}}/Day (Caution Fee- ₦{{ number_format($product->causion_fee )}})</p>
                            </div>
                        </div>
            
                        <div class="li_right_btn">
                            <a href="#" class="btn btn-primary" >Edit</a>
                            <a href="#" class="btn btn-primary" style="background-color: red !important; margin-top:10px;">Delete</a>
                        </div>
                        
                    </div>
                    <hr class="RT-line">
                    @endforeach
                    
    
                    
                    
                </div>
               
              

            </div>
            

        </div>
        
      

    </div>
  
    

    
</div>

</main>