

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
    
    <div class="main-section">
        <section id="add-item" style="margin-top: 50px;">
            

            <div class="add-item d-flex align-items-center font-weight-bold" style="margin-left: 130px;">
                
              <h1 class="ml-5">Add an item</h1>
            </div>
            
            <form class="item-width" action="#" method="POST" wire:submit.prevent="addProduct" enctype="multipart/form-data">
              @csrf
              <div class="row item-width">
              <div class="col-md-7 col-sm-12 mb-5">
                <label class="h4" for="">Item Name</label> <br>
                <input class="item-input" type="text" required wire:model='name' wire:keyup="generateSlug">
                
              </div>

              <div class="col-md-7 col-sm-12 mb-5" style="display: none;">
                <label class="h4" for="">Item Slug</label> <br>
                <input class="item-input" type="text" required wire:model='slug'>
              </div>
            
              <div class="col-md-5 col-sm-12 mb-5">
                <label class="h4" for="category">Category</label> <br>
                <select class="item-input" required wire:model='category_id'>
                  <option>Select a Category...</option>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{Str::ucfirst($category->name)  }}</option>
                      
                  @endforeach
                </select>
                @error('category_id')
                <p class="text-danger">{{ $message }}</p><br>
              @enderror
              
              </div>
            
            
              <div class="col-12 mb-5">
                <label class="h4" for="">Street Address (for pick ups)</label> <br>
                <input class="item-input" type="text"  required wire:model='address'>
               
              </div>
            
              <div class="col-md-6 col-sm-12 mb-5">
                <label class="h4" for="">State</label> <br>
                <select class="item-input" wire:model="selectedState" required>
                  <option >Select a State...</option>
                  @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                      
                  @endforeach
                  
                </select>
                @error('selectedState')
                <p class="text-danger">{{ $message }}</p><br>
              @enderror
                
              </div>
              <div class="col-md-6 col-sm-12 mb-5">
                <label class="h4" for="">City</label> <br>
                <select class="item-input"  required wire:model="selectedCity" >
                  <option >Select a City...</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    
                     @endforeach
                  
                </select>
                @error('selectedCity')
                <p class="text-danger">{{ $message }}</p><br>
              @enderror
              </div>
            
              <div class="col-sm-12 col-md-6  mb-5">
                <label class="h4" for="">Item Color</label> <br>
                <input class="item-input mb-4" type="text"   wire:model="colour">
                <label class="h4" for="">Item Size</label> <br>
                <input class="item-input mb-4" type="text" name="size" wire:model="size" >
                <label class="h4" for="">Item Condition</label> <br>
                <select class="item-input mb-4" wire:model="condition">
                  <option>Select Condition...</option>
                  <option value="good">Good</option>
                  <option value="fairly-good">Fairly-good</option>
                  <option value="bad">Bad</option>
                </select>
                @error('condition')
                <p class="text-danger">{{ $message }}</p><br>
              @enderror
                <label class="h4" for="">Item Description</label> <br>
                <textarea rows="6" class="item-input" cols="50" name="comment" form="usrform" placeholder="Brief Additional Information" style="padding-left: 5px; padding-top:5px;" wire:model="description" required></textarea>
                @error('description')
                <p class="text-danger">{{ $message }}</p><br>
              @enderror
              </div>
            
              <div class="col-md-6 col-sm-12 mb-5 input-icons">
                <label class="h4" for="">Add Images<h5>(please add 5 different images of the item)</h5></label> <br>
                <input type="file" style="background-color: white;" class="item-input mb-4 input-file" wire:model="image1" required>
                @error('image1')
                   <p class="text-danger">{{ $message }}</p>
                 @enderror
            
                 <input type="file" style="background-color: white;" class="item-input mb-4 input-file" wire:model="image2" required>
                @error('image2')
                   <p class="text-danger">{{ $message }}</p><br>
                 @enderror

                 <input type="file" style="background-color: white;" class="item-input mb-4 input-file" wire:model="image3" required>
                    @error('image3')
                        <p class="text-danger">{{ $message }}</p><br>
                    @enderror
            
            
                 <input type="file" style="background-color: white;" class="item-input mb-4 input-file" wire:model="image4" required>
                     @error('image4')
                        <p class="text-danger">{{ $message }}</p>
                     @enderror
              
                <input type="file" style="background-color: white;" class="item-input mb-4 input-file" wire:model="image5" required>
                    @error('image5')
                       <p class="text-danger">{{ $message }}</p><br>
                     @enderror
                    
           
                
                
            
                <label class="h4 pt-2 mt-5" for="">Pricing Details</label> <br>
                <input class="item-input mb-4" type="text" name="daily_rate" placeholder="Price/Day" wire:model="daily_rate" required><i class="rectangle">NGN</i>
                @error('daily_rate')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
                <input class="item-input" type="text" name="causion_fee" placeholder="Caution Fee" wire:model="causion_fee" required><i class="rectangle">NGN</i>
                @error('causion_fee')
                  <p class="text-danger">{{ $message }}</p>
                @enderror
                <a href="#" class="float-right mt-1" style="color: #218EDD;">What is caution fee?</a> <br>
              </div>
            
            
              <div class="col-md-8 col-sm-12 my-5 pb-5 btn-width">
                <button type="submit" class="btn btn-primary btn-block btn-radius">Add Item</button>
              </div>
            </div>
            
            </form>
            </section>

    </div>
    
    

</main>


