
    <header> 
      
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light" id="mainNav" data-toggle="affix">
        <div class="container">
          <a class="my-green navbar-brand smooth-scroll" href="{{ route('welcome') }}">
            <span class="my-green">Liber</span> Call
          </a> 
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span>
          </button>  
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              
                
                <!-- li class="nav-item" ><a class="nav-link smooth-scroll" href="myaccount.html">Features</a></li -->
                <!-- li class="nav-item" ><a class="nav-link smooth-scroll" href="myaccount.html">My Account</a></li -->
                
                        @guest
                            <li class="nav-item" ><a class="nav-link smooth-scroll" href="{{ route('faq') }}">Help</a></li> 
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else

                          @if(Auth::user()->roleid==0)
                            <li class="nav-item active" ><a class="nav-link smooth-scroll" href="{{ route('home') }}">Dashboard</a></li>
                          @endif

                          @if(Auth::user()->roleid==1)
                            <li class="nav-item active" ><a class="nav-link smooth-scroll" href="{{ route('upload') }}">Dashboard</a></li>
                          @endif

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->mobile }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        @endguest
            </ul>  
          </div>
        </div>
      </nav>
    </header> 
