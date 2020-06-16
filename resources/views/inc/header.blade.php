<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="/"><img src="/img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-center">
              <li class="nav-item"><a class="nav-link" href="/">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="/about">About</a></li> 
              <li class="nav-item"><a class="nav-link" href="/">Category</a>
              @if (Auth::guest())
                  <li class="nav-item"><a class="nav-link" href="/">Post</a>
              @else
                  <li class="nav-item submenu dropdown">
                    <a href="/" class="nav-link dropdown-toggle" data-toggle="" role="button" aria-haspopup="true"
                      aria-expanded="false">Post</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="nav-link" href="/post/create">Create Post</a></li>
                    </ul>
                  </li>  
               @endif       
              <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right menu_nav justify-content-end "  >
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}" >Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}" >Register</a></li>
                @else
                    <li class="nav-item submenu dropdown">
                        <a class="nav-link" href="/" class="dropdown-toggle" data-toggle="" role="button" aria-haspopup="true">
                            {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>