

<section class="rental-body">
    <div class="col-md-9 mx-auto ">

    <div class="row">
        
        <div class="col-md-12">
            <div class="rental">
                <h2 class="rental-text">Rental & Delivery Service</h2>
            </div>
        </div>
        
        <div class="col-sm-12 row mx-auto px-0">
        <div class="col-sm-12 col-md-6">
           <!-- form section -->
            <!-- left form -->
       
           <div class="left-form">
               <div class="title-text myprofile">Personal Details</div>
               
                <div class="div1">
                    <div class="label-identity"><label for="name">Name</label></div>
                    <div class="name-section">{{ $request->renter->name }}</div>
                </div>
       
                <div class="div2">
                   <div class="label-identity"><label for="phone number">Phone Number</label></div>
                   <div class="number-section"> {{ $request->renter->phone }}</div>
               </div>
       
               <div class="div3">
                   <div class="label-identity"><label for="name">Email</label></div>
                   <div class="email-sectionn">{{ $request->renter->email }}</div>
               </div>
               
           </div>
       </div>


        <div class="col-sm-12 col-md-6">
           <!-- right form -->
            <div class="right-form">
            <div class="title-text myprofile">Rental Options</div>
           
             <div class="div1">
                 <div class="label-identity"><label for="name">Item Name</label></div>
                 <div class="camera-section">{{ $request->product->name }}</div>
             </div>
    
             <div class="div2">
                <div class="label-identity"><label for="phone number">Owner</label></div>
                <div class="borrower-section">{{ $request->owner->name }}</div>
            </div>
    
            <div class="div3">
                
                <div class="label-identity"><label for="name">Rent Duration</label></div>
                <div class="duration">
                    <div class="from1">
                        <div class="from">
                                <p>From:</p>
                            </div>    
                            <div class="date-section">
                                {{ $request->start_date }}
                            </div>
                           
                        </div>
                    
                        
                        
                        <div class="to1">
                            <div class="to">
                                <p>To:</p>
                            </div>
                            <div class="month-section">
                                {{ $request->end_date }}
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
            
        </div>
    </div>
    
    {{-- </section> --}}
        {{-- </div>  --}}
        
    <div class="col-md-12">
            <!-- delivery section -->
    {{-- <section class="delivery-section"> --}}
        <div class="delivery">
            <div class="delivery-text myProfile">Delivery Options</div>
           
                 {{-- <form action="" method="POST">
                     @csrf --}}
                     <!-- first -->
                    <div class="row rental-row mr-0">
                    <div class="col-md-12 row my-5 pr-0">
                             <div class="col-md-6 pl-0">
                                 <label for="first name"><strong>First Name</strong></label>
                            
                             <div class="firstname-section">
                                 <input type="firstname" id="firstname" placeholder="Jennifer">
                                
                             </div>
                         </div>
                         <div class="col-md-6 pl-0">
                                 <label for="last name"><strong>Last Name</strong></label>   
                              
                              <div class="lastname-section">
                                  <input type="lastname" id="lastname" placeholder="Williams">
                              </div>
                         </div>
                        </div>
                     <!-- second  -->
                     <div class="col-md-12 pl-0">
                        <div class="col-md-12 pl-0">
                            <label for="address"><strong>Delivery Address</strong></label>
                            <div class="address-section">
                             <input type="address" id="address" placeholder="45, Sturton Estate, Off Lekki Expressway, Lekki, Lagos">
                             
                         </div>
                        </div> 
                    </div>      
                      <!-- third  -->
                      <div class="col-md-12 row my-5 pr-0">
                        <div class="col-md-6 pl-0">
                                 <label for="phone"><strong>Phone Number</strong></label>
                             <div class="phone-section">
                                 <input type="firstname" id="phone" placeholder="081 123 45 678">
                             </div>
                             <p class="text-danger mt-3"> 
                                 Delivery charges apply
                            </p> 
                         </div>
                         <div class="col-md-6 pl-0">
                                 <label for="last name"><strong>Alternative Phone Number</strong> (Optional)</label>   
                        
                              <div class="altphone-section">
                                  <input type="lastname" id="alt">
                              </div>
                         </div>
                        </div>
                        <div class="mx-auto mb-5 col-md-5 pl-0 mr-4">
                            <a href="{{ route('user.payment') }}" style="width: 100%" class="btn btn-primary" type="submit">Proceed to Payment</a>
                        </div>
                    </div>

            {{-- </form> --}}
        </div>
    </div>
</div>
</div>
</section>
    


    
    