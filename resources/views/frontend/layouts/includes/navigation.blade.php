
<header class="navigation sticky-top bg-white">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="{{ route('index')}}"> <img src="{{ asset('images/logo.png')}}" alt="Vex" width="100px">
      </a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="navigation">
        <ul class="navbar-nav ml-auto mr-n0 mr-md-n3">

          <li class="nav-item">
            <a class="nav-link" href="{{ route('index')}}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('products')}}">Products</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('blog')}}">Blog</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#!" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages <i class="tf-ion-chevron-down"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="{{ route('blog-details')}}">Blog Details</a></li>
              <li><a class="dropdown-item" href="{{ route('product-details')}}">Product Details</a></li>
              <li><a class="dropdown-item" href="{{ route('privacy-policy')}}">Privacy Policy</a></li>
              <li><a class="dropdown-item" href="{{ route('terms-conditions')}}">Terms Conditions</a></li>

              <li class="dropdown dropdown-submenu dropright">
                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu 01</a>

                <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                  <li><a class="dropdown-item" href="{{ route('index')}}">Submenu 11</a></li>
                  <li><a class="dropdown-item" href="{{ route('index')}}">Submenu 12</a></li>
                </ul>
              </li>

              <li class="dropdown dropdown-submenu dropleft">
                <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu 02</a>

                <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                  <li><a class="dropdown-item" href="{{ route('index')}}">Submenu 21</a></li>
                  <li><a class="dropdown-item" href="{{ route('index')}}">Submenu 22</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Review</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact')}}">Contact</a>
          </li>

        </ul>

      </div>
    </nav>
  </div>
</header>
