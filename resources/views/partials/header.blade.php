<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

  <a class="navbar-brand" href="{{route('product.index')}}">Upay</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
  
    <ul class="navbar-nav mr-auto">
      @guest
      <li class="nav-item disabled">
        <a class="nav-link" href="{{ route('login') }}">Home</a>
      </li>
      @else
      <li class="nav-item {{Request::is('home') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      @endguest
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      @guest
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Register</a>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="{{route('product.shoppingCart')}}">
          <i class="fa fa-shopping-cart"></i> Shopping Cart<span class="badge badge-secondary badge-pill">{{Session::has('cart')?Session::get('cart')->totalQty:''}}</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://Ecommerce/user" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img style="width: 25px; border-radius: 50%;" src="{{URL::to('src\profiel_picture.jpg')}}" alt="profile img">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
        </div>
      </li>
      @endguest
    </ul>
  
    <form class="form-inline my-2 my-lg-0" action="/search">
      <input name = "search" class="form-control mr-sm-2" type="text" placeholder="SEARCH" aria-label="Search" value={{request()->input('search')}}> 
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  
  </div>
</nav>

<h1>Ecommerce</h1>
