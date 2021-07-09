<div class="main-section"  style="background-color:  #E5E5E5">

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
            <div class="col-md-10" style="margin-top: 160px;">
                <div class="RT_main">
                    <h1 class="RT-1">Return an Item</h1>
                    <hr>
                    <b class="RT-1">All Rented Items</b>
            
                    <div class="RT_section">
            
                        <div class="RT_left">
                            <div>
                                <img src="{{ asset('assets/images/Rectangle 145.svg') }}" width="170" height="175"/>
                            </div>
                            
                            <div class="btn-text">
                                <p class="btn-text-1">Studio Led Lights- Strong Led lights</p>
                                <p><span style="color: #218EDD">Photography</span></p>
                                <p>Colour: Black, &nbsp; Condition:<span style="color: green;">Good,</span> &nbsp; Location: Maryland, Lagos </p>
                                <p>Owner: Jemila Hassan</p>
                                <p class="btn-text-2">N5,000/Day (Caution Fee- N20,000)</p>
                                <a href="{{ route('user.return_an_item_details') }}" class="btn btn-primary">Return</a>
                            </div>
                        </div>
            
                        <div class="RT_right">
                            <img src="{{ asset('assets/images/Group 4652.png') }}" width="70" height="70" />
                            <p>Your return date is <br><b>3rd March 2021</b>
                        </div>
                
                    </div>
              
                    <hr class="RT-line">
            
             
                
            
            
            
                </div>

            </div>

        </div>

    </div>
   

    
</div>