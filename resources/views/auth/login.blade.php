@include('layouts.head')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" style="padding: 0 !important;">
      @include('layouts.header')

    </div>
  </div>
  


  <div class="row" style="margin-top: 0px;">

  <div class="col-md-6" style="background-color: #0F456B; padding-top:30px;">
     <div class="text-center">
        <p class="login-p">A few clicks away from <br>renting your desired item</p>
     </div>
     <div class="login-svg text-center">
       <img src="assets/images/Group 4632.svg" alt="" />
  
     </div>
 </div>
 <div class="col-md-6">
 
   <h2 class="login-name login-size" style="font: Montserrat,sans-serif,serif !important;">Welcome Back!</h2>
   @if (Session::has('message'))
   <div class="alert alert-success">
     {{ Session::get('message') }}

   </div>
 
  @endif
   <x-jet-validation-errors class="mb-4" style="color: red;"/>
   <div class="form">
    <form action="{{ route('login') }}" method="POST">
      @csrf

      <div class="input-box">
        <label><b>Email Address</b></label>
        <input type="email" value="{{ old('email') }}" required name="email" style="padding: 7px !important; width:100%;" autofocus autocomplete="email" autofocus :value="email"/>
      </div>

      <div class="input-box" style="margin-top: 20px;">
        <label><b>Password</b></label>
        <input type="password" required name="password" style="padding: 7px !important; width:100%;" autocomplete="current-password"/>
    </div>

        <div class="d-flex justify-content-between checkbox remember" style="margin-top: 20px;">
          <div class="d-flex align-items-center" >
                <input class="mr-2" id="checkbox"  type="checkbox" name="remember">
                <label class="label-checkbox" for="">Remember me</label>
          </div>
                <a href="{{ route('password.request') }}">Forgot Password?</a>
          </div>

        <!-- </div> -->
        <!-- button Section -->
        <div class="login-div" style="margin-top: 20px;">
          <button class="btn btn-primary login-btn btn-block p-2">Login</button>
        </div>
        <!--End of button Section -->

        <!-- Dont Have an Account Section  -->
        <div class="mb-3 text-center checkbox font-weight-bold" style="margin-top: 20px;">
          <span>Don't have an Account yet?</span><span> <a href="{{ route('register') }}">Join Ayalo</a></span>
        </div>
    </form>
    <!-- </form> -->

    <div class="text-center checkbox font-weight-bold">
      <p class="h4">or</p>
      <p class="h4 my-3">Login with</p>

      <div class="my-2">
        <a class="" href="#"><img class="" src="assets/images/flat-color-icons_google@2x.png" width="50px" height="50px" alt=""></a>
      </div>
    </div>
</div>

 </div>




    

</div>
<div class="row">
  <div class="col-md-12" style="padding: 0 !important;">
      @include('layouts.footer')

  </div>
</div>
</div>


