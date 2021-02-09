
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
        <div class="container">
  
          <div class="navbar-left">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="{{ route('welcome') }}">
              <img class="logo-dark" src="{{ asset('img/logo-dark.png') }}" alt="logo">
              <img class="logo-light" src="{{ asset('img/logo-light.png') }}" alt="logo">
            </a>
          </div>
  
         
  
          <a class="btn btn-xs btn-round btn-success" href="{{ route('login') }}">Login</a>
  
        </div>
      </nav><!-- /.navbar -->