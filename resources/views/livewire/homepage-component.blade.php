
<main id="main">
  <div class="homepage">

    <div class="sidebar">
        <div class="hover">
          <div>
           
            <div class="hover-details">
              
              <a href="#"><img src="{{ asset('assets/images/akar-icons_grid.svg') }}"/>Categories</a>

              @foreach ($categories as $category)
                <a href="{{ route('product.category',['category_slug'=>$category->slug]) }}" class="sidebar-text" >{{ Str::ucfirst($category->name)  }}</a>
              @endforeach
                
            </div>

            <a href="{{ route('user.add_new_item') }}"class="sidebar-text"><img src="assets/images/bx_bx-list-plus.svg"/>Add an Item</a>
            <a href="{{ route('user.return_an_item') }}"class="sidebar-text"><img src="assets/images/ic_outline-assignment-return.svg"/>Return an Item</a>

            @if (Auth::user())
            <a href="{{ route('user.notifications') }}" class="sidebar-text"><img src="{{ asset('assets/images/bi_bell.svg') }}"/>Notifications</a>
                
            @endif
            

            <a href="/"class="sidebar-text"><img src="assets/images/bx_bx-help-circle.svg"/>Help</a>
            <a href="/"class="sidebar-text"><img src="assets/images/bytesize_settings.svg"/>Settings</a>
    

            @if (Auth::user())
            <a href="{{ route('logout') }}" style="margin-top: 5px;"  class="sidebar-text" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img src="assets/images/bx_bx-log-out.svg"/>Logout</a>
                
            @endif
            
            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                @csrf
            </form>
        </div>
            
        </div>
    </div>

    <div class="main-section">
      <div class="container-fluid">
          <div class="row">
            <div style="margin-top: 20px;" class="first-section">
              @if (Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
          
                </div>
                
                 @endif
              <h1>Make Money Renting Out Your Properties</h1>
              <p>You can also list an item for rent within a few minutes and generate revenue from it</p>
              
              <div class="button " >
                <a href="{{ route('user.add_new_item') }}"  class="btn btn-primary" >Add an Item</a>
              </div>
              </div>

          </div>
          <div class="row">
            <div class="col-md-12">
              <h2 style="padding-top: 15px;">Popular Categories</h2>
            </div>  
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="category-details">
                <a href="{{ route('product.category','automobiles') }}" class="pp">
      
                  <div class="text-center">
      
                    <img src="assets/images/Group 4595.svg" />
                    <h3 style="color: black;">Automobiles</h3>
                  </div>
                </a>
                <a href="{{ route('product.category','photography') }}" class="pp">
      
                  <div class="text-center">
      
                    <img src="assets/images/Group 4611.svg" />
                    <h3 style="color: black;">Photography</h3>
                  </div>
                </a>
                
                <a href="{{ route('product.category','electronics') }}" class="pp">
                  <div class="text-center">
      
                    <img src="assets/images/Group 4609.svg" />
                    <h3 style="color: black;">Electronics</h3>
                  </div>
                </a>
        
                <a href="{{ route('product.category','books') }}" class="pp">
      
                  <div class="text-center">
      
                    <img src="assets/images/Group 4610.svg" />
                    <h3 style="color: black;">Books</h3>
                  </div>
                </a>
        
                <a href="{{ route('product.category','construction') }}" class="pp">
      
                  <div class="text-center">
      
                    <img src="assets/images/Group 4612.svg" />
                    <h3 style="color: black;">Construction</h3>
                  </div>
                </a>
        
                <a href="{{ route('product.category','fashion') }}" class="pp">
      
                  <div class="text-center">
                    <img src="assets/images/Group 4613.svg" />
                    <h3 style="color: black;">Fashion</h3>
                  </div>
                </a>
                
                <a href="{{ route('product.category','agriculture') }}" class="pp">
                  <div class="text-center">
                    <img src="assets/images/Group 4614.svg" />
                    <h3 style="color: black;">Agriculture</h3>
                  </div>
                </a>
        
                <a href="{{ route('product.category','music') }}" class="pp">
                  <div class="text-center">
                    <img src="assets/images/Group 4615.svg" />
                    <h3 style="color: black;">Music</h3>
                  </div>
                </a>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-12">
              <h2 style="padding-left: 0px;">Latest Items</h2>
             </div>
    
          </div>
          <div class="row">
            @foreach ($latest_items as $latest_item)
                 
            <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
              <a href="{{ route('product.details',['product_id'=>$latest_item->id]) }}">
              <div class="image-catalogue image-look">
               
                 <div class="pp">
                   <div class="img-sales">
                    <img class="img-fluid" src="{{ asset('storage') }}/{{ $latest_item->image1 }}" />
                    <p class="available">{{ Str::ucfirst($latest_item->availability)  }}</p>
                   </div>
                   <p style="color: black;">{{Str::ucfirst($latest_item->name) }}</p>
                   <p>{{Str::ucfirst( $latest_item->category->name) }}</p>
                   <p><img src="{{ asset('assets/images/carbon_location.svg') }}"/>{{ $latest_item->city->name }}, {{ $latest_item->state->name }}</p>
                   <div><span style="color: black;">₦{{ number_format($latest_item->daily_rate ) }}/Day</span><span>4.0</span><img src="{{ asset('assets/images/emojione_star.svg') }}"/></div>
                 </div>
    
              </div>
            </div> 
             @endforeach
          </div>
          <div class="row">
            <h2 style="padding-left: 20px; color:black;">Available for Rent</h2>
      
          </div>
            
          <div class="row">
            @foreach ($available_items as $available_item)
                
            <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
              <a href="{{ route('product.details',['product_id'=>$available_item->id]) }}">
                <div class="image-catalogue image-look">
              
                  <div class="pp">
                  <div class="img-sales">
                    <img class="img-fluid" src="{{ asset('storage') }}/{{ $available_item->image1 }}" />
                    <p class="available">{{ Str::ucfirst($available_item->availability)  }}</p>
                  </div>
                  <p style="color: black;">{{Str::ucfirst($available_item->name) }}</p>
                  <p>{{Str::ucfirst( $available_item->category->name) }}</p>
                  <p><img src="{{ asset('assets/images/carbon_location.svg') }}"/>{{ $available_item->city->name }}, {{ $available_item->state->name }}</p>
                  <div><span style="color: black;">₦{{ number_format($available_item->daily_rate ) }}/Day</span><span>4.0</span><img src="{{ asset('assets/images/emojione_star.svg') }}"/></div>
                  </div>
      
    
                </div>
              </a> 
            </div>
            
    
            @endforeach
    

          </div>
          <div class="row">
            <h2 style="padding-left: 20px;">People Also Viewed</h2>
      
          </div>
          <div class="row">
            @foreach ($top_rated_items as $top_rated_item)
                
            <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
              <a href="{{ route('product.details',['product_id'=>$top_rated_item->id]) }}">
                <div class="image-catalogue image-look">
                
                  <div class="pp">
                    <div class="img-sales">
                      <img class="img-fluid" src="{{ asset('storage') }}/{{ $top_rated_item->image1 }}" />
                      <p class="available">{{ Str::ucfirst($top_rated_item->availability)  }}</p>
                    </div>
                    <p style="color: black;">{{Str::ucfirst($top_rated_item->name) }}</p>
                    <p>{{Str::ucfirst( $top_rated_item->category->name) }}</p>
                    <p><img src="{{ asset('assets/images/carbon_location.svg') }}"/>{{ $top_rated_item->city->name }}, {{ $top_rated_item->state->name }}</p>
                    <div><span style="color: black;">₦{{ number_format($top_rated_item->daily_rate ) }}/Day</span><span>4.0</span><img src="{{ asset('assets/images/emojione_star.svg') }}"/></div>
                  </div>
              
      
                </div>
              </a> 
            </div>
            
    
            @endforeach
         </div>
        
      </div>


    </div>

    

  </div>




</main>

