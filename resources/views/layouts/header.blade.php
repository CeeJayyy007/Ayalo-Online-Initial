<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
              <a class="nav-link" href="#">Listed Items</a>
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
            <a href="{{ route('login') }}" class="btn btn-primary mr-3 lr-btn" >Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary ml-3 lr-btn">Register</a>

            @endauth
            @endif
          </ul>
        </div>
           </div>
          </div>
          </nav>
