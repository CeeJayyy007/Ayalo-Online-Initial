<main id="main" style="margin-top: 60px;">
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

        <div class="container" style="margin-top: 30px;">
          <div  class="first-section">
            @if (Session::has('message'))
              <div class="alert alert-success">
                  {{ Session::get('message') }}
        
              </div>
              
               @endif
            <h1>Search results</h1>
            <p>Click on desired result to view product detail</p>
            
          </div>
    
    
            <div class="second-section">
             
    
             <div class="filter-details">
               <div>
                 <img src="{{ asset('assets/images/ToggleOff.svg') }}" />
                 <h3>Available</h3>
               </div>
    
               <div>
                <img src="{{ asset('assets/images/ToggleOn.svg') }}" />
                <h3>Near You</h3>
              </div>
    
              <div>
                <img src="{{ asset('assets/images/ToggleOff.svg') }}" />
                <h3>By Price (Min to Max)</h3>
              </div>
    
              <div>
                <img src="{{ asset('assets/images/ToggleOff.svg') }}" />
                <h3>By Price (Max to Min)</h3>
              </div>
    
             </div>
     
             <div class="row">
              @if(isset($product))
              
              @foreach ($products as $product)
             
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
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
                     <div><span style="color: black;">₦{{ number_format($product->daily_rate ) }}/Day</span><span>4.0</span><img src="{{ asset('assets/images/emojione_star.svg') }}"/></div>
                   </div>
         
                  </div>
              </a> 
              </div>
 
              @endforeach

              @elseif(isset($error))
              <p>Search item not found</p>
              @else
              <p>No data to be shown</p>
              @endif
             </div>
             
             <div class="pagination">
              {{ $products->links('pagination::bootstrap-4') }}

             </div>
             
             
    
            </div>
    
    

        </div>
       
    
     



        </div>

    </main>
