<header class="header_area">
  <div id="header_navbar" class="header_navbar">
    <div class="container position-relative">
      <div class="row align-items-center">
        <div class="col-xl-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/">
              <img id="logo" src="{{ asset('images/logo/logo.svg') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
              <ul id="nav" class="navbar-nav">
                <li class="nav-item">
                  <a class="page-scroll active" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="/about">About</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="/service">Service</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="/category">Category</a>
                </li>
              </ul>
            </div>
            <ul class="header-btn d-md-flex">
              <li>
                <a href="#" class="main-btn account-btn">
                  <span class="d-md-none"><i class="lni lni-user"></i></span>
                  <span class="d-none d-md-block">My Account</span>
                </a>
                <ul class="dropdown-nav">
                  @if (Route::has('login'))
                    @auth
                  <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
                  <li><a href="/profile-settings">Profile Settings</a></li>
                  <li><a href="/post-ad">Post Ad</a></li>
                  <li><a href="/my-ads">My Ads</a></li>
                  <li><a href="/offers">Offers/Messages</a></li>
                  <li><a href="/payments">Payments</a></li>
                  <li><a href="/favorites">Favorites</a></li>
                  <li><a href="/privacy">Privacy</a></li>
                  <li><a href="javascript:void(0)" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Sign Out</a></li>
                  <form
                    id="logout-form"
                    method="POST"
                    action="{{ route('logout') }}"
                    class="d-none"
                    >
                    @csrf
                  </form>
                    @else
                  <li><a href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                  <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                    @endauth
                  @endif
                </ul>
              </li>
              <li>
                <a href="/post-ad" class="main-btn btn-hover d-none d-md-block">Post An Ad</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
