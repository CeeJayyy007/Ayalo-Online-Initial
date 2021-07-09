<div class="paymentWrapper">
       
     
      
       <div class="orderSummary">
           <img class="my-4" src="{{ asset('assets/images/Rectangle 156.png') }}" alt="camera">
           <h4>Nikkon D7200:  Nikkor AFP VR DX 18-55mm plus 16-80mm</h4>
            <p><strong>Rental Duration:</strong> August 22nd, 2021 - August 29th, 2021 (7 days)</p>
            <h5>Order Summary</h5>
            <div>
                <p>Sub-Total</p>
                <p>N21,000</p>
            </div>
            <div>
                <p>Caution Fee</p>
                <p>N10,000</p>
            </div>
            <div>
                <p>Delivery Fee</p>
                <p>N102</p>
            </div>
            <div>
                <h5>Total</h5>
                <h5>N31,102</h5>
            </div>
       </div>

       <div class="paymentDetails">
           <input style="margin-top: 4rem;" class="mb-4" type="submit" name="submit" value="Pay with Stripe" id="stripe">
           
           <div class="payWithcard">
               <!-- <div></div> -->
               <!-- <p><small>or Pay With Card</small></p> -->
               <p><small>OR</small></p>
              <!-- <div></div> -->
           </div>

           <input style="margin-top: 0rem;" class="mb-4" onclick="location.href='https://paystack.com/pay/zrxagban0l';" type="submit" name="submit" value="Pay with Paystack" id="stripe">


        <!-- <form class="payment-form" action="">

             <div class="email form-group my-5">
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email">
             </div>

             <div class="usersName form-group my-5">
                <label for="name">Name on Card</label><br>
                <input type="text" name="name" id="name">
             </div>

             <div class="cardNumber form-group my-4">
                <label for="cardNo">Card Number</label><br>
                <input type="text" name="cardNo" placeholder="1234 1234 1234 1234" id="cardNo">
                <div class="payCards">
                    <img class="visa" src="{{ asset('assets/images/visa.png') }}" alt="visa">
                    <img class="mastercard" src="{{ asset('assets/images/mastercard.png') }}" alt="mastercard">
                    <img class="verve" src="{{ asset('assets/images/verve.png') }}" alt="verve">
                </div>
             </div>

             <div class="expirydate my-5">
                   <div class="expiry">
                       <label for="expiry">Expiry Date</label> <br>     
                       <input type="text" id="expiry" placeholder="MM">
                       <input type="text" id="expiry" placeholder="YY">
                   </div>

                   <div class="expiry cvv">
                       <label for="cvv">CVV</label><br>
                       <input type="text" name="cvv" id="expiry">
                   </div>
             </div>

             <input type="submit" name="submit" value="Pay N31,102" id="pay">
             
         </form> -->

     </div>
   </div>