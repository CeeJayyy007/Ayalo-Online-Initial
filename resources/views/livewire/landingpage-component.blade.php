
<main id="main" style="margin-top: 0px;">
    
    <div class="top-main-contain">
        <div class="top-main">
            <h1>Renting has never <br/> been easier!</h1>
            <p>Ayalo online connects people who have things available for rent
            to individuals in need of such items. Everything happens fast and
            smoothly. You are welcome to happiness.
            </p>
            <form action=""  class="search-form">
                <input type="search" name="search" id="search" placeholder="Bicycle, car, drone" 
                class="search-input" required>
                <i class="fas fa-search search-icon"></i>
                <input type="submit" value="Search" class=" btn-submit-search">
            </form>
            <a href="{{ route('user.add_new_item') }}" class="add-item-link" >Add an item</a>
        </div>
        <img src="{{ asset('assets/images/background-image.jpg') }}" alt="">
    </div>
    <section class="earn-section">
        <div class="earn-detail">
            <h2>Earn money from renting your things</h2>
            <p>Have unused items or equipments you don't mind lending out?<br/>
                Join our community of lenders and make money by lending out these
                items and equipments.
            </p>
            <a href="" class="start-rent-link">Start renting</a>
        </div>
        <img src="{{ asset('assets/images/pic.svg') }}" alt="">
       
    </section>
    <section class="services-section">
        <h2>Our Services</h2>
        <div class="service">
           <div class="each-service">
                <img src="{{ asset('assets/images/lend.svg') }}" alt="Lend" class="lend-img">
                <div class="detail-service">
                    <p class="process">Lend</p>
                    <p>We connect individuals that 
                        want to increase their income 
                        through leasing out their 
                        properties with interested 
                        people for a specified period

                    </p>
                </div>
            </div> 
            <div class="each-service">
                <img src="{{ asset('assets/images/rent.svg') }}" alt="Rent" class="rent-img">
                <div class="detail-service">
                    <p class="process">Rent</p>
                    <p>Ayalo offers you a wide range of 
                        quality products you can rent 
                        from trustworthy owners for an 
                        affordable fee that will give you
                        maximum satisfaction in any
                        project you are running
                    </p>
                </div>
            </div> 
            <div class="each-service">
                <img src="{{ asset('assets/images/delivery.svg') }}" alt="delivery" class="delivery-img">
                <div class="detail-service">
                    <p class="process">Delivery</p>
                    <p>Ayalo offers delivery services by 
                        helping pick up form the lender
                        and also deliver to the renter
                        This process is also repeated
                        during the return process
                    </p>
                </div>
            </div> 
        </div>
       
    </section>
    <section class="rent-process">
        <h2>The Renting Process</h2>
        <div class="rent-process-contain">
            <div class="rent-process-item"> 
                <span class="process-no">1</span>
                <p>Search for an item</p>
            </div>
            <div class="separate-process"></div>
            <div class="rent-process-item">
                <span class="process-no">2</span>
                <p>Get the details of<br/>selected item</p>
            </div>
            <div class="separate-process"></div>
            <div class="rent-process-item">
                <span class="process-no">3</span>
                <p>Send a request to the <br/>
                    item owner and they <br/>
                    approve your request
                </p>
            </div>
            <div class="separate-process"></div>
            <div class="rent-process-item">
                <span class="process-no">4</span>
                <p>You make necessary<br/>payments</p>
            </div>
            <div class="separate-process"></div>
            <div class="rent-process-item">
                <span class="process-no">5</span>
                <p>The item gets<br/>gets delivered to <br/>
                    your doorstep
                </p>
            </div>
        </div>
    </section>
    <section class="sponsors">
        <h2>Our Sponsors</h2>
        <div>
            <img src="{{ asset('assets/images/zuri-logo.svg') }}" alt="Zuri" class="zuri-logo">
            <img src="{{ asset('assets/images/IFG-logo.svg') }}" alt="Ingressive For Good" class="i4g-logo">
            <img src="{{ asset('assets/images/HNG-logo.svg') }}" alt="Hng Internship" class="hng-logo">
        </div>
    </section>
    <section class="user-view-contain">
        <h2>What Our Users Are Saying</h2>
        <div>
            <div class="user-view">
                <img src="{{ asset('assets/images/user-Joan.svg') }}" alt="Joan Bankole">
                <p>"I was amazed when I rented a beautiful wedding gown for my 
                wedding here on Ayalo. It was a dream come true and I am 
                forever grateful to Ayalo online for making my fairy tale 
                wedding gown come true at a very affordable price"
                </p>
            </div>
            <div class="user-view">
                <img src="{{ asset('assets/images/user-Ali.svg') }}" alt="Hassan Ali">
                <p>"As a farmer, trying to get tractors to work with can be really 
                   expensive but I was able to rent a very good tractor on Ayalo 
                   at a very affordable price. The delivery service was also
                   spectacular"
                </p>
            </div>
        </div>
    </section>

</main>
    
