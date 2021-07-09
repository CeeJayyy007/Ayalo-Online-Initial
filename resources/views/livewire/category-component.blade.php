<main id="main" style="margin-top: 0px;">
    <div class="homepage">
  
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
  
      <div class="main-section">

        <div class="container" >
          <div  class="first-section">
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
    
    
            <div class="second-section">
             <h2>{{Str::ucfirst($category_name ) }}</h2>
    
             <div class="row">
                <div class="col-md-3">
                  <span>Sort by </span>
                  <div wire:ignore >
                    <select id="basic" class="selectpicker show-tick form-control" wire:model='sorting' >
                        <option value="default" data-display="Select">Nothing</option>
                        <option value="price_desc">High Price → Low Price</option>
                        <option value="price">Low Price → High Price</option>
                        <option value="near_you">Near you</option>  
                        <option value="availability">Available</option> 
                    </select>

                </div>

                </div>

             </div>
            

                                
     
             <div class="row">
              @foreach ($products as $product)
             
              <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                <a href="{{ route('product.details',['product_id'=>$product->id]) }}">
                <div class="image-catalogue image-look">
                 
                   <div class="pp">
                     <div class="img-sales">
                      <img class="img-fluid" src="{{ asset('storage') }}/{{ $product->image1 }}" />
                      <p class="available">{{ Str::ucfirst($product->availability)  }}</p>
                     </div>
                     <p style="color: black;">{{Str::ucfirst($product->name) }}</p>
                     <p>{{Str::ucfirst( $product->category->name) }}</p>
                     <p><img src="{{ asset('assets/images/carbon_location.svg') }}"/>{{ $product->city->name }}, {{ $product->state->name }}</p>
                     <div><span style="color: black;">₦{{ number_format($product->daily_rate ) }}/Day</span><br><span>4.0</span><img src="{{ asset('assets/images/emojione_star.svg') }}"/></div>
                   </div>
                
            
             
 
                  </div>
            </a> 
              </div>
              

              @endforeach
                 
             </div>
             
             <div class="pagination">
              {{ $products->links('pagination::bootstrap-4') }}

             </div>
             
             
    
            </div>
    
    

        </div>
       
    
     



        </div>

    </main>
