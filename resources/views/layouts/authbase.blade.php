<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A place you can borrow a wide range of equipments to get your project done">
    <meta name="keywords" content="Lend, Borrow, products, delivery, equipments, products">
    <title>Ayalo</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <script src="https://kit.fontawesome.com/52bee42511.js" crossorigin="anonymous"></script>
    @livewireStyles
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light fixed">
      <div class="container-fluid">
<div>
  <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/AYALO-logo.svg') }}" alt="ayalo-logo" class="logo"/></a>
</div>

<div class="float-right">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">

              <form class="form-inline" action="#" wire:submit.prevent="searchForm" enctype="multipart/form-data">
                @csrf
                <input class="form-control mr-sm-2 search-box" type="search" placeholder="Search..." aria-label="Search" wire:model.defer='search'>
                <div class="nav-img">
                    <button type="submit" id="searchForm" class="nav-btn btn btn-lg btn-primary">Search <i class="fab fa-lg fa-searchengin"></i></button>
                    </div>
                </form>
              <li class="nav-item active">
              <a class="nav-link" href="{{ route('homepage') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            @if (Auth::user())
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user.my_listed_items') }}">Listed Items</a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.add_new_item') }}">Add an Item</a>
              </li>

            @if(Route::has('login'))
            @auth
                @if(Auth::user()->utype === 'ADM')
                <img src="{{ asset('assets/images/Ellipse 14.svg') }}" alt="user-image" class="user-img" class="nav-item"/>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle dropbtn btn btn-primary" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 {{ Auth::user()->name }}
               </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a class="dropdown-item" href="{{ route('admin.category') }}">Category</a>
                <a class="dropdown-item" href="{{ route('admin.product') }}">Product</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                </form>
                </div>
            </li>
            @else

            <img style="margin-right:5px;"src="{{ asset('assets/images/Ellipse 14.svg') }}" alt="user-image" class="user-img" class="nav-item"/>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn btn-primary" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }}
                </a>
               <div class="dropdown-menu" style="font-size:1.2rem;" aria-labelledby="navbarDropdownMenuLink">
                 <a class="dropdown-item" href="{{ route('user.dashboard') }}">Requests for my Items</a>
                 <a class="dropdown-item" href="{{ route('user.my_requests') }}">My Requests</a>
                 <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                 <form id="logout-form" method="POST" action="{{ route('logout') }}">
                     @csrf
                 </form>
                 </div>
             </li>

            @endif

            @else
            <li class="nav-item">
            <a href="{{ route('login') }}" class="btn btn-primary mr-3 lr-btn" >Login</a>
            </li>
            <li class="nav-item">
            <a href="{{ route('register') }}" class="btn btn-primary  lr-btn">Register</a>
            </li>
            @endauth
            @endif
          </ul>
        </div>
           </div>
          </div>
          </nav>    
    

    {{ $slot }} 
   
    <footer>
        <p class="subscribe-text">Subscribe to our newsletter to get updates on latest items and offers!</p>
        <form action="" class="subscribe-email-form">
            <input type="email" placeholder="Email Address" name="subscribe-via-email" id="subscribe-email" 
            class="subscribe-email-input" required>
            <input type="submit" value="Subscribe" class="btn-subscribe-email">
        </form>
        <section class="additional-info">
            <section class="additional-info-section">
                <h3>Information</h3>
                <ul class="additional-link-contain">
                    <li class="additional-list"><a href="">Pricing</a></li>
                    <li class="additional-list"><a href="">About Us</a></li>
                </ul>
            </section>
            <section class="additional-info-section">
                <h3>Help</h3>
                <ul class="additional-link-contain">
                    <li class="additional-list"><a href="">Support</a></li>
                    <li class="additional-list"><a href="">Contact</a></li>
                </ul>
            </section>
            <section class="additional-info-section">
                <h3>Legal</h3>
                <ul class="additional-link-contain">
                    <li class="additional-list"><a href="">Terms &amp; Conditions</a></li>
                    <li class="additional-list"><a href="">Privacy Policy</a></li>
                    <li class="additional-list"><a href="">License Agreement</a></li>
                </ul>
            </section>
            <section class="additional-info-section">
                <h3>Social Media</h3>
                <ul class="additional-link-contain">
                    <li class="additional-list"><a href="">Twitter</a></li>
                    <li class="additional-list"><a href="">Facebook</a></li>
                    <li class="additional-list"><a href="">Linkedin</a></li>
                </ul>
            </section>
        </section>
        <section class="payment-method-contain">
            <h3>Payment Methods</h3>
            <ul class="payment-method">
                <li><a href="" class="payment-link">Mastercard</a></li>
                <li><a href="" class="payment-link">Verve</a></li>
                <li><a href="" class="payment-link">Visa</a></li>
                <li><a href="" class="payment-link">Interswitch</a></li>
            </ul>
        </section>
    </footer>

    <script>
       


        const hamburger = document.querySelector(".hamburger");
      const navDisplay = document.querySelector(".nav-display");

      hamburger.addEventListener("click", mobileMenu);

      function mobileMenu() {
          hamburger.classList.toggle("active");
          navDisplay.classList.toggle("active");
      }

      const navLink = document.querySelectorAll(".nav-item");

      navLink.forEach(n => n.addEventListener("click", closeMenu));

      function closeMenu() {
          hamburger.classList.remove("active");
          navDisplay.classList.remove("active");
      }



        // When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("header");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
    </script>
    @livewireScripts

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>