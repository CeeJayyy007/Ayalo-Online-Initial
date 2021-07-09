<main class="PD_main " style="margin-top: 80px;">

    <!-- First Main Container -->
    
    <div class="PD_first_container">

        <div class="PD_top_container">

            <div class="PD_top_left">

                <p class="available" style="background-color: green">Available</p>

            {{-- start insert --}}

            {{-- <div class="PD_carousel"> --}}
            <div id="carouselExampleControls" class="carousel slide pt-0  img-fluid" data-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img class="d-block pd-img mx-auto" src="{{ asset('storage') }}/{{ $product->image1 }}" alt="First image">
                </div>
                <div class="carousel-item">
                    <img class="d-block pd-img mx-auto" src="{{ asset('storage') }}/{{ $product->image2 }}" alt="Second image">
                </div>
                <div class="carousel-item">
                    <img class="d-block pd-img mx-auto" src="{{ asset('storage') }}/{{ $product->image3 }}" alt="Third image">
                </div>
                <div class="carousel-item">
                    <img class="d-block pd-img mx-auto" src="{{ asset('storage') }}/{{ $product->image4 }}" alt="Fourth image">
                </div>
                <div class="carousel-item">
                    <img class="d-block pd-img mx-auto" src="{{ asset('storage') }}/{{ $product->image5 }}" alt="Fifth image">
                </div>
                </div>
                <div class="text-primary">
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next text-primary" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
            </div>
        {{-- </div> --}}

            {{-- end insert --}}

                {{-- <div class="PD_carousel">
                    <img src="{{ asset('assets/images/pd_left_eva_arrow-ios-back-fill.svg') }}" alt="left arrow">
                    <img src="{{ asset('storage') }}/{{ $product->image2 }}" alt="">
                    <img src="{{ asset('storage') }}/{{ $product->image3 }}" alt="">
                    <img src="{{ asset('storage') }}/{{ $product->image4 }}" alt="">
                    <img src="{{ asset('storage') }}/{{ $product->image5 }}" alt="">

                    <img src="{{ asset('assets/images/pd_right_eva_arrow-ios-back-fill.svg') }}" alt="right arrow">
                </div> --}}

                <p class="PD_left_p">SHARE THIS PRODUCT</p>
                <img class="PD_socials"src="{{ asset('assets/images/PD_twitter.svg') }}" alt="twitter logo">
                <img class="PD_socials"src="{{ asset('assets/images/PD_facebook.svg') }}" alt="facebook logo">

            </div>
            
            <div class="PD_top_right">

                <div>

                    <h2 class="PD_Nikkon">{{ $product->name }}</h2>
                <p>4.9 ⭐(20 Ratings)</p>
                </div>
                <p>Condition: <b><span style="color: green; padding:3px;">  {{Str::ucfirst($product->condition)  }}</span></b></p>
                <p>Owner: <b>{{ $product->user->name }}</b></p>
                <img src="{{ asset('assets/images/carbon_location.svg') }}"/>
                <p class="PD_loc_map">Location: <b>{{ $product->city->name }}, {{ $product->state->name }}</b></p>
                <hr>
                <div class="PD_top_h3">
                    <h3>PRICE: ₦{{ number_format($product->daily_rate )}}/Day</h3>
                    <h3>CAUTION FEE: ₦{{ number_format($product->causion_fee) }}</h3>

                </div>
                
                <p class="PD_req_p"> Request an item at least 24hrs before proposed
                delivery</p>
               <a href="{{ route('user.request-summary',['product_id'=>$product->id]) }}" style="width: 100% !important;" class="btn btn-primary">Request for Item</a>

            </div>
            
        </div>

        <hr class="PD_mid_hr">

        <div class="PD_mid">

            <div class="PD_description_left">
                <h6>Item Description</h6>
                <hr>

                <p><strong>Colour:</strong> {{ Str::ucfirst($product->colour) }}</p>
                <p><strong>Size:</strong> {{Str::ucfirst($product->size ) }}</p>
                <p><strong>Additional Information:</strong></p>
                <p>{{ $product->description }}</p>
                

            </div>

            <div class="PD_description_right">
                <h6 class="PD_john">Other Items by John Obidi</h6>
                <div class="PD_johns_items">
                    <div class="PD_images_own">
                        <div class="PD_lease">
                            <img src="{{ asset('assets/images/PD_second_container1.png') }}" alt="item to lease">
                            <p class="PD_available1" style="background-color: green; padding:3px;">Available</p>
                        </div>
                        <h6>Lens</h6>
                        <p class="PD_mid_photo">Photography</p>
                        <p class="p_img"><img src="{{ asset('assets/images/carbon_location.svg') }}"/>Ikeja,
                        Lagos</p>
                        <div class="PD_span">
                            <span class="PD_span_cost">N2,000/Day </span><span class="PD_span_star">3.0 ⭐</span>
                        </div>
                    </div>
                    <div class="PD_images_own">
                        <div class="PD_lease">
                            <img src="{{ asset('assets/images/pd_second_container2.jpg') }}" alt="item to lease">
                            <p class="PD_available2" style="background-color: green; padding:3px;">Available</p>
                        </div>
                        <h6>Studio Seats</h6>
                        <p class="PD_mid_photo">Photography</p>
                        <p class="p_img"><img src="{{ asset('assets/images/carbon_location.svg') }}"/>Ikeja,
                        Lagos</p>
                        <div class="PD_span">
                            <span class="PD_span_cost"></>N10,000/Day
                            </span><span class="PD_span_star">3.0 ⭐</span>
                        </div>
                    </div>
                    <div class="PD_iamges_own description_arrow">
                        <img src="{{ asset('assets/images/PD_secondcontainer_rightarrow.svg') }}" alt="">
                    </div>
                </div>
            </div>
                
        </div>

        <div class="PD_bottom_reviews">

            <div class="PD_review_heading">
                <h3>User's review</h3>
            </div>
                
            <div class="PD_reviews">

                <div class="PD_individual_review">
                    <img src="{{ asset('assets/images/PD_review1.png') }}" alt="">
                    <div>
                        <h6>Tamara Daniels</h6>
                    <p class="PD_star">4.0 ⭐</p>
                    <p class="PD_review_text">"The camera really came throught for me at a crucial moment.The renting process was so easy"</p>
                    </div>
                </div>

                <div class="PD_individual_review">
                    <img src="{{ asset('assets/images/PD_review2.png') }}" alt="">
                    <div>
                        <h6>Shola Adebayo</h6>
                    <p class="PD_star">5.0 ⭐</p>
                    <p class="PD_review_text">"The camera is so strong and has very amazing features"</p>
                    </div>
                </div>

                <div class="PD_individual_review">
                    <img src="{{ asset('assets/images/PD_review3.png') }}" alt="">
                    <div>
                        <h6>Mitchelle Kayode</h6>
                    <p class="PD_star">4.0 ⭐</p>
                    <p class="PD_review_text">"Renting this camera was tthe best decision I made and it was so helpful for a job I had to do"</p>
                    </div>
                </div>

                <div class="PD_individual_review">
                    <img src="{{ asset('assets/images/PD_review4.png') }}" alt="">
                    <div>
                        <h6>Maxwell Okonkwo</h6>
                    <p class="PD_star">4.0 ⭐</p>
                    <p class="PD_review_text">"The camera was so clean and the pictures came out so nice"</p>
                    </div>
                </div>

            </div>

            <div class="TD_bottom_left_arrow">
                <img src="{{ asset('assets/images/PD_bottom_left arrow.svg') }}" alt="left arrow">
                <img src="{{ asset('assets/images/PD_bottom_right arrow.svg') }}" alt="right
                arrow">
            </div>
                
        </div>

    </div>

    <!-- Second Main Container -->

    <div class="PD_second_container">

        <h3>People Also Viewed</h3>

        <div class="PD_views">
            
            <div class="PD_also_viewed">
                <img class="PD_img" src="{{asset('assets/images/PD_also_viewed1.png' )}}">
                <p class="available" style="background-color: green; padding:3px;">Available</p>
                <div>
                    <h6>Tripod Stand</h6>
                <p class="PD_photo">Photography</p>
                <p class="p_img"><img src="{{asset('assets/images/carbon_location.svg') }}"/>Ajah, Lagos</p>
                <div>
                    <span class="PD_span_view">N2,000/Day </span><span>3.0 ⭐</span>
                </div>
                </div>
            </div>
            <div class="PD_also_viewed">
                <img class="PD_img" src="{{ asset('assets/images/PD_also_viewed2.png') }}" alt="item viewed">
                    <p class="PD_rented">Rented Out</p>
                <div>
                    <h6>MacBook Pro</h6>
                <p class="PD_photo">Electronics</p>
                <p class="p_img"><img src="{{ asset('assets/images/carbon_location.svg') }}"/>Ikeja, Lagos</p>
                <div>
                    <span class="PD_span_view">N25,000/Day </span><span>3.0 ⭐</span>
                </div>
                </div>
                
            </div>
            <div class="PD_also_viewed">
                <img class="PD_img" src="{{ asset('assets/images/PD_also_viewed3.png') }}" alt="item viewed">
                    <p class="available" style="background-color: green; padding:3px;">Available</p>
                <div>
                    <h6>Iron</h6>
                <p class="PD_photo">Electronics</p>
                <p class="p_img"><img src="{{ asset('assets/images/carbon_location.svg') }}"/>Ikeja, Lagos</p>
                <div>
                    <span class="PD_span_view">N500/Day </span><span>3.0 ⭐</span>
                </div>
                </div>
                
            </div>
            <div class="PD_also_viewed">
                <img class="PD_img" src="{{ asset('assets/images/PD_also_viewed4.png') }}" alt="item viewed">
                    <p class="available" style="background-color: green; padding:3px;">Available</p>
                <div>
                    <h6>Reflectors</h6>
                <p class="PD_photo">Photography</p>
                <p class="p_img"><img src="{{ asset('assets/images/carbon_location.svg') }}"/>Ojota, Lagos</p>
                <div>
                    <span class="PD_span_view">N10,000/Day </span><span>3.0 ⭐</span>
                </div>
                </div>
                
            </div>
            <div class="PD_also_viewed">
                <img class="PD_img" src="{{ asset('assets/images/PD_also_viewed5.png') }}" alt="item viewed">
                    <p class="available" style="background-color: green; padding:3px;">Available</p>
                <div>
                    <h6>Guitar</h6>
                <p class="PD_photo">Music</p>
                <p class="p_img"><img src="{{ asset('assets/images/carbon_location.svg') }}"/>Ibadan, Oyo</p>
                <div>
                    <span class="PD_span_view">N5,000/Day </span><span>4.7 ⭐</span>
                </div>
                </div>
                
            </div>
            <div class="PD_also_viewed">
                <img class="PD_img" src="{{ asset('assets/images/PD_also_viewed6.png') }}" alt="item viewed">
                    <p class="available" style="background-color: green; padding:3px;">Available</p>
                <div>
                    <h6>Keyboard</h6>
                <p class="PD_photo">Music</p>
                <p class="p_img"><img src="{{ asset('assets/images/carbon_location.svg') }}"/>Wuse, Abuja</p>
                <div>
                    <span class="PD_span_view">N3,000/Day </span><span>4.7 ⭐</span>
                </div>
                </div>
                
            </div>

        </div>

    </div>




</main>