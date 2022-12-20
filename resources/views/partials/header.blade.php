<header >
    <div class="blue-topbar text-uppercase ">
        <div class="container-md d-flex justify-content-end">
            <div class="me-4">dc power&#8480; visa&reg;</div>
            <div>additional dc sites&reg; <i class="fa-solid fa-caret-down"></i></div>
        </div>

    </div>
    <nav class="navbar navbar-expand-md bg-light p-0" aria-label="Fifth navbar example">
        <div class="container-md">
          <a class="navbar-brand my-navbar-logo" href="#"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="dc logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse my-navbar-menu" id="navbarsExample05">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a @if (Route::currentRouteName() == 'home')
                class="nav-link my-active"
                @else
                class="nav-link"
                @endif
                 href="/">home</a>
              </li>
              <li class="nav-item">
                <a @if (Route::currentRouteName() == 'comics.index')
                class="nav-link my-active"
                @else
                class="nav-link"
                @endif
                 href="{{route('comics.index')}}">comics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">movies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">tv</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">games</a>
              </li>
              <li class="nav-item">
                <a 
                @if (Route::currentRouteName() == 'comics.create')
                class="nav-link my-active"
                @else
                class="nav-link"
                @endif
                 href="{{route('comics.create')}}">Add your Comic</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">videos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">fans</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">news</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <form role="search" class="d-flex my-search">
              <input class="form-control border-0 text-right" type="search" placeholder="Search" aria-label="Search">
              <button class=" border-0 bg-transparent"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>
        </div>
    </nav>
    <section class="jumbo img-space">
      <div class="container sect-title">
        @yield('section-title')
      </div>
    </section>
</header>