
<main id="main">


<div id="reg-container-body" >
    <div id="reg-container" class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="background-color: #0F456B; z-index:-1;">
                <div class="left-section" style="padding-top: 50px; ">
                    <h1>A few clicks away from renting your desired item.</h1>
                    <img src="assets/images/Group 4632.svg" alt="" /> 
                </div>

            </div>
            <div class="col-md-8">
                <div class="right-section"style="padding-top: 50px;" >
                    <h2 style="font: Montserrat,sans-serif,serif !important;">Create an Account</h2>
                    
                    <x-jet-validation-errors class="mb-4" style="color: red;"/>
                    <form action="{{ route('register.custom') }}" method="POST">
                        @csrf
                        <div class="user-details">

                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-box">
                                    <label>Name</label>
                                    <input type="text" value="{{ old('name') }}" required name="name" style="padding: 7px !important;" autocomplete="name" autofocus :value="name"/>
                                </div>
                                <div class="input-box">
                                    <label>Email Address</label>
                                    <input type="email" value="{{ old('email') }}" required name="email" style="padding: 7px !important;" autofocus autocomplete="email" autofocus :value="email"/>
                                </div>

                                <div class="input-box">
                                    <label>Phone Number</label>
                                    <input type="text" value="{{ old('phone') }}" required name="phone" style="padding: 7px !important;" autofocus autocomplete="phone" autofocus :value="phone"/>
                                </div>
                                <div class="input-box">
                                    <label>Password</label>
                                    <h5>(passoword must be at least 8 characters)
                                    <input type="password" required name="password" style="padding: 7px !important;" autocomplete="new-password"/>
                                </div>
                                

                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label><b>State</b></label> <br>
                                    <select class="item-input" name="selectedState" wire:model="selectedState" required>
                                      <option value="" >Select a State...</option>
                                      @foreach ($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                          
                                      @endforeach
                                      
                                    </select>
                                     @error('selectedState')
                                    <p class="text-danger">{{ $message }}</p><br>
                                  @enderror
                                </div>
                                <div>
                                    
                                    <label><b>City</b></label> <br>
                                    <select class="item-input" name="selectedCity"  required wire:model="selectedCity" >
                                      <option value="" >Select a City...</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        
                                         @endforeach
                                      
                                    </select>
                                    @error('selectedCity')
                                    <p class="text-danger">{{ $message }}</p><br>
                                  @enderror
                                  

                                </div>
                                
                                <div class="input-box">
                                    <label>Confirm Password</label>
                                    <input type="password" required name="password_confirmation" style="padding: 7px !important;" autocomplete="new-password"/>
                                </div>

                            </div>
                            <div class="user-checkboxes">
                                <div>
                                    <input type="checkbox"/><label for ="">Yes, I want to receive Ayalo email</label>
                                </div>
            
                                <div>
                                    <input type="checkbox" name="terms" required/><label for ="">I agree to the <span>terms, privacy policy</span>, and <span>fees.</span></label>
                                </div>
                                <input type="submit" class="btn create-account-btn" name="submit" value="Create an Account" >
                                <p style="margin-bottom: 50px;">Already have an account?<a href="{{ route('login') }}"> Login</a></p>
                               
                            </div>
                            
            
                         

                        </div>
        
                        
        
                    </div>
        
                           
        
                    </form>
            

                </div>


            </div>

        </div>

    </div>
</div>
</main>